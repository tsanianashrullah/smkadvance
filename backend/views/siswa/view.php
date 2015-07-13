<?php 

use yii\helpers\Html;
use yii\widgets\DetailView;



$this->title = $model->nama_siswa;
?>
<div class="siswa-view">
	<div class="pull-right">
		<?= Html::a('Update',['update', 'id' => $model->nisn], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete',['delete', 'id' => $model->nisn], [
					'class' => 'btn btn-danger',
					'data' => [
						'confrim' => 'Are you sure you want to delete items?',
						'method' => 'post',
					
						],

		]) ?>
	</div>
	
<div class="row">
  <div class="col-xs-12 .col-md-8">
	<?= DetailView::widget([
		'model'=> $model,
		'attributes'=> [
			'nisn',
			'nama_siswa',
			'tempat_lahir',
			'tgl_lahir',
			'agama',
			'anak_ke',
			'nama_ayah',
			'nama_ibu',
			'pekerjaan_ayah',
			'alamat',
			'tahun_masuk',
			'no_tlp:ntext',
		],
	]) ?>
	</div>
</div>




	