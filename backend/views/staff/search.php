<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GuruSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <?= $form->field($model, 'globalSearch')->textInput(['style' => 'width:130px;','placeholder'=>'Cari data...']) ?>
    <div class="form-group">
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
