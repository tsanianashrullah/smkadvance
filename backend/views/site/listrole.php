<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\widgets\LinkPager;
use yii\bootstrap\Modal;
use yii\helpers\Url;


$this->title = 'List Admin';
$this->params['breadcrumbs'][]= $this->title;       
?>
<div class="jurusan-index">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">

    <i class="glyphicon glyphicon-list-alt"></i> <?= Html::encode($this->title) ?></h3></div>
        <div class="panel-body">

<div class="pull-right">
        <?= Html::a('Tambah Admin', ['signup'], ['class' => 'btn btn-success']) ?>
</div>
<div class="btn-group">
        <?php
            Modal::begin([
                    'header'=>'<h4>Tambah Admin</h4>',
                    'id' => 'modal',
                    'size' => 'modal-col-xs-12 .col-sm-6 .col-md-8',
                ]);
            echo "<div id='modalContent'></div>";
            Modal::end();
    ?>
</div>
<div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email',
        
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {role} {delete}'],
        ],
    ]);
?> 
    </div>
