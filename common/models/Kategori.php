<?php

namespace common\models;
use backend\models\Artikel;
use Yii;


/**
 * This is the model class for table "kategori".
 *
 * @property integer $id
 * @property string $kategori
 */
class Kategori extends \yii\db\ActiveRecord
{
   public $globalSearch;
   public $menu;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategori'], 'required'],
            [['kategori'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'id',
            'kategori' => 'Kategori',
        ];
    }
    public function getArtikel()
    {
        return $this->hasMany(Artikel::className(),['id_kategori'=>'id_kategori']);
    }
}
