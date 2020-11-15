<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    $this->title = 'Авторизация';
?>
<div class="col-md-12 content">
    <div class="row">
        <div class="col-md-3 rowoflogin text-center">
            <img src="/img/logo.png" alt="logo_rosseti" class="center_img mb-4">
            <p style="margin-top: 15px; margin-bottom: 20px; font-size: 19px;">Войдите в свой профиль</p>
            <?php $form = ActiveForm::begin(
                [
                    'options' => [
                        'class' => ''
                    ]
                ]
            );?>
            <?= $form->field($model, 'email')->textInput(array('type'=>'email','placeholder' => 'E-mail', 'class'=>'input')) ?>
            <?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Пароль', 'class'=>'input')) ?>

            <?= Html::submitButton('Продолжить', ['class' => 'btn btn-primary login_button'])?>
            <?php ActiveForm::end(); ?>

            <a href="/signup">
                <p style="float: right; margin-right: 20px;">Еще не зарегистрированы?</p>
            </a>
        </div>
    </div>
</div>
