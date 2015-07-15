<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Guru;

/**
 * GuruSearch represents the model behind the search form about `app\models\Guru`.
 */
class GuruSearch extends Guru
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'globalSearch','nama_guru', 'tempat_lahir', 'tgl_lahir', 'jk', 'alamat','agama','pend_akhir','program_keahlian','status'], 'safe'],
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
        $query = Guru::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }/*
        $query->andFilterWhere([
            'nip' => $this->nip,
        ]);*/

        $query->orFilterWhere(['like', 'nip', $this->globalSearch])
            ->orFilterWhere(['like', 'nama_guru', $this->globalSearch])
            ->orFilterWhere(['like', 'tempat_lahir', $this->globalSearch])
            ->orFilterWhere(['like', 'jk', $this->globalSearch])
            ->orFilterWhere(['like', 'agama', $this->globalSearch])
            ->orFilterWhere(['like', 'pend_akhir', $this->globalSearch])
            ->orFilterWhere(['like', 'program_keahlian', $this->globalSearch])
            ->orFilterWhere(['like', 'status', $this->globalSearch])
            ->orFilterWhere(['like', 'alamat', $this->globalSearch]);

        return $dataProvider;
    }
}
