<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
use aayaresko\export\ExtendedExportMenu;
use dosamigos\tableexport\ButtonTableExport;



$this->title = 'Daftar Siswa';
$this->params['breadcrumbs'][]= $this->title;
?>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="/site">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<div class="siswa-index">
	 <div class="panel panel-primary">
      <div class="panel-heading">
      	<h3 class="panel-title">

    <i class="glyphicon glyphicon-list-alt"> </i> <?= Html::encode($this->title) ?></h3></div>
        <div class="panel-body">
    
	
	<?php ?>

	<p>
		
		<?= Html::a('Create Siswa',['create'], ['class' => 'btn btn btn-success']) ?>
	</p>

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

    

    

			'alamat:ntext',
			[
	'class' => 'yii\grid\ActionColumn',
	'template' => '{view} {update} {delete} {link}',
	'buttons' => [
		'update' => function ($url,$model) {
			return Html::a(
				'<span class="glyphicon glyphicon-user"></span>', 
				$url);
		},
		'link' => function ($url,$model,$key) {
				return Html::a('Action', $url);
		},
	],
],
     ],
 ]); ?>
</div>