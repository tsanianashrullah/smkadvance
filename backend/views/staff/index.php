<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
use yii\bootstrap\Modal;
use yii\helpers\Url;


$this->title = 'Daftar Staff';
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data', 'url' => ['/center/data']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-index">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
            <i class="glyphicon glyphicon-list-alt"></i> 
                <?= Html::encode($this->title) ?></h3>
</div>
        <div class="panel-body">
     <?php echo $this->render('search', ['model' => $searchModel]); ?>
    <div class="pull-right">
             <?= Html::button('Tambah Staff', ['value'=>Url::to('index.php?r=staff/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
</div>
    <div class="row">
    <div class="col-sm-12">
</div>
</div>
<div>
        <?php
            Modal::begin([
                    'header'=>'<h4>Staff</h4>',
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
</div>