<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
use backend\components\DateHelper;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;



$this->title = 'Daftar Guru';
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data', 'url' => ['/center/data']];
$this->params['breadcrumbs'][]= $this->title;
?>
<div class="guru-index">
  <div class="panel panel-default">
      <div class="panel-heading">  
        <center> <h1 class="panel-title">
            <i class="glyphicon glyphicon-list-alt"></i> 
            <?= Html::encode($this->title) ?>
            </h1></center>
                </div>           
    <div class="panel-body">    
            <div class="pull-left">
                <?php echo $this->render('search', ['model' => $searchModel]); ?>
            </div>
            <div class="pull-right">
            <?= Html::button('Tambah Guru', ['value'=>Url::to('index.php?r=guru/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
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
                'nip',
                'nama_guru',
                'tempat_lahir',
                [
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
                ],
                'agama',
                'pend_akhir',
                'program_keahlian',
                'alamat',
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
        ]);?>
    </div>
</div>