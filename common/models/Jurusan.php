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
class Jurusan extends \yii\db\ActiveRecord
{
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
        [['jurusan','id_guru','keterangan'],'required'],
        [['jurusan'],'string','max'=>30],
        [['id_guru'],'string','max'=>10],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        'jurusan'=>'Jurusan',
        'id_guru'=>'ID Guru',
        'keterangan'=>'Keterangan',
        ];
    }
}