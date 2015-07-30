<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use yii\helpers\html;
use app\assets\AppAsset;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/logo.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>SMK PGRI 1 Cimahi</p>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                    $menuItems[] =[
                        'label' => 'Masuk', //for basic
                        'url' => ['/site/login'],
                    ];
                } else{
                    //['label' => '<i class="fa fa-file-code-o"></i><span>Gii</span>', 'url' => ['/gii']],
                    //['label' => '<i class="fa fa-dashboard"></i><span>Debug</span>', 'url' => ['/debug']],

                    $menuItems[] =[
                        'label' =>  'Pengajar', //for basic
                        'url' => ['/guru/index'],
                    ];
                    $menuItems[] =[
                        'label' => 'Siswa', //for basic
                        'url' => ['/siswa/index'],
                    ];
                    $menuItems[] =[
                        'label' => 'Staff', //for basic
                        'url' => ['/staff/index'],
                    ];
                    
                    $menuItems[] =[
                        'label' => 'Jurusan', //for basic
                        'url' => ['/jurusan/index'],
                    ];
                }
                echo Nav::widget([
                'options' => ['class' => 'sidebar-menu'],
                'items' => $menuItems,
            ]);
        ?>
        

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Same tools</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/gii']) ?>"><span class="fa fa-file-code-o"></span> Gii</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/debug']) ?>"><span class="fa fa-dashboard"></span> Debug</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

    </section>

</aside>
