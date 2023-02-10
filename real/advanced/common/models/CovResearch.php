<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 孙家宜 1810756,202005010
 * 由gii生成
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cov_research}}".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $summary
 * @property string|null $url
 * @property string|null $date
 * @property string|null $image
 */
class CovResearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cov_research}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'string'],
            [['title', 'url', 'date'], 'string', 'max' => 255],
            [['summary'], 'string', 'max' => 1000],
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
     * @return CovResearchQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CovResearchQuery(get_called_class());
    }
}
