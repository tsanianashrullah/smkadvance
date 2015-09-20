<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use dosamigos\tableexport\ButtonTableExportAsset;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Detail Data : ' . $model->nama_guru;
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data', 'url' => ['/center/data']];
$this->params['breadcrumbs'][] = ['label' => 'Daftar Guru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-view">
<div class="panel panel-default">
      <div class="panel-heading">View Detail Data Guru <?= $model->nama_guru ?> </div>
        <div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nip], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nip], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php
//      'model'=$model;
    $img = Html::img("@web/$model->foto",['width'=>'200', 'height'=>'150']); 
    ?>
    <?= DetailView::widget([
        'model' => $model,  
        'attributes' => [
            'nip',
            'nama_guru',
            'tempat_lahir',
            'tgl_lahir',
            'jk',
            'agama',
            'pend_akhir',
            'program_keahlian',
            'alamat',
            [
                 'label'=>'Foto',
                 'format'=>'raw',
                 'value'=>$img, ['width'=>'100'],
            ],
        ],
    ]) 
   
?>


</div>
