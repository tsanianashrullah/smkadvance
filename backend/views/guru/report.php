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



$this->title = 'Daftar Guru';
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
   
 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nip',
            'nama_guru',
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
            
        ],    
    ]);

    ?>

</div>
