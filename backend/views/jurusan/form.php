<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use common\models\Guru;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Tambah Data jurusan';
?>

<div class="jurusan-form" >

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form','options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'jurusan')->textInput(['maxlength'=>300,]); ?>

    <?= $form->field($model, 'id_guru')->dropDownList(
        ArrayHelper::map(Guru::find()->all(),'nip','nama_guru'),['prompt'=>'Data']);?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows'=>7]);?>
    <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Buat' : 'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>