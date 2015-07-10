<?php
use yii\helpers\Html;

$this->title = 'Update Siswa: ' . ' ' . $model->nisn;
$this->params['breadcrumbs'][] = ['label' => 'Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nisn, 'url' => ['view', 'id' => $model->nisn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswa-update">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
			'model' => $model,
	])?>
</div>