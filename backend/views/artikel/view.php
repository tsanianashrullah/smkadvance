<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
<<<<<<< HEAD
use dosamigos\tableexport\ButtonTableExportAsset;
use kartik\social\FacebookPlugin;
=======
>>>>>>> 9f820c296c3e047d54dc87f23c5c5168f3c7a3d8

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Pusat data artikel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artikel-view">
<div class="panel panel-default ">
      <div class="panel-heading">Artikel</div>
        <div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    
    <?php
    $img=Html::img("@web/$model->foto",['width'=>100]);
    ?>
    <?php echo FacebookPlugin::widget(['type'=>FacebookPlugin::SHARE, 'settings' => []]);?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'judul',
            'isi',
            [
                'label'=>'Foto',
                'format'=>'raw',
                'value'=>$img,
            ],
            'kategori.kategori',
        ],
    ]) 
   
?>
<?php echo FacebookPlugin::widget(['type'=>FacebookPlugin::COMMENT, 'settings' => ['data-width'=>1000, 'data-numposts'=>5]]); ?>

</div>
