<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;


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
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" style="background: url(images/pier.jpg)">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-light fixed-top',
        ],
    ]);
    echo Nav::widget([
        'items' => [
            ['label' => 'Search By Location', 'url' => ['/listings/searchresult'],'options'=>['class'=>'nav-location']],
            ['label' => 'Search By Company', 'url' => ['/book/index'],'options'=>['class'=>'navglobe-pright']],
            ['label' => 'Service Providers', 'url' => ['/site/index'],'options'=>['class'=>'nav-location']],

            [
                'label' => '<i class="fa fa-globe fa-fw fa-lg"></i>',
                'items' => [
                    ['label' => 'English US', 'url' => '#'],
                    ['label' => '$ USD', 'url' => '#'],
                ],
            ],
            '&nbsp;&nbsp;',
            [
                'label' => '<i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-user-circle-o" aria-hidden="true"></i>',
                'items' => [
                    ['label' => 'Sign-Up', 'url' => '#'],
                    ['label' => 'Login', 'url' => '#'],
                ],
                'options'=>['class'=>'nav-button btn btn-outline-dark']
            ],
        ],
        'options' => ['class' => 'navbar-nav'],
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- <div class="container-fluid alg foot">
    <div id="footer">
        <div class="alg">
            <div class="row">
            <div class="col-md-6">
            <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-center">
                        Quick links
                      </h5>
                    </div>
                    <div class="more-info">
                    <ul class="footer-links">
                        <p class="lead">
                        <li><a href="<?= Url::to(['site/work'])?>" class="sign-in popup-with-zoom-anim"></i> About Us</a></li>
                        <li><a href="<?= Url::to(['site/work'])?>" class="sign-in popup-with-zoom-anim"></i> Support</a></li>
                        <li><a href="<?= Url::to(['site/work'])?>" class="sign-in popup-with-zoom-anim"></i> Sign Up</a></li>
                        <p>
                    </ul>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Reach us in any convenient way below,either social media handles. We're always, checking social medias,
                        it can take sometime, if urgent just drop your message in my direct line.
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> Kenya,Nairobi</li>
                        <li><span class="ion-ios-telephone"></span> +254-725-685-545</li>
                        <li><span class="ion-email"></span> myVenues@gmail.com</li>
                      </ul>
                    </div>
            </div>
        </div>
         Copyright 

         <div class="row">
            <div class="col-md-12">
                <div class="copyrights">© 2020 myVenue,Inc. All Rights Reserved. Privacy. Terms . SiteMap 
                    <i class="fab fa-instagram pull-right"></i>, <i class="fab fa-twitter pull-right">,</i>,<i class="fab fa-facebook-f pull-right"></i>,<i class="fa fa-globe fa-fw fa-lg pull-right"></i>'
                </div>
            </div>
        </div> 
    </div>
    </div>
        </div> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
