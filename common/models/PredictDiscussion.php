<?php
/**
 * Team:ddl驱动队,NKU
 * coding by ZhuLu 2013635,20230207
 * Predict and Discussion相关
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%predict_discussion}}".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $summary
 * @property string|null $url
 * @property string|null $date
 * @property string|null $image
 */
class PredictDiscussion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%predict_discussion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'string'],
            [['title', 'url', 'date'], 'string', 'max' => 255],
            [['summary'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'summary' => 'Summary',
            'url' => 'Url',
            'date' => 'Date',
            'image' => 'Image',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PredictDiscussionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PredictDiscussionQuery(get_called_class());
    }
}
