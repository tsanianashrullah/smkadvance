<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Pusat data artikel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artikel-view">
<div class="panel panel-primary">
      <div class="panel-heading">Artikel</div>
        <div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php
    $img=Html::img("@web/$model->foto",['width'=>100]);
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'judul',
            'isi',
            [
                'label'=>'Foto',
                'format'=>'raw',
                'value'=>$img,
            ],
        ],
    ]) 
   
?>


</div>
