<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Tambah Data Guru';
?>

<div class="guru-form" >

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form','options' => ['enctype' => 'multipart/form-data']]); ?>
 
            <br>
            

    <?= $form->field($model, 'judul')->textInput(['maxlength' => 30 ]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 14]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

     <div class="panel-footer" style="text-align: right;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

