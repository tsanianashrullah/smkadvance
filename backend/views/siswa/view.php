<?php 

use yii\helpers\Html;
use yii\widgets\DetailView;



$this->title = $model->nama_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Siswa', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-view">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>
		<?= Html::a('Update',['update', 'id' => $model->nisn], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete',['delete', 'id' => $model->nisn], [
					'class' => 'btn btn-danger',
					'data' => [
						'confrim' => 'Are you sure you want to delete items?',
						'method' => 'post',
					
						],

		]) ?>
	</p>

	<?= DetailView::widget([
		'model'=> $model,
		'attributes'=> [
			'nisn',
			'nama_siswa',
			'tempat_lahir',
			'tgl_lahir',
			'alamat:ntext',
		],
	]) ?>
	
</div>




	