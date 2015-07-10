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
            [['nip', 'nama_guru', 'tempat_lahir', 'tgl_lahir', 'jk', 'alamat','agama','pend_akhir','program_keahlian','status'], 'safe'],
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
        }

        $query->andFilterWhere([
            'tgl_lahir' => $this->tgl_lahir,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nama_guru', $this->nama_guru])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'pend_akhir', $this->pend_akhir])
            ->andFilterWhere(['like', 'program_keahlian', $this->program_keahlian])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
