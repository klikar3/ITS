<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RzReport;

/**
 * RzReportSearch represents the model behind the search form of `app\models\RzReport`.
 */
class RzReportSearch extends RzReport
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Rid', 'Wartung', 'Intern', 'Freigegeben', 'Externe_betroffen', 'SLA_betroffen', 'Wiedervorlage'], 'integer'],
            [['System', 'von', 'bis', 'von_ausw', 'bis_ausw', 'Kunde', 'Betroffen', 'Standort', 'Prio', 'Schwere', 'Beschreibung', 'Aktion', 'Loesung', 'Author', 'Korrektor'], 'safe'],
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
        $query = RzReport::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
      			'sort'=>[
      				'defaultOrder'=> ['Wiedervorlage'=> SORT_DESC, 'von' => SORT_DESC],
      			],
      			'pagination'=>[
      				'pageSize'=>25
      			],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Rid' => $this->Rid,
            'von' => $this->von,
            'bis' => $this->bis,
            'von_ausw' => $this->von_ausw,
            'bis_ausw' => $this->bis_ausw,
            'Wartung' => $this->Wartung,
            'Intern' => $this->Intern,
            'Freigegeben' => $this->Freigegeben,
            'Externe_betroffen' => $this->Externe_betroffen,
            'SLA_betroffen' => $this->SLA_betroffen,
            'Wiedervorlage' => $this->Wiedervorlage,
        ]);

        $query->andFilterWhere(['like', 'System', $this->System])
            ->andFilterWhere(['like', 'Kunde', $this->Kunde])
            ->andFilterWhere(['like', 'Betroffen', $this->Betroffen])
            ->andFilterWhere(['like', 'Standort', $this->Standort])
            ->andFilterWhere(['like', 'Prio', $this->Prio])
            ->andFilterWhere(['like', 'Schwere', $this->Schwere])
            ->andFilterWhere(['like', 'Beschreibung', $this->Beschreibung])
            ->andFilterWhere(['like', 'Aktion', $this->Aktion])
            ->andFilterWhere(['like', 'Loesung', $this->Loesung])
            ->andFilterWhere(['like', 'Author', $this->Author])
            ->andFilterWhere(['like', 'Korrektor', $this->Korrektor]);

        return $dataProvider;
    }
}
