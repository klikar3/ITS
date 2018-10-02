<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GroupDevices;

/**
 * GroupDevicesSearch represents the model behind the search form of `app\models\GroupDevices`.
 */
class GroupDevicesSearch extends GroupDevices
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gdId', 'DeviceId'], 'integer'],
            [['Gruppe', 'DeviceName'], 'safe'],
            [['Anteil'], 'number'],
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
        $query = GroupDevices::find();

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
            'gdId' => $this->gdId,
            'DeviceId' => $this->DeviceId,
            'Anteil' => $this->Anteil,
        ]);

        $query->andFilterWhere(['like', 'Gruppe', $this->Gruppe])
            ->andFilterWhere(['like', 'DeviceName', $this->DeviceName]);

        return $dataProvider;
    }
}
