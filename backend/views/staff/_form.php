<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
?>
<div class="siswa-form">
<div class="panel panel-primary col-lg-6">
      <div class="panel-heading" align='center'>Isi Data Staff</div>
        <div class="col-lg-6">
            <br>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'nama_staff')->textInput(['maxlength' => 30]) ?>

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


<?= $form->field($model, 'alamat')->textarea(['rows' => 2], ['maxlenght' => 50]) ?>        

<?= $form->field($model, 'bagian')->textInput(['maxlength' => 30]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Buat' : 'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
    </div></table>

    <?php ActiveForm::end(); ?>
    

</div>