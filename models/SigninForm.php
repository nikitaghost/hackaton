<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SigninForm extends Model
{
    public $email;
    public $password;
    public $auth_key;
    public $rememberMe = true;

    private $_user = false;


    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getEmail();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Некорректный логин или пароль.');
            }
        }
    }

    public function login()
    {
        if ($this->validate()) {

            return Yii::$app->user->login($this->getEmail(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }



    public function getEmail()
    {
        if ($this->_user === false) {
            $this->_user = User::findByEmail($this->email);
        }

        return $this->_user;
    }

    public function getUsername()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->email);
        }
        return $this->_user;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Пароль',
        ];
    }
}
