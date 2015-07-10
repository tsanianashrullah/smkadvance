<?php
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use dosamigos\tableexport\ButtonTableExport;
use yii\widgets\LinkPager;



$this->title = 'Daftar Guru';
$this->params['breadcrumbs'][]= $this->title;
?>
<div class="guru-index">
  <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">

    <i class="glyphicon glyphicon-list-alt"></i> <?= Html::encode($this->title) ?></h3></div>
        <div class="panel-body">
    
    <?php //ini awalan ?>
    
       
    
<div class="btn-group">
         <?= Html::a('Tambah Data Guru',['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
  
</div>
<div class="pull-right"> 
<div class="btn-group open">

    <button id="w8" class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Export" href="#" aria-expanded="true">

    <i class="glyphicon glyphicon-export">
       
    </i>

     Page 

    <span class="caret"></span>

</button>
<ul id="w9" class="dropdown-menu dropdown-menu-right">

    <li class="dropdown-header" role="presentation">

        Export Page Data

    </li>
    <li title="Hyper Text Markup Language">
        <a class="export-html" tabindex="-1" data-format="text/html" href="#">

        <i class="text-info fa fa-file-text">
       
        </i>

         HTML

    </a>

</li>
<li title="Comma Separated Values">

    <a class="export-csv" tabindex="-1" data-format="application/csv" href="#">

        <i class="text-primary fa fa-file-code-o">
       
        </i>

         CSV

    </a>

</li>
<li title="Tab Delimited Text">

    <a class="export-txt" tabindex="-1" data-format="text/plain" href="#">

        <i class="text-muted fa fa-file-text-o">
       
        </i>

         Text

    </a>

</li>
<li title="Microsoft Excel 95+">

    <a class="export-xls" tabindex="-1" data-format="application/vnd.ms-excel" href="#">

        <i class="text-success fa fa-file-excel-o">
       
        </i>

         Excel

    </a>

</li>
<li title="Portable Document Format">

    <a class="export-pdf" tabindex="-1" data-format="application/pdf" href="#">

        <i class="text-danger fa fa-file-pdf-o">
       
        </i>

         PDF

    </a>

</li>
<li title="JavaScript Object Notation">

    <a class="export-json" tabindex="-1" data-format="application/json" href="#">

                <i class="text-warning fa fa-file-code-o">
       
                </i>

                 JSON

            </a>
        </li>
    </ul>

</div>
<div class="btn-group open">

    <button id="w5" class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Export data in selected format" href="#" aria-expanded="true">

    <i class="glyphicon glyphicon-export">
       
    </i>

     Full 

    <span class="caret"></span>

</button>
<ul id="w6" class="dropdown-menu">

    <li class="dropdown-header">

        Export All Data

    </li>
    <li title="Hyper Text Markup Language">
        <a id="w4-html" class="export-full-html" tabindex="-1" data-format="HTML" href="#">

        <i class="text-info fa fa-file-text">
       
        </i>

         HTML

    </a>

</li>
<li title="Comma Separated Values">

    <a id="w4-csv" class="export-full-csv" tabindex="-1" data-format="CSV" href="#">

        <i class="text-primary fa fa-file-code-o">
       
        </i>

         CSV

    </a>

</li>
<li title="Tab Delimited Text">

    <a id="w4-txt" class="export-full-txt" tabindex="-1" data-format="TXT" href="#">

        <i class="text-muted fa fa-file-text-o">
       
        </i>

         Text

    </a>

</li>
<li title="Portable Document Format">

    <a id="w4-pdf" class="export-full-pdf" tabindex="-1" data-format="PDF" href="#">

        <i class="text-danger fa fa-file-pdf-o">
       
        </i>

         PDF

    </a>

</li>
<li title="Microsoft Excel 95+ (xls)">

    <a id="w4-excel5" class="export-full-excel5" tabindex="-1" data-format="Excel5" href="#">

        <i class="text-success fa fa-file-excel-o">
       
        </i>

         Excel 95 +

    </a>

</li>
<li title="Microsoft Excel 2007+ (xlsx)">

    <a id="w4-excel2007" class="export-full-excel2007" tabindex="-1" data-format="Excel2007" href="#">

                    <i class="text-success fa fa-file-excel-o">
       
                    </i>

                     Excel 2007+

                </a>
            </li>
        </ul>
    </div>

</div>
</div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nip',
            'nama_guru',
            'tempat_lahir',
            'jk',
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

            'alamat:ntext',

        
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}{delete}'],
        ],    
    ]);
  

    ?>


</div>