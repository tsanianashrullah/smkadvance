<?php

namespace common\models;

use Yii;

class Siswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $globalSearch;
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
            [['nisn', 'nama_siswa', 'tempat_lahir', 'tgl_lahir', 'alamat','agama', 'anak_ke', 'nama_ayah','nama_ibu','no_tlp','tahun_masuk','pekerjaan_ayah'], 'required'],
            [['alamat'], 'string'],
            [['nisn', 'nama_siswa'], 'string',],
            [['tempat_lahir'], 'string', ],
            [['alamat'], 'string',],
            [['nama_ayah'], 'string',],
            [['nama_ibu'], 'string',],
            [['no_tlp'], 'string',],
            [['tahun_masuk'], 'string',],
            [['agama'], 'string',],
            [['pekerjaan_ayah'], 'string',],
            [['anak_ke'], 'string',],

            

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
            'agama' => 'Agama',
            'anak_ke' => 'Anak ke-',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'pekerjaan_ayah' => 'Pekerjaan Orang Tua',
            'alamat' => 'Alamat',
            'globalSearch'=>'Pencarian Data',
            'tahun_masuk' => 'Tahun Masuk',
            'no_tlp' => 'No.Telephone'
        ];
    }
}
