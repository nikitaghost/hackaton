<?php
namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;


use app\models\SigninForm;
use app\models\SignupForm;



class UserController extends Controller {
    public $rememberMe = true;

    public function actionIndex()
    {
        $user = new User();

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/signin']);
        } else {
            $dataUser = $user->getUserId(Yii::$app->user->identity->id);
        }


        return $this->render('account', compact('dataUser'));

    }

    public function actionSignin(){
        $new_user = false;

        //Проверка авторизации
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['/me']);
        }



        $model = new SigninForm();
        if ($model->load(Yii::$app->request->post()))  {
            $model->generateAuthKey();
            if ($model->login()) {
                return $this->redirect(['/me']);
           }
        }



        return $this->render('signin', compact('model'));
    }

    public function actionSignup(){

        //Проверка авторизации
        if (!Yii::$app->user->isGuest) {
                return $this->redirect(['/learn']);
        }

        $model = new SignupForm(); // Подключение модели формы регистарции

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user = new User(); // Подключение модели пользователя

            $user->first_name = $model->first_name;
            $user->last_name = $model->last_name;
            if(!empty($model->patronymic))
                $user->patronymic = $model->patronymic;
            $user->email = $model->email;
            $user->password = \Yii::$app->security->generatePasswordHash($model->password);
            $user->registration_ip = $_SERVER['REMOTE_ADDR'];
            $user->registration_date = date("Y-m-d H:i:s");
            $user->key_verification = md5(rand()*58%23/5*4389573495);
            $key = $user->key_verification;
            $user->save();

            $model->login();

//            $link = 'http://near-you.store/email-verification/'.$user->id.'/'.$key;
//
//            $mail = Yii::$app->mailer->compose()
//                ->setFrom('noreply@near-you.store')
//                ->setTo($model->email)
//                ->setSubject('Подтверждение регистрации')
//                ->setTextBody('')
//                ->setHtmlBody('<b>Здравствуйте, '.$model->first_name.'! Просим вас подтвердить регистрацию в нашем интернет-магазине. Если вы не проходили региcтрацию, то проигнорируйте это сообщение. Для подтвержения нажмите на кнопку ниже.</b><br>
//                                  <a href="'.$link.'" style="padding: 7px 18px;
//                                                     border-radius: 0;
//                                                     display: inline-block;
//                                                     border: 1px solid #384aeb;
//                                                     color: #222;
//                                                     font-weight: 500;
//                                                     background: #384aeb;
//                                                     color: #fff;
//                                                     text-decoration: none;
//                                                     transition: all .4s ease;
//                                                     margin: 0 auto;
//                                                     margin-top: 30px;
//                                                     text-align: center;
//            ">Подтвердить</a>')
//            ->send();

            return $this->redirect(['/learn']);
        }

        return $this->render('signup', compact('model'));
    }

     public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionAccount(){
        //Проверка авторизации
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/singin']);
        }

        $user = new User();
        $dataUser = $user->getUserId(Yii::$app->user->identity->id);

        if($dataUser['admin'] == 1 ){
            $dataUser['role'] = "Администратор";
            $dataUser['role_color'] = "CD5C5C";
        }

        else if ($dataUser['teacher'] == 1 ) {
            $dataUser['role'] = "Преподаватель";
            $dataUser['role_color'] = "228B22";

        } else {
            $dataUser['role'] = "Студент";
            $dataUser['role_color'] = "87CEFA";

        }

        return  $this->render("account", compact('dataUser'));
    }


    public function actionEmailVerification(){
        $user = user::find()->where(['id'=>$_GET['id']])->one();

        if ($user->key_verification == $_GET['key']) {
            $user->verification = 1;
            $user->save();
        }
        return $this->redirect(['/me']);
    }




    public function actionSendMailVerification(){
        $user_id = Yii::$app->user->identity->id;
        $user = user::find()->where(['id'=>$user_id])->one();

        $link = 'http://near-you.store/email-verification/'.$user->id.'/'.$user->key_verification;

        $mail = Yii::$app->mailer->compose()
            ->setFrom('noreply@near-you.store')
            ->setTo($user->email)
            ->setSubject('Подтверждение регистрации')
            ->setTextBody('')
            ->setHtmlBody('<b>Здравствуйте, '.$user->name.'! Просим вас подтвердить привязку Email в нашем интернет-магазине. Для подтвержения нажмите на кнопку ниже.</b><br>
                                 <a href="'.$link.'" style="padding: 7px 18px;
                                                     border-radius: 0;
                                                     display: inline-block;
                                                     border: 1px solid #384aeb;
                                                     color: #222;
                                                     font-weight: 500;
                                                     background: #384aeb;
                                                     color: #fff;
                                                     text-decoration: none;
                                                     transition: all .4s ease;
                                                     margin: 0 auto;
                                                     margin-top: 30px;
                                                     text-align: center;
            ">Подтвердить</a>')
            ->send();

        return true;
    }

        public function actionVkAuthenticator(){


        $new_user = true;

            if(!$_GET['code']){
                exit('error code');
            }

            $token = json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id=7521980&display=page&redirect_uri=http://near-you.store/user/vk-authenticator&v=5.52&client_secret=BvAC4NyXUwj57SMAZQNV&code='.$_GET['code']), true);

            if(!$token){
                exit('error token');
            }

//            print_r($token);


            $data = json_decode(file_get_contents('https://api.vk.com/method/users.get?user_id='.$token['user_id'].'&access_token='.$token['access_token'].'&v=5.52&fields=uid,first_name,last_name,photo_big,sex'), true);

            if(!$data){
                exit('error data');
            }
            $data = $data['response'][0];

            $dataUser = User::find()->where(['vk_id'=>$data['id']])->one();
            if(!empty($dataUser)) {
                Yii::$app->user->login($dataUser, $this->rememberMe ? 3600*24*30 : 0);
                echo 'good';

                if ($new_user == true) {
                    $this->mergingUsersVk($dataUser['vk_id']);
                    return $this->redirect(['/cart']);
                }

            } else {
                $user = new User(); // Подключение модели пользователя
                $user->name = $data['first_name'].' '.$data['last_name'];
                $user->ip_registrations = $_SERVER['REMOTE_ADDR'];
                $user->date_registrations = date("Y-m-d H:i:s");
                $user->vk_id = $data['id'];
                if ($data['sex'] == 2)
                    $user->gender = 'men';
                else
                    $user->gender = 'women';
                $user->save();
                Yii::$app->user->login($user, $this->rememberMe ? 3600*24*30 : 0);


                if ($new_user == true) {
                    $this->mergingUsersVk($user->vk_id);
                    return $this->redirect(['/cart']);
                }



            }


            return $this->redirect('/');




        }



}