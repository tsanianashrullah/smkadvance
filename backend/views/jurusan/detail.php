<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = $model->jurusan;
$this->params['breadcrumbs'][] = ['label' => 'List Jurusan', 'url' => ['listjurusan']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row" style="padding:10px 20px;">
    <h4>Jurusan <?= $model->jurusan ?></h4><hr>
    <div class="row">
            <img src="<?= $model->foto ?>" style="width:100%;max-width:250px;float:left;margin:20px">
        <p><?= $model->deskripsi ?></p>
    </div><br>
</div>