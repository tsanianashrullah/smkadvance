<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use wbraganca\dynamicform\DynamicFormWidget;
?>
<div class="siswa-form">
    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    
    <?= $form->field($model, 'nama_staff')->textInput(['maxlength' => 30]) ?><?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => 20, 'size' => 10]) ?><?= $form->field($model, 'tgl_lahir')->widget(
      DatePicker::className(), [
       // inline too, not bad
        'inline' => false,
        // modify template for custom rendering
       'clientOptions' => [
           'autoclose' => true,
          'format' => 'yyyy-mm-dd',
          ]
       ]);?>
<?= $form->field($model, 'alamat')->textarea(['rows' => 2], ['maxlenght' => 50]) ?>        <?= $form->field($model, 'bagian')->textInput(['maxlength' => 30]) ?><?= $form->field($model, 'jk')->dropdownlist(['Laki-Laki' => 'Laki-Laki', 'Perempuan'=> 'Perempuan'], ['prompt'=>'.:: Pilih Jenis Kelamin Anda ::.']) ?> 
    <div class="row">
    <div class="panel panel-default">
            <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Addresses</h4></div>
            <div class="panel-body">
                 <?php DynamicFormWidget::begin([
                    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                    'widgetBody' => '.container-items', // required: css class selector
                    'widgetItem' => '.item', // required: css class
                    'limit' => 4, // the maximum times, an element can be cloned (default 999)
                    'min' => 1, // 0 or 1 (default 1)
                    'insertButton' => '.add-item', // css class
                    'deleteButton' => '.remove-item', // css class
                    'model' => $modelsStaff[0],
                    'formId' => 'dynamic-form',
                    'formFields' => [
                        'full_name',
                        'address_line1',
                        'address_line2',
                        'city',
                        'state',
                        'postal_code',
                    ],
                ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsStaff as $i => $modelsStaff): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Staff</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelsStaff->isNewRecord) {
                                echo Html::activeHiddenInput($modelsStaff, "[{$i}]id");
                            }
                        ?>
                        <?= $form->field($modelsStaff, "[{$i}]nama_staff")->textInput(['maxlength' => true]) ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($modelsStaff, "[{$i}]tgl_lahir")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($modelsStaff, "[{$i}]jk")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <?= $form->field($modelsStaff, "[{$i}]bagian")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="row">
<?= $form->field($model, 'alamat')->textarea(['rows' => 2], ['maxlenght' => 50]) ?>        

                            </div> 
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($modelsStaff->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Buat' : 'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>