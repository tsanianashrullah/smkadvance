<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guru-form" >

    <?php $form = ActiveForm::begin(); ?>
 <div class="panel panel-primary col-lg-6">
      <div class="panel-heading" align='center'>Isi Data Guru</div>
        <div class="col-lg-6">
            <br>
            

    <?= $form->field($model, 'nip')->textInput(['maxlength' => 10, 'style' => 'width:180px;']) ?>

    <?= $form->field($model, 'nama_guru')->textInput(['maxlength' => 30, 'style' => 'width:250px;']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => 25,'style' => 'width:250px;']) ?>
<?= $form->field($model, 'tgl_lahir')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>

    <?= $form->field($model, 'jk')->dropdownlist(['laki-laki' => 'laki-laki', 'perempuan'=> 'perempuan'], ['prompt'=>'.:pilih jenis kelamin:.']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 7]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

