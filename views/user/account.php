<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    $this->title = "Мой профиль";
?>

<div class="container">
     <div class="col-md-12 bg-lite">
        <div class="row user_profile">
            <div class="col-md-3 text-center">
                <div class="userphoto" style="background-image: url('/img/ava.jpg')"></div>
                <a href="/edit-profile" class="button">Редактировать профиль</a>
            </div>
            <div class="col-md-9 usertitle">
                <p><?=$dataUser['last_name']?> <?=$dataUser['first_name']?>  <?=$dataUser['patronymic']?> </br></p>
                <p class="role" style="color: #<?=$dataUser['role_color']?>;"><?=$dataUser['role']?></p>

                <p class="data">Изучаемая специализация: Инженер </p>
                <p class="data">Учебная программа пройдена на: 53%</p>
                <p class="data">Успеваемость: Хорошая</p>

                <div class="coursetitle">Курсы: 2</div>
                <div class="square"></div>
                <div class="col-md-12 crs">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="crs-img"></div>
                        </div>
                        <div class="col-md-10 crs-title">
                            <div class="row">
                                <div class="col-md-12">Управление IED</div>
                                <div class="col-md-12" style="font-size: 14px;">Практический-курс</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 crs">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="crs-img"></div>
                        </div>
                        <div class="col-md-10 crs-title">
                            <div class="row">
                                <div class="col-md-12">Изучение новых цифровых стандартов</div>
                                <div class="col-md-12" style="font-size: 14px;">Онлайн-курс</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>