<?php

namespace common\models;

use common\models\Guru;
use common\models\Siswa;
use Yii;
use yii\helpers\Url;
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
class Jurusan extends \yii\db\ActiveRecord
{
    
   public $globalSearch;
   public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        [['jurusan','id_guru','deskripsi'],'required'],
        [['jurusan'],'string','max'=>30],
        [['id_guru'],'string','max'=>10],
        [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        'jurusan'=>'Jurusan',
        'id_guru'=>'Kepala Jurusan',
        'deskripsi'=>'Deskripsi',
        'globalSearch'=>'Cari Data',
        'foto'=>'Foto',
        ];
    }
    public function getGuru()
    {
        return $this->hasOne(Guru::className(),['nip'=>'id_guru']);
    }

    public function getSiswa()
    {
        return $this->hasMany(Siswa::className(),['id_jurusan'=>'id']);
    }

    public function getImageurl()
    {
       return Url::to('@web/' . $this->foto, true);
       //return Url::to('@web/uploads/' . $this->foto, true);
    }

}
