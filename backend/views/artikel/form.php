<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use common\models\Kategori;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Tambah Berita Sekolah';
?>

<div class="artikel-form" >

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form','options' => ['enctype' => 'multipart/form-data']]); ?>
 
    <?= $form->field($model, 'judul')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'id_kategori')->dropDownList(
        ArrayHelper::map(Kategori::find()->all(),'id_kategori','kategori'),['prompt'=>'Isi Kategori']
        );?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 14]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

     <div class="panel-footer" style="text-align: right;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

