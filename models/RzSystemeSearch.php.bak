<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RzSysteme;

/**
 * RzSystemeSearch represents the model behind the search form of `app\models\RzSysteme`.
 */
class RzSystemeSearch extends RzSysteme
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SId', 'System'], 'safe'],
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
        $query = RzSysteme::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'SId', $this->SId])
            ->andFilterWhere(['like', 'System', $this->System]);

        return $dataProvider;
    }
}
