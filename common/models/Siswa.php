<?php

namespace common\models;

use Yii;
use yii\common\models;
/**
 * This is the model class for table "siswa".
 *
 * @property string $nisn
 * @property string $nama_siswa
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $agama
 * @property string $anak_ke
 * @property string $nama_ayah
 * @property string $nama_ibu
 * @property string $pekerjaan_ayah
 * @property string $alamat
 * @property string $tahun_masuk
 * @property string $no_tlp
 * @property string $foto
 */
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
            [['nisn', 'nama_siswa', 'tempat_lahir', 'tgl_lahir', 'agama', 'anak_ke', 'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'alamat', 'tahun_masuk', 'no_tlp'], 'required'],
            [['tgl_lahir', 'tahun_masuk'], 'safe'],
            [['nisn'], 'integer'],
            [['id_jurusan'],'required'],
            [['nama_siswa', 'nama_ayah', 'nama_ibu'], 'string', 'max' => 30],
            [['tempat_lahir', 'pekerjaan_ayah'], 'string', 'max' => 25],
            [['agama'], 'string', 'max' => 15],
            [['anak_ke'], 'string', 'max' => 4],
            [['alamat'], 'string'],
            [['no_tlp'], 'integer'],
            [['nisn'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nisn' => 'Nisn',
            'nama_siswa' => 'Nama Siswa',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'agama' => 'Agama',
            'anak_ke' => 'Anak Ke',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'pekerjaan_ayah' => 'Pekerjaan Ayah',
            'alamat' => 'Alamat',
            'tahun_masuk' => 'Tahun Masuk',
            'no_tlp' => 'No Tlp',
            // 'foto' => 'Foto',
            'id_jurusan'=> 'Jurusan',
            'globalSearch'=>'Cari Data',
        ];
    }


    public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(),['id'=>'id_jurusan']);
    }
}
