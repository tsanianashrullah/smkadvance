<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Tambah Data Guru';
?>

<div class="jurusan-form" >

    <?php $form = ActiveForm::begin(); ?>
 <div class="panel panel-primary col-lg-6">
      <div class="panel-heading" align='center'>Isi Data Guru</div>
        <div class="col-lg-6">
            <br>
    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => 30, 'style' => 'width:180px;']) ?>

    <?= $form->field($model, 'id_guru')->textInput(['maxlength' => 10, 'style' => 'width:250px;']) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 7]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
