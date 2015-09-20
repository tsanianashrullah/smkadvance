<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Update Data : ' . $model->nama_guru;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Guru', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_guru, 'url' => ['view', 'nip' => $model->nip]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
