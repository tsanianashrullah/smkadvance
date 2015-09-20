<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='List Artikel';
?>

<br>
<?php foreach ($models as $model): ?>
<hr>
	<div class="featurette" id="about">
	            <img class="img-circle img-responsive" src="<?= $model->foto ?>" width=500px height=500px>
	            <h2 class="featurette-heading"><?= Html::a($model->judul, ['detail', 'id' => $model->id]) ?></h2>
	</div>
<hr>
<?php endforeach; ?>  	
  
<?= LinkPager::widget([
    'pagination' => $pages,
    ]);
?>