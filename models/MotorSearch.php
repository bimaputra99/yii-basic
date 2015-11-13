<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MotorModel;

/**
 * MotorSearch represents the model behind the search form about `app\models\MotorModel`.
 */
class MotorSearch extends MotorModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_motor', 'by_sewa'], 'integer'],
            [['nama_motor', 'th_keluar', 'gambar'], 'safe'],
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
        $query = MotorModel::find();

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
            'id_motor' => $this->id_motor,
            'th_keluar' => $this->th_keluar,
            'by_sewa' => $this->by_sewa,
        ]);

        $query->andFilterWhere(['like', 'nama_motor', $this->nama_motor])
            ->andFilterWhere(['like', 'gambar', $this->gambar]);

        return $dataProvider;
    }
}
