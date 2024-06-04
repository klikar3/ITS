<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\rzKomponenten;

/**
 * rzKomponentenSearch represents the model behind the search form of `app\models\rzKomponenten`.
 */
class rzKomponentenSearch extends rzKomponenten
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'typ'], 'integer'],
            [['devicename', 'service', 'desc'], 'safe'],
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
        $query = rzKomponenten::find();

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
            'typ' => $this->typ,
        ]);

        $query->andFilterWhere(['like', 'devicename', $this->devicename])
            ->andFilterWhere(['like', 'service', $this->service])
            ->andFilterWhere(['like', 'desc', $this->desc]);

        return $dataProvider;
    }
}
