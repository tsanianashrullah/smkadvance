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

    <?= $form->field($model, 'jk')->dropdownlist(['Laki-Laki' => 'Laki-Laki', 'Perempuan'=> 'Perempuan'], ['prompt'=>'.:: Pilih Jenis Kelamin Anda ::.']) ?>

    <?= $form->field($model, 'agama')->dropdownlist(['Islam' => 'Islam', 'Katholik'=> 'Katholik','Kristen'=>'Kristen','Budha'=>'Budha','Hindu'=>'Hindu','Lain-Lain'=>'Lain-Lain'], ['prompt'=>'.:: Pilih Agama ::.']) ?>

    <?= $form->field($model, 'pend_akhir')->dropdownlist(['D3' => 'D3', 'S1'=> 'S1','S2'=>'S2','S3'=>'S3'], ['prompt'=>'.:: Pendidikan Terakhir ::.']) ?>

    <?= $form->field($model, 'program_keahlian')->textInput(['maxlength' => 15, 'style' => 'width:250px;']) ?>

    <?= $form->field($model, 'status')->dropdownlist(['Lajang' => 'Lajang', 'Menikah'=> 'Menikah','Cerai'=>'Cerai'], ['prompt'=>'.:: Pilih Status Anda ::.']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 7]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

