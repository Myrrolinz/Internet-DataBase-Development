<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 徐云凯 1713667
 * 疫情地图数据实体类
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "covid_map".
 *
 * @property int $id
 * @property int $pid
 * @property string $date
 * @property string $placename
 * @property int|null $confirm
 * @property int|null $cured
 * @property int|null $death
 */
class CovidMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'covid_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid', 'date', 'placename'], 'required'],
            [['pid', 'confirm', 'cured', 'death'], 'integer'],
            [['date'], 'safe'],
            [['placename'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'date' => 'Date',
            'placename' => 'Placename',
            'confirm' => 'Confirm',
            'cured' => 'Cured',
            'death' => 'Death',
        ];
    }
}
