<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    $this->title = 'Регистрация';
    $email = '';
    if (!empty($_GET['email'])) {
        $email = $_GET['email'];
    }
?>





<div class="container">
    <div class="py-5 text-center">
        <h2>Продолжить регистрацию</h2>
        <p class="lead">РОССЕТИ - море возможностей!</p>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h4 class="mb-3">Личная информация</h4>
            <?php $form = ActiveForm::begin(
                [
                    'options' => [
                        'class' => ''
                    ]
                ]
            );?>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <?= $form->field($model, 'first_name')->textInput(array('placeholder' => 'Имя', 'class'=>'form-control')) ?>
                </div>
                <div class="col-md-4 mb-3">
                    <?= $form->field($model, 'last_name')->textInput(array('placeholder' => 'Фамилиия', 'class'=>'form-control')) ?>
                </div>
                <div class="col-md-4 mb-3">
                    <?= $form->field($model, 'patronymic')->textInput(array('placeholder' => 'Отчество', 'class'=>'form-control')) ?>
                </div>
            </div>

            <div class="mb-3">
                <?= $form->field($model, 'email')->textInput(array('type'=>'email','placeholder' => 'Email', 'class'=>'form-control', 'value'=>$email)) ?>
            </div>

            <div class="mb-3">
                <?= $form->field($model, 'phone')->textInput(array('placeholder' => 'Телефон', 'class'=>'form-control')) ?>
            </div>

            <div class="mb-3" style="margin-top: 30px;">
                <?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Пароль', 'class'=>'form-control')); ?>
            </div>

            <div class="mb-3">
                <?= $form->field($model, 'confirmPassword')->passwordInput(array('placeholder' => 'Повторите пароль', 'class'=>'form-control')); ?>
            </div>



            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <a href="/">
                        <p class="namebtn">Назад</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary login_button'])?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>


