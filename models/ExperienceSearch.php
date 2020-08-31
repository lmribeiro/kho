<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Experience;

/**
 * ExperienceSearch represents the model behind the search form of `app\models\Experience`.
 */
class ExperienceSearch extends Experience
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'current'], 'integer'],
            [['title', 'company', 'company_image', 'company_url', 'location', 'description', 'start_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Experience::find();

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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'current' => $this->current,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'company_image', $this->company_image])
            ->andFilterWhere(['like', 'company_url', $this->company_url])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
