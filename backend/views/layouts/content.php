<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
?>
<style type="text/css">
    .text-center p{
        color:white;
    }
    .footer-above{
        background-color: #222d32;
    }
    .footer-below{
        background-color: #222d32;
    }
    .content-header {
        position: relative;
        padding: 15px 15px 15px 15px;
        border-bottom: 1px green solid;
        background-color: #ffffff!important;
    }
    .content {
        position: relative;
        border-top: 1px green solid;
        border-bottom: 1px green solid;
        border-right: 1px green solid;
        border-left: 1px green solid;
        margin-top:10px;
        background-color: #ffffff!important;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
        <?php } else { ?>
            <h1>
                <?php
                if ($this->title !== null) {
                    echo \yii\helpers\Html::encode($this->title);
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } ?>
            </h1>
        <?php } ?>

    </section>

    <section class="content">
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3><p>Alamat</p></h3>
                        <p>Jl. Terusan<br>Gang SMEA PGRI, Kota Cimahi</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><p>Hubungi Kami</p></h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><p>SMK PGRI 1 Cimahi</p></h3>
                        <p>Adalah salah satu SMK dicimahi yang begitu terkenal hingga akherat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; SMK PGRI 1 Cimahi 2015</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

