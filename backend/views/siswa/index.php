<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
use dosamigos\tableexport\ButtonTableExport;
use yii\bootstrap\Modal;
use yii\helpers\Url;

$this->title = 'Daftar Siswa';

?>

<div class="siswa-index">
	 <div class="panel panel-primary">
      <div class="panel-heading">
      	<h3 class="panel-title">

    <i class="glyphicon glyphicon-list-alt"> </i> <?= Html::encode($this->title) ?></h3></div>
        <div class="panel-body">
    
	
	<?php ?>

	<p>
		
		<?= Html::button('Tambah Siswa', ['value'=>Url::to('index.php?r=siswa/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>

	</p>
	<?php
			Modal::begin([
					'header'=>'<center><h4>Siswa</h4></center>',
					'id' => 'modal',
					'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
				]);
			echo "<div id='modalContent'></div>";
			Modal::end();
	?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'summary'=>'',
'showFooter'=>true,
'showHeader' => true,
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
            'tahun_masuk:ntext',
            
            


    

			[
	'class' => 'yii\grid\ActionColumn',
	'template' => '{view} {update} {delete} {link}',
	'buttons' => [
		'update' => function ($url,$model) {
			return Html::a(
				'<span class="glyphicon glyphicon-pencil"></span>', 
				$url);
		},
	],
],
     ],
 ]);?> 
 
</div>