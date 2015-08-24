<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
$this->title = 'Penambahan Role' . $model->username;
?>

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
	<?php 
    $authItems = ArrayHelper::map($authItems, 'name', 'name');
    ?>
    <?= $form->field($model, $model->Permissions)->checkboxList($authItems); ?>
