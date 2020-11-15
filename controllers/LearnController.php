<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;

class LearnController extends Controller
{
    public function actionTask(){

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/signin']);
        }



        $this->layout = false;
        return $this->render('tasks');
    }

    public function actionTests(){
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/signin']);
        }

        return $this->render('tests');

    }

    public function actionTest(){

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/signin']);
        }

        $user_id = Yii::$app->user->identity->id;
        $user = user::find()->where(['id'=>$user_id])->one();

        if($user->task == 0) {
            return $this->redirect(['/learn/task']);
        }

        return $this->render('test');
    }

    public function actionIndex(){
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/signin']);
        }

        return $this->render('index');
    }


     public function actionComplited(){
        $user_id = Yii::$app->user->identity->id;
        $user = user::find()->where(['id'=>$user_id])->one();

        $user->task = 1;

        $user->save();

        return true;
     }

     public function actionDesc(){

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/signin']);
        }

        return $this->render('desc');
    }
}
