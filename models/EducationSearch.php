<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Education;

/**
 * EducationSearch represents the model behind the search form of `app\models\Education`.
 */
class EducationSearch extends Education
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'grade'], 'integer'],
            [['school', 'school_image', 'school_url', 'degree', 'description', 'start_year', 'end_year', 'created_at', 'updated_at'], 'safe'],
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
        $query = Education::find();

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
            'grade' => $this->grade,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'school_image', $this->school_image])
            ->andFilterWhere(['like', 'school_url', $this->school_url])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'start_year', $this->start_year])
            ->andFilterWhere(['like', 'end_year', $this->end_year]);

        return $dataProvider;
    }
}
