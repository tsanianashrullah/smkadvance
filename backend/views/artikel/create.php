<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->params['breadcrumbs'][] = ['label' => 'Guru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="artikel-create">
   <h6><?= Html::encode($this->title) ?></h6>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>
</div>

