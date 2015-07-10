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
            [['nip', 'nama_guru', 'tempat_lahir', 'tgl_lahir', 'jk', 'alamat'], 'required', 'message' => 'Data harus diisi'],
            [['tgl_lahir'], 'safe'],
            [['nip'], 'string'],
            [['nama_guru'], 'string', 'max' => 30],
            [['tempat_lahir'], 'string', 'max' => 25],
            [['jk'], 'string', 'max' => 15],
            [['alamat'], 'string', 'max' => 50 ]
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
        ];
    }
}
