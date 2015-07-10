<?php
use yii\helpers\Html;

?>
<div class="siswa-update">
	 <h3 class="panel-title">
<?= Html::encode($this->title) ?></h3></div>
        <div class="panel-body">
 <?php ?>
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
			'model' => $model,
	])?>
</div></div>