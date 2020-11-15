<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;

class SiteController extends Controller
{


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['/me']);
        }

        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => 'Интернет-магазин брендовой обуви, одежды, аксессуаров и тд. Доставка по все России, онлайн оплата заказа. В наличии продукция таких брендов, как Nike, Adidas, Puma, Asics, Reebok и другие. Выгодные цены, быстрая доставка.',
        ]);

        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => 'asics, asicstiger, onitsukatiger, стиль, dope ,casual, streetwear, стритвир, россия, астрахань, astrakhan, спорт астрахань, спортивная обувь, купить кроссовки, кроссовки, астрахань, кроссовки, кроссы, krossovki, sneakers, sneaker, kicks, kickstagram, sneakerhead, sneakershop, underarmour, underarmourshoes, asicsrussia, asicsgellyte, купить кроссовки nike, купить кроссовки puma, купить кроссовки adidas, заказать кроссовки, купить кроссовки ',
        ]);


        return $this->render('index');
    }


}
