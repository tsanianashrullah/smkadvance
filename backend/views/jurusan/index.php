<?php
//use yii\helpers\Html;
//use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
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
<?php
$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],

            'jurusan',
            'id_guru',
            'keterangan',
        
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}{delete}'],
        ];
        ?>
<div>
    <?= 
$fullExportMenu = ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'target' => ExportMenu::TARGET_BLANK,
    'fontAwesome' => true,
    'pjaxContainerId' => 'kv-pjax-container',
    'dropdownOptions' => [
        'label' => 'Full',
        'class' => 'btn btn-default',
        'itemsBefore' => [
            '<li class="dropdown-header">Export All Data</li>',
        ],
    ],
]);
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'pjax' => true,
    'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
    'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Library</h3>',
    ],
    // set a label for default menu
    'export' => [
        'label' => 'Page',
        'fontAwesome' => true,
    ],
    // your toolbar can include the additional full export menu
    'toolbar' => [
        '{export}',
        $fullExportMenu,
        ['content'=>
            Html::button('<i class="glyphicon glyphicon-plus"></i>', [
                'type'=>'button', 
                'title'=>Yii::t('kvgrid', 'Add Book'), 
                'class'=>'btn btn-success'
            ]) . ' '.
            Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], [
                'data-pjax'=>0, 
                'class' => 'btn btn-default', 
                'title'=>Yii::t('kvgrid', 'Reset Grid')
            ])
        ],
    ]
]);
?> 
    </div>
