<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PelangganModel;

/**
 * PelangganSearch represents the model behind the search form about `app\models\PelangganModel`.
 */
class PelangganSearch extends PelangganModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pelanggan'], 'integer'],
            [['nama', 'alamat', 'telp', 'identitas'], 'safe'],
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
        $query = PelangganModel::find();

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
            'id_pelanggan' => $this->id_pelanggan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'telp', $this->telp])
            ->andFilterWhere(['like', 'identitas', $this->identitas]);

        return $dataProvider;
    }
}
