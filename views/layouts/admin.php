<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title)." | Админ-панель MyShop.ru"?></title>
    <?php $this->head() ?>
</head>
<body style="background: url('/img/bgd.png');">
<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Панель администратора</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto" style="display: inherit;">
      <li class="nav-item">
        <a class="nav-link" href="/orders-admin/index">Заказы <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/products-admin/index">Товары</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/category-admin/index">Категории</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Пользователи</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Поддержка</a>
      </li>
    </ul>
  </div>
</nav>

<div class="wrap">
    <div class="container" style="">
        <div class="row">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <div class="content-admin">
                    <?= $content ?>
                </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
