<?php

/* @var $this yii\web\View */

$this->title = 'Онлайн университет РОССЕТИ';
?>

<div class="container">
    <div class="col-md-12 welcome-block">
        <div class="row">
            <div class="col-md-7">
                <h1>Учись, развивайся,<br> совершенствуйся!</h1>
            </div>
            <div class="col-md-5 text-center">
                <p><b>Бесплатная регистрация</b></p>
                <form method="GET" action="/signup">
                    <input type="email" class="input" name="email" placeholder="Email" required>
                    <button type="submit" class="btn btn-primary login_button">Зарегистрироваться</button>
                    <p>Нажимая на кнопку,  вы даете согласие на обработку своих персональных данных в соответствии с политикой конфиденциальности.</p>
                </form>
            </div>
        </div>
    </div>
</div>