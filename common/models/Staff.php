<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property integer $id
 * @property string $nama_staff
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $bagian
 * @property string $jk
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $globalSearch;
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_staff', 'tempat_lahir', 'tgl_lahir', 'alamat', 'bagian', 'jk'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nama_staff'], 'string', 'max' => 25],
            [['tempat_lahir'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 50],
            [['bagian', 'jk'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_staff' => 'Nama Staff',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'bagian' => 'Bagian',
            'jk' => 'Jenis Kelamin',
            'globalSearch'=>'Cari Data',

        ];
    }
}
