<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%timeline}}".
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $event
 */
class Timeline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%timeline}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['date'], 'safe'],
            [['event'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'event' => 'Event',
        ];
    }
}
