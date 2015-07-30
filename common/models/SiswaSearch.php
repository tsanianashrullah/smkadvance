<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siswa;

/**
 * SiswaSearch represents the model behind the search form about `common\models\Siswa`.
 */
class SiswaSearch extends Siswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nisn', 'nama_siswa', 'tempat_lahir', 'tgl_lahir', 'agama', 'anak_ke', 'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'alamat', 'tahun_masuk', 'no_tlp', 'foto','globalSearch'], 'safe'],
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

        $query->andFilterWhere([
            'tgl_lahir' => $this->tgl_lahir,
            'tahun_masuk' => $this->tahun_masuk,
        ]);

        $query->andFilterWhere(['like', 'nisn', $this->nisn])
            ->andFilterWhere(['like', 'nama_siswa', $this->nama_siswa])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'anak_ke', $this->anak_ke])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['like', 'pekerjaan_ayah', $this->pekerjaan_ayah])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_tlp', $this->no_tlp])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
