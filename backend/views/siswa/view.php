<?php 

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\social\FacebookPlugin;


$this->title = $model->nama_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data', 'url' => ['/center/data']];
$this->params['breadcrumbs'][] = ['label' => 'Daftar Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Siswa Dengan Nama :'.$this->title];
?>

<div class="guru-view">
<div class="panel panel-default">
      <div class="panel-heading">View Detail Data Siswa <?= $model->nama_siswa ?></div>
        <div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nisn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nisn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
			'jurusan.jurusan',			
			'no_tlp:ntext',
		],
	]) ?>
	<?php echo FacebookPlugin::widget(['type'=>FacebookPlugin::COMMENT, 'settings' => ['data-width'=>1000, 'data-numposts'=>5]]); ?>
	</div>
</div>




	