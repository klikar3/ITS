<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RzKernzeiten;

/**
 * RzKernzeitenSearch represents the model behind the search form of `app\models\RzKernzeiten`.
 */
class RzKernzeitenSearch extends RzKernzeiten
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zId', 'Wochentag'], 'integer'],
            [['Mandant', 'Kernzeit_von', 'Kernzeit_bis', 'Tagesname'], 'safe'],
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
        $query = RzKernzeiten::find();

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
            'zId' => $this->zId,
            'Wochentag' => $this->Wochentag,
            'Kernzeit_von' => $this->Kernzeit_von,
            'Kernzeit_bis' => $this->Kernzeit_bis,
        ]);

        $query->andFilterWhere(['like', 'Mandant', $this->Mandant])
            ->andFilterWhere(['like', 'Tagesname', $this->Tagesname]);

        return $dataProvider;
    }
}
