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
use backend\components\DateHelper;

$this->title = 'Daftar Siswa';
$this->params['breadcrumbs'][]= $this->title;
?>

<div class="siswa-index">
	 <div class="panel panel-default">
      <div class="panel-heading">
      	<h3 class="panel-title">
			 <i class="glyphicon glyphicon-list-alt"></i> 
    			<?= Html::encode($this->title) ?></h3>
				</div>
        <div class="panel-body">
        	<?php echo $this->render('search', ['model' => $searchModel]); ?>
		</div>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			'nisn',
			'nama_siswa',
            'agama',
            'tahun_masuk',
            [
	'class' => 'yii\grid\ActionColumn',
	'template' => '',
],
     ],
 ]);?> 
</div>
