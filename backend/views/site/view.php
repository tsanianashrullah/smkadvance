<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = 'Role : ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'List Admin', 'url' => ['listrole']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-view">
<div class="panel panel-default">
      <div class="panel-heading">Role</div>
        <div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>
        <?= Html::a('Delete', ['delete', 'id' => $IdRole->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $IdRole,  
        'attributes' => [
            'item_name',
        ],
    ]) 
   
?>
        </div>
    </div>
</div>
