<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
$this->title = 'Penambahan Role   ' . $id->username;
?>


    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    <?= $form->field($model, 'item_name')->dropdownlist(['admin'=>'Admin', 'author'=>'Author', 'viewer'=>'Viewer'], ['prompt'=>'.:: Pilih Role ::.']) ?>
	<div class="panel-footer" style="text-align: right;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
    </div>
	<?php ActiveForm::end(); ?>