<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='List Artikel';
?>
<table border=0 class="tabel-utama" width=100%>
<tr>
	<td>
	</td>
</tr>
<tr>
	<td>
<center>
<table border=0 class="tabel-list-artikel">
    <?php foreach ($models as $model): ?>
    	<tr bgcolor='black'><td rowspan=2 width=45%>

    	<?= 
    	Html::img("@web/$model->foto",['width'=>'100%']);
    	?>
    </td>
    <td width=2%>&nbsp;</td>
    	<td valign='top' height=10%>
    	<h2>
        <?= Html::a($model->judul, ['detail', 'id' => $model->id]) ?></h2></td>
        </tr>
    <tr bgcolor='white'>
    	<td width=2%>&nbsp;</td>
    	<td>&nbsp;</td></tr>
    	<tr><td colspan=3 height=2%>&nbsp;</td></tr>
<?php endforeach; ?>
</table>
</center>
<?= LinkPager::widget([
    'pagination' => $pages,
    ]);
?></td>
</tr>
</table>