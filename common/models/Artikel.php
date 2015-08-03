<?php

namespace common\models;

use Yii;

class Arikel extends \yii\db\ActiveRecord
{
   public $file;
   public $globalSearch;
   public $menu;
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
        [['menu'],'menu'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        	'judul'=>'Judul',
        	'isi'=>'Isi',
            'file'=>'Gambar',
        ];
    }
}
