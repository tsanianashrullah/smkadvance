<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property string $kode_barang
 * @property string $nama_barang
 * @property string $kode_supplier
 * @property string $stok
 * @property string $keterangan
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nisn', 'nama_siswa', 'tempat_lahir', 'tgl_lahir', 'alamat'], 'required'],
            [['alamat'], 'string'],
            [['nisn', 'nama_siswa'], 'string',],
            [['tempat_lahir'], 'string', ],
            [['alamat'], 'string',]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nisn' => 'NISN',
            'nama_siswa' => 'Nama Siswa',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
        ];
    }
}
