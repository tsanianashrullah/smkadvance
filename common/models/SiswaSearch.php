<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siswa;

/**
 * BarangSearch represents the model behind the search form about `app\models\Barang`.
 */
class SiswaSearch extends Siswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nisn','globalSearch', 'nama_siswa', 'tempat_lahir', 'tgl_lahir','agama','anak_ke','nama_ayah','nama_ibu','pekerjaan_ayah', 'alamat','tahun_masuk','no_tlp'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Siswa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->orFilterWhere(['like', 'nisn', $this->globalSearch])
            ->orFilterWhere(['like', 'nama_siswa', $this->globalSearch])
            ->orFilterWhere(['like', 'tempat_lahir', $this->globalSearch])
            ->orFilterWhere(['like', 'tgl_lahir', $this->globalSearch])
            ->orFilterWhere(['like', 'agama', $this->globalSearch])
            ->orFilterWhere(['like', 'anak_ke', $this->globalSearch])
            ->orFilterWhere(['like', 'nama_ayah', $this->globalSearch])
            ->orFilterWhere(['like', 'nama_ibu', $this->globalSearch])
            ->orFilterWhere(['like', 'alamat', $this->globalSearch])
            ->orFilterWhere(['like', 'pekerjaan_ayah', $this->globalSearch])
            ->orFilterWhere(['like', 'tahun_masuk', $this->globalSearch])
            ->orFilterWhere(['like', 'no_tlp', $this->globalSearch])
            ->andFilterWhere(['like', 'nisn', $this->nisn])
            ->andFilterWhere(['like', 'nama_siswa', $this->nama_siswa])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'tgl_lahir', $this->tgl_lahir])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'anak_ke', $this->anak_ke])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'pekerjaan_ayah', $this->pekerjaan_ayah])
            ->andFilterWhere(['like', 'tahun_masuk', $this->tahun_masuk])
            ->andFilterWhere(['like', 'no_tlp', $this->no_tlp]);

        return $dataProvider;
    }
}
