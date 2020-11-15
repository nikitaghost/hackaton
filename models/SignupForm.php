<?php


namespace app\models;
use Yii;
use app\models\User;
use yii\base\Model;
use yii\web\IdentityInterface;

class SignupForm extends Model
{

    public $email;
    public $password;
    public $confirmPassword;
    public $rememberMe = true;
    public $first_name;
    public $last_name;
    public $patronymic;
    public $phone;
    private $_user = false;

    public function rules()
    {
        return [
            [['email', 'password', 'first_name', 'last_name', 'confirmPassword'], 'required', 'message' => 'Заполните поле'],
            ['email', 'unique', 'targetClass' => User::className(), 'message' => 'Этот email уже зарегистрирован'],
            ['confirmPassword','validateConfirmPassword'],
            [['password'],'string','min'=>6, 'message' => 'Минимальная длина пароля 6 символов'],
            [['patronymic'],'string'],
            [['phone'],'string'],
        ];
    }

    public function validateConfirmPassword($attribute, $params) {
        if ($this->password != $this->confirmPassword) {
            $this->addError($attribute, "Пароли не совпадают");
        }
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество (необязательно)',
            'password' => 'Пароль',
            'confirmPassword' => 'Поворите пароль',
            'phone' => 'Телефон (необязательно)',
        ];
    }

    public function login()
    {
        return Yii::$app->user->login($this->getEmail(), $this->rememberMe ? 3600*24*30 : 0);
    }


    public function getEmail()
    {
        $this->_user = User::findByEmail($this->email);

        return $this->_user;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

}