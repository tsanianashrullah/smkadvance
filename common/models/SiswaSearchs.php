<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siswa;

/**
 * SiswaSearch represents the model behind the search form about `common\models\Siswa`.
 */
class SiswaSearchs extends Siswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nisn', 'nama_siswa', 'tempat_lahir', 'tgl_lahir', 'agama', 'anak_ke', 'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'alamat', 'tahun_masuk', 'no_tlp', 'globalSearch'], 'safe'],
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
            ->orFilterWhere(['like', 'agama', $this->globalSearch])
            ->orFilterWhere(['like', 'anak_ke', $this->globalSearch])
            ->orFilterWhere(['like', 'nama_ayah', $this->globalSearch])
            ->orFilterWhere(['like', 'nama_ibu', $this->globalSearch])
            ->orFilterWhere(['like', 'pekerjaan_ayah', $this->globalSearch])
            ->orFilterWhere(['like', 'alamat', $this->globalSearch])
            ->orFilterWhere(['like', 'no_tlp', $this->globalSearch]);

        return $dataProvider;
    }
}
