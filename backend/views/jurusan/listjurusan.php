<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='List Jurusan';
?>
<style type="text/css"></style>
<center>

<?php foreach ($models as $model): ?>
<hr>
    <div class="row">
            <div class="col-md-4">
                
                    <img class="img-responsive img-hover" src="<?= $model->foto ?>" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <h3><?= Html::a($model->jurusan, ['detail', 'id' => $model->id]) ?></h3>
                
            </div>
        </div>
<hr>
<?php endforeach; ?>
</table>
</center>
<?= LinkPager::widget([
    'pagination' => $pages,
    ]);
?></td>
</tr>
</table>