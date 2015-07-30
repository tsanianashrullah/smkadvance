<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Artikel;

/**
 * GuruSearch represents the model behind the search form about `app\models\Guru`.
 */
class ArtikelSearch extends Artikel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['globalSearch','isi','judul'], 'safe'],
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
        $query = Artikel::find();

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

        $query->orFilterWhere(['like', 'isi', $this->globalSearch])
            ->orFilterWhere(['like', 'judul', $this->globalSearch])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'judul', $this->judul]);
        return $dataProvider;
    }
}
