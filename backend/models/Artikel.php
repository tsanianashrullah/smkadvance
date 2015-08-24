<?php

namespace backend\models;
use Yii;
use common\models\Kategori;
use yii\helpers\Url;
class Artikel extends \yii\db\ActiveRecord
{
   public $file;
   public $globalSearch;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        [['judul','isi','id_kategori'],'required'],
        [['file'], 'file'],
        ];
    }

    public function getImageurl()
    {
       return Url::to('@web/' . $this->foto, true);
       //return Url::to('@web/uploads/' . $this->foto, true);
    } 
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        	'judul'=>'Judul',
        	'isi'=>'Isi',
        	'tgl'=>'Tanggal',
            'id_kategori'=>'Kategori',
            'file'=>'Gambar',
        ];
    }
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(),['id_kategori'=>'id_kategori']);
    }
}
