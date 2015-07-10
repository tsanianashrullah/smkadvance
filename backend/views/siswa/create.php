<?php

use yii\helpers\Html;


$this->params['breadcrumbs'][] = ['label' => 'Siswa','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-create">
	<div class="row">
  <div class="col-xs-12 .col-md-8"><h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
			'model' => $model,
		]) ?></div>
  
</div>
	
</div>