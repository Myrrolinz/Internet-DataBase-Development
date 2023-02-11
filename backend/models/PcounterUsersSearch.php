<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230207
 * 客流量相关
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PcounterUsers;

/**
 * PcounterUsersSearch represents the model behind the search form of `common\models\PcounterUsers`.
 */
class PcounterUsersSearch extends PcounterUsers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_ip'], 'safe'],
            [['user_time'], 'integer'],
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
        $query = PcounterUsers::find();

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
            'user_time' => $this->user_time,
        ]);

        $query->andFilterWhere(['like', 'user_ip', $this->user_ip]);

        return $dataProvider;
    }
}
