<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use dosamigos\tableexport\ButtonTableExport;
use yii\widgets\LinkPager;
use yii\bootstrap\Modal;
use yii\helpers\Url;


$this->title = 'Pusat Data Staff SMK';

?>
<div class="guru-index">
  <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">

    <i class="glyphicon glyphicon-list-alt"></i> 
    <?= Html::encode($this->title) ?></h3>
</div>
        <div class="panel-body">

    
<<<<<<< HEAD
     <?php echo $this->render('search', ['model' => $searchModel]); ?>
<div class="pull-right">
         <?= Html::button('Tambah Staff', ['value'=>Url::to('index.php?r=staff/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
       
  
</div>

                <?php
                    Modal::begin([
                            'header'=>'<center><h4>Staff</h4></center>',
                            'id' => 'modal',
                            'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
                        ]);
                    echo "<div id='modalContent'></div>";
                    Modal::end();
            ?>

=======
<div class="btn-group">
         <?= Html::button('Tambah Staff', ['value'=>Url::to('index.php?r=staff/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?> 
>>>>>>> 2f2891ef17ead043f7715ba3c6f393ca945ace49
</div><div>
        <?php
            Modal::begin([
                    'header'=>'<h4>Staff</h4>',
                    'id' => 'modal',
                    'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
                ]);
            echo "<div id='modalContent'></div>";
            Modal::end();
    ?></div>

<<<<<<< HEAD
</div>

=======
>>>>>>> 2f2891ef17ead043f7715ba3c6f393ca945ace49
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_staff',
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

            'alamat',
            'bagian',
            'jk',

        
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}{delete}'],
        ],    
    ]);
  

    ?>


</div>