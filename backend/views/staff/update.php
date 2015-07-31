<?php
use yii\helpers\Html;



$this->title = 'Update Data Staff: ' . ' ' . $model->nama_staff;

$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_staff, 'url' => ['view', 'id' => $model->nama_staff]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="staff-update">
	
	<?= $this->render('_form', [
			'model' => $model,
	])?>
</div>