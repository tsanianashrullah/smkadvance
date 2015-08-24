<?php
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