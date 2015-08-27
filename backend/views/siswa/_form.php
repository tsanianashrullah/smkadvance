<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use common\models\Jurusan;
?>
<div class="siswa-form">
            
<?php $form = ActiveForm::begin(['id' => 'form']); ?>

<?= $form->field($model, 'nisn')->textInput(['maxlength'=> 10]) ?>  

<?= $form->field($model, 'nama_siswa')->textInput(['maxlength' => 30]) ?>

<?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => 20, 'size' => 10]) ?>

<?= $form->field($model, 'tgl_lahir')->widget(
       DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        'clientOptions' => [
            'autoclose' => true, 
           'format' => 'yyyy-mm-dd',
           ]
        ]);?>
<?= $form->field($model, 'agama')->dropdownList(['Islam' => 'Islam', 'Kristen'=> 'Kristen', 'Katolik' => 'Katolik','Protestan'=>'Protestan', 'Budha' => 'Budha', 'Hindu'=>'Hindu', 'Lain-lain'=>'Lain-lain'], ['prompt'=>'.:pilih Agama:.']) ?>
<?= $form->field($model, 'anak_ke')->textInput(['maxlength' => 4, 'size' => 4]) ?>
<?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => 25, 'size' => 10]) ?>
<?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => 25, 'size' => 10]) ?>
<?= $form->field($model, 'pekerjaan_ayah')->textInput(['maxlength' => 25, 'size' => 10]) ?>
<?= $form->field($model, 'alamat')->textarea(['rows' => 2], ['maxlength' => 255]) ?>     
<?= $form->field($model, 'tahun_masuk')->widget(
       DatePicker::className(), [
         'inline' => false, 
        'clientOptions' => [
            'autoclose' => true, 
           'format' => 'yyyy-mm-dd',
           ]
        ]);?>
<?= $form->field($model, 'id_jurusan')->dropDownList(
        ArrayHelper::map(Jurusan::find()->all(),'id','jurusan'),['prompt'=>'.:: Pilih Jurusan ::.']);?>
<?= $form->field($model, 'no_tlp')->textInput(['maxlength' => 13, 'size' => 10]) ?>   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Create', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>