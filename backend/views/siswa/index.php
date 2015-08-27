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

$this->title = 'Daftar Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data', 'url' => ['/center/data']];
$this->params['breadcrumbs'][]= $this->title;
?>
<div class="siswa-index">
<<<<<<< HEAD
	 <div class="panel panel-default">
      <div class="panel-heading">
      	<h3 class="panel-title">
			 <i class="glyphicon glyphicon-list-alt"></i> 
    			<?= Html::encode($this->title) ?></h3>
				</div>
        <div class="panel-body">
        	<?php echo $this->render('search', ['model' => $searchModel]); ?>
		  <div class="pull-right">
			<?= Html::button('Tambah Siswa', ['value'=>Url::to('index.php?r=siswa/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
				<?php
				Modal::begin([
						'header'=>'<center><h4>Siswa</h4></center>',
						'id' => 'modal',
						'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
					]);
				echo "<div id='modalContent'></div>";
				Modal::end();
		?>
</div><br><br>
	<?= GridView::widget([
=======
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
    <i class="glyphicon glyphicon-list-alt"></i> 
    <?= Html::encode($this->title) ?></h3>
    </div>
        <div class="panel-body">          
         <?php echo $this->render('search', ['model' => $searchModel]); ?>
<div class="pull-right">
        <?= Html::button('Tambah Siswa', ['value'=>Url::to('index.php?r=siswa/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
</div>
<div class="row">
    <div class="col-sm-12">
</div>
</div>
<div>
        <?php
            Modal::begin([
                    'header'=>'<h4>Siswa</h4>',
                    'id' => 'modal',
                    'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
                ]);
            echo "<div id='modalContent'></div>";
            Modal::end();
    ?>
</div>
<div class="table-responsive">
    <?= GridView::widget([
>>>>>>> 9f820c296c3e047d54dc87f23c5c5168f3c7a3d8
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			'nisn',
			'nama_siswa',
			'tempat_lahir',
			[
                'attribute'=> 'tgl_lahir',
                'value'=>'tgl_lahir',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                'model' => $searchModel,
                'attribute' => 'tgl_lahir',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                    
                ])

            ],          
            'agama',
            'alamat',
            [
                'attribute'=> 'tahun_masuk',
                'value'=>'tahun_masuk',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                'model' => $searchModel,
                'attribute' => 'tgl_lahir',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                    
                ])

            ], 
            'anak_ke',
            'nama_ayah',
            'nama_ibu',
            'pekerjaan_ayah',
            'jurusan.jurusan',          
            'no_tlp:ntext',
            [
			'class' => 'yii\grid\ActionColumn',
			'template' => '{view} {update} {delete} {link}'],
     ],
 ]);
 ?> 
</div>
</div>