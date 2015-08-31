<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use dosamigos\tableexport\ButtonTableExport;
use dosamigos\tableexport\ButtonTableExportAsset;
use yii\widgets\LinkPager;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;
use yii\backend\artikel;
$this->title = 'Daftar Artikel';
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data', 'url' => ['/center/data']];
$this->params['breadcrumbs'][]= $this->title;
?>

<div class="guru-index">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
            <i class="glyphicon glyphicon-list-alt"></i> 
            <?= Html::encode($this->title) ?>
        </h3>
        </div>
    <div class="panel-body">
     <?php echo $this->render('search', ['model' => $searchModel]); ?>
       <div class="row">
    <div class="col-sm-12">
       <div class="pull-right">
          <?= Html::button('Tambah Artikel', ['value'=>Url::to('index.php?r=artikel/create'), 'class' => 'btn btn btn-success', 'id'=>'modalButton']) ?> 
       </div>
              <?php
                      Modal::begin([
                              'header'=>'<h4>Guru</h4>',
                              'id' => 'modal',
                              'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
                            ]);
                      echo "<div id='modalContent'></div>";
                      Modal::end();
              ?>
</div>
</div>
<div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            /*[
            'attribute'=>'tgl_lahir',
            'value' =>'tgl_lahir',
            'format' => 'raw',
            'filter'=> Datepicker::widget([
                'model' => $searchModel,
                'attribute' => 'tgl_lahir',
                'clientOptions'=>[
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',]
                ])
            ],*/
            'judul',
            'isi',
            'tgl',
            [
              'attribute' => 'foto',
              'format' => 'raw',
              'value' => function($model) {
              return Html::img($model->imageurl,['width'=>100]);
            },
              'headerOptions' => ['width' => '150'],
              'contentOptions' => ['style' => 'text-align :center;'],
            ],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}{update}{delete}'],
        ],    
    ]);

    ?>
</div>
</div>
</div>
