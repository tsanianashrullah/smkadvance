<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='List Jurusan';
?>
<style type="text/css"></style>
<center>

    <?php foreach ($models as $model): ?>
<div class="row">
            <div class="col-md-4">
                
                    <img class="img-responsive img-hover" src="<?= $model->foto ?>" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <h3><?= Html::a($model->jurusan, ['detail', 'id' => $model->id]) ?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
                <a class="btn btn-primary" href="portfolio-item.html">View Project</a>
            </div>
        </div>
<?php endforeach; ?>
</table>
</center>
<?= LinkPager::widget([
    'pagination' => $pages,
    ]);
?></td>
</tr>
</table>