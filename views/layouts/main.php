<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;


AppAsset::register($this);
?>



<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title)?></title>

    <?php $this->head() ?>

</head>
<body id="">
<?php $this->beginBody() ?>

<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="/learn"><img src="/img/logo.png" alt="near you" width="150px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
<!--            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">-->
<!--              <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>-->
<!--              <li class="nav-item"><a class="nav-link" href="/products">Каталог</a></li>-->
<!---->
<!--              <li class="nav-item submenu dropdown">-->
<!--                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"-->
<!--                  aria-expanded="false">Shop</a>-->
<!--                <ul class="dropdown-menu">-->
<!--                  <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>-->
<!--                  <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>-->
<!--                  <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>-->
<!--                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>-->
<!--                  <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>-->
<!--                </ul>-->
<!--              </li>-->
<!--                <li class="nav-item"><a class="nav-link" href="/delivery-and-payment">Доставка и оплата</a></li>-->
<!--            </ul>-->
            <?php if (!Yii::$app->user->isGuest) { ?>
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item"><a href="/support" class="nav-link">Моя группа</a></li>

                <li class="nav-item"><a href="/support" class="nav-link">Поддержка</a></li>
                <li class="nav-item"><a href="/learn" class="nav-link">Практические задания</a></li>
                <li class="nav-item"><a href="/me" class="nav-link">Профиль</a></li>
                <li class="nav-item"><a href="/logout" class="nav-link">Выйти</a></li>
              </ul>
            <?php } else { ?>
               <ul class="nav navbar-nav menu_nav ml-auto">
                  <li class="nav-item"><a href="/signup" class="nav-link">Зарегистрироваться</a></li>
                  <li class="nav-item"><a href="/signin" class="nav-link">Войти</a></li>
                </ul>
            <?php } ?>

          </div>
        </div>
      </nav>
    </div>
  </header>

<?= $content ?>



<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
