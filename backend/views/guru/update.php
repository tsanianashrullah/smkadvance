<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title =  $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'nip' => $model->nip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guru-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
