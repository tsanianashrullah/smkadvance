<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use dosamigos\tableexport\ButtonTableExport;
use yii\widgets\LinkPager;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use dosamigos\tableexport\ButtonTableExportAsset;
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
<<<<<<< HEAD
=======
        <?= ButtonTableExport::widget(
    [
        'label' => 'Export Table',
        'selector' => '#tableId', // any jQuery selector
        'exportClientOptions' => [
            'ignoredColumns' => [0, 7],
            'useDataUri' => false,
            'url' => \yii\helpers\Url::to('controller/download')
        ]
    ]
);?>
>>>>>>> 64cf5ecf3c1da932f8c8fc99f4f06c16bdf81838
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
<<<<<<< HEAD

=======
<?php
// On your view

ButtonTableExportAsset::register($this);
?>
>>>>>>> 64cf5ecf3c1da932f8c8fc99f4f06c16bdf81838
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
    ]);?> 
    </div>
