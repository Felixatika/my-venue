<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

<div id="navbar">
<?php 
    NavBar::begin([   
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-light fixed-top',            
        ],
    ]);
    $menuItems = [
        ['label' => '<i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home', 'class'=>'login', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Sign Up', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => '<i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile', 'url' => ['/site/login']];
        // $menuItems[] = ['label' => '<i class="fa fa-bell" aria-hidden="true"></i>&nbsp;Notifications', 'url' => ['/site/login']];
        $menuItems[] = ['label' => '<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Messages', 'url' => ['/messages/index']];
        $menuItems[] = ['label' => ''
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '<i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-light logout']
            )
            . Html::endForm()
        ];
       
    }
    echo Nav::widget([
        'items' => [           
            ['label' => 'Home', 'url' => ['/site/index'],'options'=>['class'=>'nav-location']],
            ['label' => 'Venues', 'url' => ['/listings/list-sidebar'],'options'=>['class'=>'navglobe-pright']],
            ['label' => 'Service Providers', 'url' => ['/site/serviceproviders'],'options'=>['class'=>'navglobe-pright']],
            ['label' => 'About', 'url' => ['/site/about'],'options'=>['class'=>'navglobe-pright']],
            ['label' => 'Contact Us', 'url' => ['/site/contact'],'options'=>['class'=>'navglobe-pright']],
                [
                    'label' => '<i class="fa fa-globe fa-fw fa-lg"></i>',
                    'options'=>['class'=>'nav-side'],
                'items' => [
                    ['label' => 'English US', 'url' => '#'],
                    ['label' => '$ USD', 'url' => '#'],
                ],
            ],
            '&nbsp;&nbsp;',
            [
                'label' => '<i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;  <i class="fa fa-user-circle-o" aria-hidden="true"></i>',
                'items' => [
                    ['label' => 'Log in', 'url' => 'site/login'],
                    '<div class="dropdown-divider"></div>',
                    ['label' => 'Sign up', 'url' => 'site/signup'],
                ],
                'encodeLabels'=> false,
                'items' => $menuItems,
                'options'=>['class'=>'nav-button btn btn-outline-dark'],['class'=>'nav-side'],
               
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

        	   <!-- Footer
================================================== -->
<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container-fluid">
		<div class="alg">
			<div class="row">
				<div class="col-md-3"> 
					<h4>ABOUT</h4>
					<ul class="footer-links">
						<li><a href="<?= Url::to(['site/work'])?>" class="sign-in popup-with-zoom-anim"></i> About Us</a></li>
					</ul>
				</div>
            

				<div class="col-md-3">
					<h4>COMMUNITY</h4>
					<ul class="footer-links">
						<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"></i> Sign Up</a></li>
						<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"></i> Sign In</a></li>		
					</ul>
				</div>

				<div class="col-md-3">
					<h4>HOST</h4>
					<div class="text-widget">
						<ul class="footer-links">
							<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"></i><span> Host Your Venue<span></a></li>
						</ul>
					</div>
				</div>
            
				<div class="col-md-3">
					<h4>SUPPORT</h4>
						<ul class="footer-links">
							<li><a href="<?= Url::to(['site/contact'])?>"class="sign-in popup-with-zoom-anim"></i><span> Contact<span></a></li>
						</ul>
				</div>
			</div>

		</div>

		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
                <div class="copyrights">© 2020 myVenue,Inc. All Rights Reserved. Privacy. Terms . SiteMap 
                    <i class="fab fa-instagram pull-right"></i>, <i class="fab fa-twitter pull-right">,</i>,<i class="fab fa-facebook-f pull-right"></i>,<i class="fa fa-globe fa-fw fa-lg pull-right"></i>'
                </div>
			</div>
		</div>

	</div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
