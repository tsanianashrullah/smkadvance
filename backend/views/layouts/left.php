x<?php
use yii\bootstrap\Nav;
use yii\helpers\html;
use app\assets\AppAsset;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar04.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p> Mr. X</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    '<li class="header">Sistem Informasi SMK</li>',
                    [
                        'label' => '<i class="glyphicon glyphicon-home"></i><span>Beranda</span>', //for basic
                        'url' => ['/site/index'],
                    ],
                    //['label' => '<i class="fa fa-file-code-o"></i><span>Gii</span>', 'url' => ['/gii']],
                    //['label' => '<i class="fa fa-dashboard"></i><span>Debug</span>', 'url' => ['/debug']],

                    [
                        'label' => '<i class="glyphicon glyphicon-education"></i><span>Pengajar</span>', //for basic
                        'url' => ['/guru/index'],
                    ],
                    [
                        'label' => '<i class="glyphicon glyphicon-user"></i><span>Siswa</span>', //for basic
                        'url' => ['/siswa/index'],
                    ],
                    [
                        'label' => '<i class="glyphicon glyphicon-send"></i><span>Staff</span>', //for basic
                        'url' => ['/staff/index'],
                    ],
                    
                    [
                        'label' => '<i class="glyphicon glyphicon-blackboard"></i><span>Jurusan</span>', //for basic
                        'url' => ['/jurusan/index'],
                    ],

                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Masuk</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->isGuest
                    ],
                    /*
                    ['label' => '<i class="glyphicon glyphicon-remove-sign"></i><span>Logout (' . Yii::$app->user->identity->username . ')</span>',
                      'url' => ['/site/logout'],
                      'linkOptions' => ['data-method' => 'post']],     */
                                   
                ],
            ]
        );
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
