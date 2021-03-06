<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Staff;

/**
 * BarangSearch represents the model behind the search form about `app\models\Barang`.
 */
class StaffSearch extends Staff
{
    public function rules()
    {
        return [
            [['id', 'nama_staff', 'tempat_lahir', 'tgl_lahir', 'alamat','bagian','jk','globalSearch'], 'safe'],
        ];
    }
    public function scenarios()
    {
       return Model::scenarios();
    }

    public function search($params)
    {
        $query = Staff::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->orFilterWhere(['like', 'id', $this->globalSearch])
            ->orFilterWhere(['like', 'nama_staff', $this->globalSearch])
            ->orFilterWhere(['like', 'tempat_lahir', $this->globalSearch])
            ->orFilterWhere(['like', 'tgl_lahir', $this->globalSearch])
            ->orFilterWhere(['like', 'alamat', $this->globalSearch])
            ->orFilterWhere(['like', 'bagian', $this->globalSearch])
            ->orFilterWhere(['like', 'jk', $this->globalSearch])
            ->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'nama_staff', $this->nama_staff])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'tgl_lahir', $this->tgl_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'bagian', $this->bagian])
            ->andFilterWhere(['like', 'jk', $this->jk]);

        return $dataProvider;
    }
}
