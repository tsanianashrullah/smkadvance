<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;


$this->title='List Artikel';
?>

    <?php foreach ($models as $model): ?>
    	<?= 
    	Html::img("@web/$model->foto",['width'=>'24%']);
    	?>
    	<h1>
        <?= Html::a($model->judul, ['detail', 'id' => $model->id]) ?></h1><br>
<?php endforeach; ?>

<?= LinkPager::widget([
    'pagination' => $pages,
    ]);
?>