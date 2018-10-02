<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RzKeyUser;

/**
 * RzKeyUserSearch represents the model behind the search form of `app\models\RzKeyUser`.
 */
class RzKeyUserSearch extends RzKeyUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kid'], 'integer'],
            [['System', 'Kunde', 'Standort', 'email'], 'safe'],
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
        $query = RzKeyUser::find();

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
        $query->andFilterWhere([
            'Kid' => $this->Kid,
        ]);

        $query->andFilterWhere(['like', 'System', $this->System])
            ->andFilterWhere(['like', 'Kunde', $this->Kunde])
            ->andFilterWhere(['like', 'Standort', $this->Standort])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
