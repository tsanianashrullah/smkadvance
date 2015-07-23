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
            ->orFilterWhere(['like', 'jk', $this->globalSearch]);

        return $dataProvider;
    }
}
