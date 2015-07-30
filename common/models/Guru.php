<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property string $nip
 * @property string $nama_guru
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $jk
 * @property string $alamat
 */
class Guru extends \yii\db\ActiveRecord
{
   public $globalSearch;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'nama_guru', 'tempat_lahir', 'tgl_lahir', 'jk', 'alamat','agama','pend_akhir','program_keahlian','status'], 'required', 'message' => 'Data harus diisi'],
  //          [['nip'],'integer'],
            [['tgl_lahir'], 'safe'],
            [['nama_guru'], 'string', 'max' => 30],
            [['tempat_lahir'], 'string', 'max' => 25],
            [['jk'], 'string', 'max' => 15],
            [['alamat'], 'string', 'max' => 50 ],
            [['agama'],'string','max'=>20],
            [['pend_akhir'],'string','max'=>5],
            [['program_keahlian'],'string','max'=>15],
            [['status'],'string','max'=>10]

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'NIP',
            'nama_guru' => 'Nama Guru',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'jk' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'agama'=>'Agama',
            'pend_akhir'=>'Pendidikan Terakhir',
            'program_keahlian'=>'Program Keahlian',
            'status'=>'Status',
            'globalSearch'=>'Cari Data',
        ];
    }
}
