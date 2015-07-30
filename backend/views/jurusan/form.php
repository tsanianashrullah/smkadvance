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

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    <?= $form->field($model, 'jurusan')->dropDownList(['Rekayasa Perangkat Lunak' => 'Rekayasa Perangkat Lunak', 'Administrasi Perkantoran 1' => 'Administrasi Perkantoran 1'], ['prompt'=>'.:pilih jurusan:.']) ?>

    <?= $form->field($model, 'id_guru')->dropDownList(
        ArrayHelper::map(Guru::find()->all(),'nip','nama_guru'),['prompt'=>'Data']
        )?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 7]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

