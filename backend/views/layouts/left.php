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
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Guru</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/guru/index']) ?>"><span class="fa fa-tasks"></span>Pusat Data</a>
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

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-child"></i> <span>Siswa</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/siswa/report']) ?>"><span class="fa fa-server"></span>Daftar Siswa</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/siswa/prestasi']) ?>"><span class="fa fa-dashboard"></span>Prestasi</a>
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
            <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder-open"></i> <span>Artikel</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['artikel/report']) ?>"><span class="fa fa-database"></span>Semua</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/#']) ?>"><span class="fa fa-graduation-cap"></span>Pendidikan</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/#']) ?>"><span class="fa fa-dashboard"></span>Sekolah</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/#']) ?>"><span class="fa fa-file-code-o"></span>PPDB</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/#']) ?>"><span class="fa fa-dashboard"></span>Siswa</a>
                    </li>
                    
                </ul>
            </li>
        <ul class="sidebar-menu">
            <li><a href="<?= \yii\helpers\Url::to(['/jurusan/listjurusan']) ?>"><span class="fa fa-bar-chart"></span>Kompetensi Keahlian</a>
        </ul>

        <ul class="sidebar-menu">
            <li><a href="<?= \yii\helpers\Url::to(['/artikel/list']) ?>"><span class="fa fa-folder-open"></span>Berita Sekolah</a>
        </ul>
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
