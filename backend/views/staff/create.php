<?php

use yii\helpers\Html;

$this->title = 'Tambah Data Staff';
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Staff','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-create">

	<div class="row"> 
<div class="col-xs-12 .col-md-8">

	<?= $this->render('_form', [
			'model' => $model,
			'modelsStaff' => $modelsStaff,
		]) ?>
</div></div>
