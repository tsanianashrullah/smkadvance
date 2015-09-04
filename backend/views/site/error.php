<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<!-- Main content -->
<section class="content">

    <div class="error-page">
        <h2 class="headline text-info"><i class="fa fa-exclamation text-red"></i></h2>

        <div class="error-content">
            <h3><?= $name ?></h3>

            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>

            <p>
                Halaman yang Anda akses tidak ditemukan atau dibatasi hak akses silahkan
                kembali ke <a href='?r=site/index'>Beranda </a>.
            </p>

        </div>
    </div>

</section>
