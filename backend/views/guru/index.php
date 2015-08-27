<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
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
<<<<<<< HEAD
                    <div class="pull-left">
            <?php echo $this->render('search', ['model' => $searchModel]); ?>
        </div>
                <div class="pull-right">
    <br><br>
    <?= Html::button('Tambah Guru', ['value'=>Url::to('index.php?r=guru/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?> 
    </div>
   
       
=======
     <?php echo $this->render('search', ['model' => $searchModel]); ?>
       <div class="row">
        <div class="col-sm-12">
       <div class="pull-right">
    <?= Html::button('Tambah Guru', ['value'=>Url::to('index.php?r=guru/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
    </div>
    </div>
    </div>
>>>>>>> 9f820c296c3e047d54dc87f23c5c5168f3c7a3d8
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
<<<<<<< HEAD
=======

    <div class="table-responsive"> 
>>>>>>> 9f820c296c3e047d54dc87f23c5c5168f3c7a3d8
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
<<<<<<< HEAD
    ]);?>
=======
    ]);

    ?>

</div>
>>>>>>> 9f820c296c3e047d54dc87f23c5c5168f3c7a3d8
</div>