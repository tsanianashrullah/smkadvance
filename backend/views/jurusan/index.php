<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use dosamigos\tableexport\ButtonTableExport;
use yii\widgets\LinkPager;
use yii\bootstrap\Modal;
use yii\helpers\Url;


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
    
       
    
<div class="btn-group">
<<<<<<< HEAD

         <?= Html::button('Tambah Siswa', ['value'=>Url::to('index.php?r=jurusan/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
  

</div>

<?= Html::button('Tambah Jurusan', ['value'=>Url::to('index.php?r=jurusan/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>

</div>
<div class="pull-right">
=======
        <?= Html::button('Tambah Jurusan', ['value'=>Url::to('index.php?r=jurusan/create'), 'class' => 'btn btn btn-success','id'=>'modalButton']) ?>
>>>>>>> 2f2891ef17ead043f7715ba3c6f393ca945ace49
        <?php
            Modal::begin([
                    'header'=>'<h4>Jurusan</h4>',

                    'id' => 'modal',
                    'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
                ]);
            echo "<div id='modalContent'></div>";
            Modal::end();
    ?>

<<<<<<< HEAD
<table cellspacing="0" align="center" class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Jurusan</th>
        <th>ID Guru</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($guru as $gurus): ?>
    <tr>
            <td data-content="ID"><?= $gurus->id; ?></td>
            <td data-content="Jurusan"><?= $gurus->jurusan; ?></td>
            <td data-content="ID Guru"><?= $gurus->id_guru; ?></td>
            <td data-content="Keterangan"><?= $gurus->keterangan; ?></td>
            <td data-content="Aksi"> 
        <div class="btn-group">
            <?= Html::a('Lihat', ['view', 'id' => $gurus->id], ['class' => 'btn btn-primary btn-sm']) ?>
        </div>
    </td>
    </tr>
<?php endforeach; ?>
</table>
=======
>>>>>>> 2f2891ef17ead043f7715ba3c6f393ca945ace49
</div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jurusan',
            'id_guru',
            'keterangan',
        
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}{delete}'],
        ],    
    ]);
  

    ?>
