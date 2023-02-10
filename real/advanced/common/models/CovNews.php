<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 孙家宜 1810756,202005010
 * 由gii生成
 */

namespace common\models;
use yii\data\Pagination;

use Yii;

/**
 * This is the model class for table "{{%cov_news}}".
 *
 * @property int $id
 * @property string|null $pubDate
 * @property string|null $title
 * @property string|null $summary
 * @property string|null $infoSource
 * @property string|null $sourceUrl
 * @property string|null $image
 */
class CovNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cov_news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'string'],
            [['pubDate', 'title', 'infoSource', 'sourceUrl'], 'string', 'max' => 255],
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
            'pubDate' => 'Pub Date',
            'title' => 'Title',
            'summary' => 'Summary',
            'infoSource' => 'Info Source',
            'sourceUrl' => 'Source Url',
            'image' => 'Image',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CovNewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CovNewsQuery(get_called_class());
    }
    
    public static function getAll($pageSize = 5)
    {
        
        $query = CovNews::find()->latest();

    
        $count = $query->count();


        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>$pageSize]);

  
        $news = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        
        $data['news'] = $news;
        $data['pagination'] = $pagination;
        
        return $data;
    }

}
