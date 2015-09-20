<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use yii\helpers\html;
use app\assets\AppAsset;

?>
<aside class="main-sidebar">

    <section class="sidebar">
        <?php
            if (Yii::$app->user->isGuest) {
        }else{ 
        //<!-- Sidebar user panel -->
        echo '<div class="user-panel">
            <div class="pull-left image">
                <img src="images/avatar04.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>' . Yii::$app->user->identity->username . '</p>
            </div>
        </div>';
        } 
        ?>
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
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-graduation-cap"></i> <span>Sekolah</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/sekolah/ekskul']) ?>"><span class="fa fa-soccer-ball-o"></span>Ekstrakulikuler</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/sekolah/sarana']) ?>"><span class="fa fa-building"></span>Sarana dan Prasarana</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/sekolah/hubungan']) ?>"><span class="fa fa-industry"></span>Hubungan Industri</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-server"></i> <span>Direktori Data</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/guru/report']) ?>"><span class="fa fa-user"></span>Guru</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/siswa/report']) ?>"><span class="fa fa-child"></span>Siswa</a>
                    </li>

                </ul>
            </li>
        </ul>
        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => '<i class="fa fa-bar-chart"></i><span>Kompetensi Keahlian</span>', 'url' => ['/jurusan/listjurusan']],
                    ['label' => '<i class="fa fa-folder-open"></i><span>Berita Sekolah</span>', 'url' => ['/artikel/list']],
                    ['label' => '<i class="fa fa-bookmark"></i><span>PPDB</span>', 'url' => ['/site/ppdb']],
                ],
            ]
        );
        ?>
        <!-- 
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
        </ul> -->

    </section>

</aside>
