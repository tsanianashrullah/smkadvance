<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='List Artikel';
?>

<ul class="nav nav-tabs">
<li role="presentation" class="active"><a href="#">Home</a></li>
<?php foreach ($models as $model): ?>
 <li role="presentation"><?= Html::a($model->kategori->kategori, ['listkategori', 'id' => $model->id]) ?></li>
<?php endforeach; ?>    
</ul>
<br>
<?php foreach ($models as $model): ?>
<div class="featurette" id="about">
            <img class="img-circle img-responsive" src="<?= $model->foto ?>" width=500px height=500px>
            <h2 class="featurette-heading"><?= Html::a($model->judul, ['detail', 'id' => $model->id]) ?>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
<hr>
<?php endforeach; ?>  	
  
<?= LinkPager::widget([
    'pagination' => $pages,
    ]);
?>