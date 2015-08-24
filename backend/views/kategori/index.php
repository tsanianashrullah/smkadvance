<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;


$this->title = 'Daftar Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data', 'url' => ['/center/data']];
$this->params['breadcrumbs'][]= $this->title;       
?>
<div class="kategori-index">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
            <i class="glyphicon glyphicon-list-alt"></i> <?= Html::encode($this->title) ?></h3>
        </div>
    <div class="panel-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <?= Html::button('Tambah Kategori', ['value'=>Url::to('index.php?r=kategori/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
            </div>
        </div>
    </div>
<div class="btn-group">
        <?php
            Modal::begin([
                    'header'=>'<h4><center>Kategori</center></h4>',
                    'id' => 'modal',
                    'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
                ]);
            echo "<div id='modalContent'></div>";
            Modal::end();
    ?>
</div>
<div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kategori',
        
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}{delete}'],
            ]]);
        ?>
    </div>
</div>