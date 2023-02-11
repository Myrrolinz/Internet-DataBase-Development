<?php
/**
 * Team:ddl驱动队,NKU
 * coding by ZhuLu 2013635,20230209
 * coding by sunyiqi 2012810,20230210
 * 时间线相关
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Timeline;

/**
 * TimelineSearch represents the model behind the search form of `frontend\models\Timeline`.
 */
class TimelineSearch extends Timeline
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['date', 'event', 'url'], 'safe'],
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
        $query = Timeline::find();

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

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'event', $this->event])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
