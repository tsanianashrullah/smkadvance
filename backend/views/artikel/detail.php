<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'List artikel', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="mdk-body-news"> 
    <span class="mdk-body-reporter">
         
    </span>
    <span id="mdk-body-news-subtitle"></span>
    <!--<span class="mdk-body-newsdate">Senin, 29 Juni 2015 08:31</span>-->
    <br class="clear"/>
    <?= 
    Html::img("@web/$model->foto",['width'=>'50%']);
    ?>
    <br>
    <br><p>
    <?=
    $model->isi;
    ?></p>
    <div class="clear"></div>
    
    Penulis : <a rel="nofollow" href="#"><a target="_blank" rel="nofollow" href="/reporter/dieqy-hasbi-widhana/"><?= $model->user ?></a></a> | Dibuat pada tanggal : <?= $model->tgl ?></div>
    <div class="clear"></div>