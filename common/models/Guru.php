<?php

namespace common\models;
use yii\helpers\Url;
use common\models\Jurusan;
use Yii;

class Guru extends \yii\db\ActiveRecord
{
   public $globalSearch;
   public $file;
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
            ['nip', 'unique', 'targetClass' => '\common\models\Guru', 'message' => 'NIP sudah ada.'],
            [['nip'],'integer', 'min' => 16],
            [['tgl_lahir'], 'safe'],
            [['nama_guru'], 'string', 'max' => 30],
            [['file'], 'file'],
            [['tempat_lahir'], 'string', 'max' => 25],
            [['jk'], 'string', 'max' => 15],
            [['alamat'], 'string', 'max' => 255 ],
            [['agama'],'string','max'=>20],
            [['pend_akhir'],'string','max'=>5],
            [['program_keahlian'],'string','max'=>40],
            [['status'],'string','max'=>10]

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
            'globalSearch'=>'',
            'foto'=>'Foto',
            'file'=>'Foto',
        ];
    }

    public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(),['id_guru'=>'nip']);
    }

}
