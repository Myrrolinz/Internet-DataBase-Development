<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * 地图
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
 * @property string $event
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
            'event' => 'Event',
            'confirm' => 'Confirm',
            'cured' => 'Cured',
            'death' => 'Death',
        ];
    }
}
