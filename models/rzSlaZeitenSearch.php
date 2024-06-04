<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\rzSlaZeiten;

/**
 * rzSlaZeitenSearch represents the model behind the search form of `app\models\rzSlaZeiten`.
 */
class rzSlaZeitenSearch extends rzSlaZeiten
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'slaId', 'wochentag'], 'integer'],
            [['mandant', 'von', 'bis', 'tagesName'], 'safe'],
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
        $query = rzSlaZeiten::find();

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
            'slaId' => $this->slaId,
            'wochentag' => $this->wochentag,
            'von' => $this->von,
            'bis' => $this->bis,
        ]);

        $query->andFilterWhere(['like', 'mandant', $this->mandant])
            ->andFilterWhere(['like', 'tagesName', $this->tagesName]);

        return $dataProvider;
    }
}
