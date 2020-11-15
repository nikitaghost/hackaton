<?php

namespace app\models;
use Yii;
use app\models\User;
use yii\base\Model;
use yii\web\IdentityInterface;


class UserDataForm extends Model
{
    public $email;
    public $phone;
    public $password;
    public $new_password;
    public $new_password_two;

    public function rules()
    {
        return [
            [['email'], 'email'],
            [['phone'], 'string'],

            [['phone'], 'default', 'value' => Yii::$app->user->identity->phone ],
            [['email'], 'default', 'value' => Yii::$app->user->identity->email ],

            [['email'], 'required'],
            [['email'], 'validateEmail' ],
            [['password'], 'validatePassword'],
            [['new_password_two', 'new_password'], 'validateConfirmPassword'],
        ];
    }


    public function validateEmail($attribute, $params){
        $email = $this->email;
        $user_id = Yii::$app->user->identity->id;
        $user = new User();
        $dataUser = $user->getUserEmail($email);

        if(!empty($dataUser)) {
            if ($dataUser['id'] != $user_id) {
                $this->addError($attribute, 'Данный Email уже зарегистрирован в нашем сервисе');
            }
        }
    }

    public function validatePassword ($attribute, $params) {
        $password = $this->password;
        $new_password = $this->new_password;
        $new_password_two = $this->new_password_two;

        if (!empty($password) or !empty($new_password) or !empty($new_password_two)) {
            if (!$this->hasErrors()) {
                $user = new User();
                $dataUser = $user->getUser();

                if (!$dataUser || !$dataUser->validatePassword($this->password)) {
                    $this->addError($attribute, 'Неверный пароль.');
                }
            }

        }
    }
    public function validateConfirmPassword($attribute, $params) {
        $password = $this->password;
        $new_password = $this->new_password;
        $new_password_two = $this->new_password_two;

        if (!empty($password) or !empty($new_password) or !empty($new_password_two)) {
            if ($new_password != $new_password_two) {
                $this->addError($attribute, 'Пароли не совпадают.');
            }
        }
    }



}
