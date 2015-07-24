<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->params['breadcrumbs'][] = ['label' => 'Jurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="jurusan-create">

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>
</div>

