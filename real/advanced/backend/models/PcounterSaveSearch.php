<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 袁嘉蔚 1810546,20200509
 * a model for Pcountersavesearch
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PcounterSave;

/**
 * PcounterSaveSearch represents the model behind the search form of `common\models\PcounterSave`.
 */
class PcounterSaveSearch extends PcounterSave
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['save_name'], 'safe'],
            [['save_value'], 'integer'],
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
        $query = PcounterSave::find();

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
            'save_value' => $this->save_value,
        ]);

        $query->andFilterWhere(['like', 'save_name', $this->save_name]);

        return $dataProvider;
    }
}
