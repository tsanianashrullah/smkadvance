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



$this->title = 'Daftar Guru';
$this->params['breadcrumbs'][]= $this->title;
?>
<div class="guru-index">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
            <i class="glyphicon glyphicon-list-alt"></i> 
            <?= Html::encode($this->title) ?>
        </h3>
        </div>

            <div class="panel-body">    
     <?php echo $this->render('search', ['model' => $searchModel]); ?>
   
 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nip',
            'nama_guru',
            'tempat_lahir',
            [
            'attribute'=>'tgl_lahir',
            'value' =>'tgl_lahir',
            'format' => 'raw',
            'filter'=> Datepicker::widget([
                'model' => $searchModel,
                'attribute' => 'tgl_lahir',
                'clientOptions'=>[
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',]
                ])
            ],
            'agama',
            'pend_akhir',
            'program_keahlian',
            'alamat:ntext',

        
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],    
    ]);

    ?>

</div>
=======
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='Data Guru';
?>
<?php echo $this->render('searchs', ['model' => $searchModel]); ?>
<table border=2 class="tabel-utama" width=100%>
<tr>
    <td>
    
        <?= LinkPager::widget([
            'pagination' => $pages,
            ]);
        ?>
    </td>
</tr>
<tr>
    <th>NIP</th>
    <th>NAMA</th>
    <th>ALAMAT</th>
    <th>PENDIDIKAN TERAKHIR</th>
    <th>JENIS KELAMIN</th>
</tr>
    <?php foreach ($models as $model): ?>
        <tr>
            <td><?=$model->nip;?></td>
            <td><?=$model->nama_guru;?></td>
            <td><?=$model->alamat;?></td>
            <td><?=$model->pend_akhir;?></td>
            <td><?=$model->jk;?></td>
        </tr>
    <?php endforeach; ?>
</table>
>>>>>>> 9f820c296c3e047d54dc87f23c5c5168f3c7a3d8
