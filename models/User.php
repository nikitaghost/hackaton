<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use Yii;
use yii\base\Model;

class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public static function tableName(){
        return 'user'; // Имя таблицы в БД в которой хранятся записи блога
    }

    public static function findIdentity($id){
        return static::findOne($id);
    }

    public static function findByEmail($email){
        return static::findOne(['email' => $email]);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        return static::findOne(['access_token' => $token]);
    }

    public function getId(){
        return $this->id;
    }

    public function getAuthKey(){
        return $this->auth_key;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function validateAuthKey($authKey){
        return $this->authKey === $authKey;
    }

    public function validatePassword($password){
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function setPassword($password){
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
    public function getUser(){
        return Yii::$app->user->identity;
    }

    public function getUserEmail($email){
        $model = user::find()->where(['email'=>$email])->asArray()->one();
        return $model;
    }

    public function getUserId($id){
        $model = user::find()->where(['id'=>$id])->asArray()->one();
        return $model;
    }

}