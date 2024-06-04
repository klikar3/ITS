<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Devices;

/**
 * DeviceSearch represents the model behind the search form of `app\models\Devices`.
 */
class DeviceSearch extends Devices
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dId', 'DeviceId'], 'integer'],
            [['Device'], 'safe'],
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
        $query = Devices::find();

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
            'dId' => $this->dId,
            'DeviceId' => $this->DeviceId,
        ]);

        $query->andFilterWhere(['like', 'Device', $this->Device]);

        return $dataProvider;
    }
}
