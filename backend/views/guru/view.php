<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use dosamigos\tableexport\ButtonTableExportAsset;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Guru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-view">
<div class="panel panel-primary">
      <div class="panel-heading">Update Data Guru</div>
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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nip',
            'nama_guru',
            'tempat_lahir',
            'tgl_lahir',
            'jk',
            'alamat',
        ],
    ]) 
   
?>
 
<a id="linkId" >Export Table as Xml</a>
    ?>

</div>
