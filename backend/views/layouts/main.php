<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --></head>
<body>
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/obitotobirinneganeyeuchihakyuubii9singleshort+hair.jpg1920x1080.jpg" alt="obito-tobi-rinnegan-eye-uchiha-kyuubii9-single-short+hair.jpg1920x1080" title="obito-tobi-rinnegan-eye-uchiha-kyuubii9-single-short+hair.jpg1920x1080" id="wows0_0"/></li>
		<li><img src="data0/images/obitouchihamasksharinganrinneganeyesdantecybermanwallpaperhd1920x1080.jpg" alt="obito-uchiha-mask-sharingan-rinnegan-eyes-dantecyberman-wallpaper-hd-1920x1080" title="obito-uchiha-mask-sharingan-rinnegan-eyes-dantecyberman-wallpaper-hd-1920x1080" id="wows0_1"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data0/images/dasda.jpg" alt="slider html" title="dasda" id="wows0_2"/></a></li>
		<li><img src="data0/images/data_mining.jpg" alt="data mining" title="data mining" id="wows0_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="obito-tobi-rinnegan-eye-uchiha-kyuubii9-single-short+hair.jpg1920x1080"><span><img src="data0/tooltips/obitotobirinneganeyeuchihakyuubii9singleshort+hair.jpg1920x1080.jpg" alt="obito-tobi-rinnegan-eye-uchiha-kyuubii9-single-short+hair.jpg1920x1080"/>1</span></a>
		<a href="#" title="obito-uchiha-mask-sharingan-rinnegan-eyes-dantecyberman-wallpaper-hd-1920x1080"><span><img src="data0/tooltips/obitouchihamasksharinganrinneganeyesdantecybermanwallpaperhd1920x1080.jpg" alt="obito-uchiha-mask-sharingan-rinnegan-eyes-dantecyberman-wallpaper-hd-1920x1080"/>2</span></a>
		<a href="#" title="dasda"><span><img src="data0/tooltips/dasda.jpg" alt="dasda"/>3</span></a>
		<a href="#" title="data mining"><span><img src="data0/tooltips/data_mining.jpg" alt="data mining"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">slider jquery</a> by WOWSlider.com v8.2</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
