<?php

namespace backend\models;

use Yii;
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
        [['judul','isi'],'required'],
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
            'file'=>'Gambar',
        ];
    }
}
