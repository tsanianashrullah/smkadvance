<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<style type="text/css">
    
</style>
<header class="main-header">

    <?= Html::a('<span class="logo-mini">'. Html::img('images/logo.png', ['width' => '100%', 'height' => '100%', 'style' => 'padding:4px;']) . '</span><span class="">' . Html::img('images/logo.png', ['height' => '100%', 'style' => 'padding:4px;margin-right: 10px;']) . 'SMK PGRI 1 CIMAHI</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav"> 
                <!-- User Account: style can be found in dropdown.less -->
        <?php
            Nav::begin([
                            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[]= ['label'=>'Sejarah','url'=>['/site/sejarah']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[]=[
                    'label' => 'Pusat Data',
                    'url'=> ['center/data'],
                ];
                $menuItems[] = [
                    'label'=> 'List Admin',
                    'url' => ['/site/listrole'],
                    ];
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post', 'class' => 'btn-danger']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
        ?>
                <!-- User Account: style can be found in dropdown.less -->
                
            </ul>
        </div>
    </nav>
</header>
