<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NavSecondTier;

/**
 * NavSecondTierSearch represents the model behind the search form of `app\models\NavSecondTier`.
 */
class NavSecondTierSearch extends NavSecondTier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['servername', 'service', 'system', 'sqlserver', 'datenbank', 'aktiv'], 'safe'],
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
        $query = NavSecondTier::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'servername', $this->servername])
            ->andFilterWhere(['like', 'service', $this->service])
            ->andFilterWhere(['like', 'system', $this->system])
            ->andFilterWhere(['like', 'sqlserver', $this->sqlserver])
            ->andFilterWhere(['like', 'datenbank', $this->datenbank])
            ->andFilterWhere(['like', 'aktiv', $this->aktiv]);

        return $dataProvider;
    }
}
