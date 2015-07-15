<?php
	
namespace common\models;
use Yii;


class Staff extends \yii\db\ActiveRecord
	{
		public $globalSearch;
	public static function tableName()
	{
	return 'staff';
	}
 public function rules()
 {
 	return [
 			[['nama_staff', 'tempat_lahir', 'tgl_lahir', 'alamat', 'bagian','jk'], 'required'],
			[['id'], 'string'],
// 			[['id'], 'string', max=> 10],
 			[['nama_staff'], 'string', 'max'=> 25],
 			[['tempat_lahir'], 'string', 'max'=> 20],
 			[['tgl_lahir'], 'safe'],
 			[['alamat'], 'string', 'max'=> 50],
 			[['bagian'], 'string', 'max'=> 15],
			[['jk'],'string','max'=>15],
 		];
 	}

 public function attributLabels()
	{
		return [
			'id' => 'Id Staff',
			'nama_staff' => 'Nama Staff',
			'tempat_lahir' => 'Tempat Lahir',
			'tgl_lahir' => 'Tanggal Lahir',
			'alamat' => 'Alamat',
			'bagian' => 'Bagian',
			'jk' =>'Jenis Kelamin',




		];


	} 

}
?>


