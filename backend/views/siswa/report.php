<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='Data Siswa';
?>
<table border=2 class="tabel-utama" width=100%>
<?= $this->render('searchs', ['model' => $searchModel]); ?>
<tr>
    <th>NISN</th>
    <th>NAMA</th>
    <th>JURUSAN</th>
    <th>AGAMA</th>
</tr>
    <?php foreach ($models as $model): ?>
        <tr>
            <td><?=$model->nisn;?></td>
            <td><?=$model->nama_siswa;?></td>
            <td><?=$model->jurusan->jurusan;?></td>
            <td><?=$model->agama;?></td>
        </tr>
    <?php endforeach; ?>
<tr>
    <td>
    
        <?= LinkPager::widget([
            'pagination' => $pages,
            ]);
        ?>
    </td>
</tr>
</table>