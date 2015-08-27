<?php
<<<<<<< HEAD
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
=======
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='Data Siswa';
?>
<table border=2 class="tabel-utama" width=100%>
<?= $this->render('searchs', ['model' => $searchModel]); ?>
<tr>
    <th>NISN</th>
    <th>NAMA</th>
    <th>JURUSAN</th>
    <th>AGAMA</th>
</tr>
    <?php foreach ($models as $model): ?>
        <tr>
            <td><?=$model->nisn;?></td>
            <td><?=$model->nama_siswa;?></td>
            <td><?=$model->jurusan->jurusan;?></td>
            <td><?=$model->agama;?></td>
        </tr>
    <?php endforeach; ?>
<tr>
    <td>
    
        <?= LinkPager::widget([
            'pagination' => $pages,
            ]);
        ?>
    </td>
</tr>
</table>
>>>>>>> 9f820c296c3e047d54dc87f23c5c5168f3c7a3d8
