<?php
use yii\helpers\Html;

<<<<<<< HEAD
$this->title = 'Update Data Staff: ' . ' ' . $model->id;
=======
$this->title = 'Update Data Staff: ' . ' ' . $model->nama_staff;
>>>>>>> 2f2891ef17ead043f7715ba3c6f393ca945ace49
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_staff, 'url' => ['view', 'id' => $model->nama_staff]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="staff-update">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
			'model' => $model,
	])?>
</div>