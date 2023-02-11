<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302009
 * coding by ZhuLu 2013635,20230209
 * timeline的model
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%timeline}}".
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $event
 * @property string|null $url
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
            [['url'], 'string', 'max' => 255]
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
            'url' => 'Url'
        ];
    }
}
