<?php

use yii\helpers\Html;


$this->params['breadcrumbs'][] = ['label' => 'Siswa','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class='siswa-create'>
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
			'model' => $model,
		]) ?></div>
  

	
