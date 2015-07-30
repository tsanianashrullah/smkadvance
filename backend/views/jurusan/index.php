<?php
//use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\export\ExportMenu;
//use kartik\grid\GridView;
use kartik\helpers\Html;


$this->title = 'Daftar Jurusan';
$this->params['breadcrumbs'][]= $this->title;       
?>
<div class="jurusan-index">
  <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">

    <i class="glyphicon glyphicon-list-alt"></i> <?= Html::encode($this->title) ?></h3></div>
        <div class="panel-body">
            
         <?php echo $this->render('search', ['model' => $searchModel]); ?>

<div class="pull-right">
        <?= Html::button('Tambah Jurusan', ['value'=>Url::to('index.php?r=jurusan/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
</div>
<div class="btn-group">
        <?php
            Modal::begin([
                    'header'=>'<h4>Jurusan</h4>',
                    'id' => 'modal',
                    'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
                ]);
            echo "<div id='modalContent'></div>";
            Modal::end();
    ?>
</div>
<div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jurusan',
            'id_guru',
            'keterangan',
        
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}{delete}'],
        ],
    ]);
?> 
    </div>
