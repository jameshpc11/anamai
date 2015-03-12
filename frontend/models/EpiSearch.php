<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Epi;

/**
 * EpiSearch represents the model behind the search form about `frontend\models\Epi`.
 */
class EpiSearch extends Epi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOSPCODE', 'PID', 'SEQ', 'DATE_SERV', 'VACCINETYPE', 'VACCINEPLACE', 'PROVIDER', 'D_UPDATE'], 'safe'],
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
        $query = Epi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'DATE_SERV' => $this->DATE_SERV,
            'D_UPDATE' => $this->D_UPDATE,
        ]);

        $query->andFilterWhere(['like', 'HOSPCODE', $this->HOSPCODE])
            ->andFilterWhere(['like', 'PID', $this->PID])
            ->andFilterWhere(['like', 'SEQ', $this->SEQ])
            ->andFilterWhere(['like', 'VACCINETYPE', $this->VACCINETYPE])
            ->andFilterWhere(['like', 'VACCINEPLACE', $this->VACCINEPLACE])
            ->andFilterWhere(['like', 'PROVIDER', $this->PROVIDER]);

        return $dataProvider;
    }
}
