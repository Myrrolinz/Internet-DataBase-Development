<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200509
 */

namespace common\models;
$formatter = \Yii::$app->formatter;

use common\models\User;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $content
 * @property string|null $date
 * @property string|null $image
 * @property int|null $viewed
 * @property int|null $created_by
 * @property int|null $status
 * @property int|null $category_id
 * @property User $createdBy
 * @property ArticleTag[] $articleTags
 * @property Comment[] $comments
 */
class Article extends \yii\db\ActiveRecord
{
    const STATUS_UNLISTED=0;
    const STATUS_PUBLISHED=1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    public function behaviors()
    {
        return [
            [
                'class'=>BlameableBehavior::class,
                'updatedByAttribute'=>false
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title', 'description', 'content'], 'string'],
            [['date'], 'default', 'value' => date('Y-m-d')],
            [['title'], 'string', 'max' => 255],
            ['status','default','value'=>self::STATUS_UNLISTED],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
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
            'description' => 'Description',
            'content' => 'Content',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'created_by' => 'User ID',
            'status' => 'Status',
            'category_id' => 'Category ID',
        ];
    }

    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        $imgurl = ($this->image) ? '../../../frontend/web/uploads/' . $this->image : '../../../frontend/web/img/no-image.png';
        return $imgurl;
    }



    public function getStatusLabels()
    {
        return [
            self::STATUS_UNLISTED => 'Unlisted',
            self::STATUS_PUBLISHED => 'Published',
        ];
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete();
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function saveCategory($category_id)
    {
        $category = Category::findOne($category_id);
        if ($category != null) {
            $this->link('category', $category);
            return true;
        }

        $this->link('category', $category);
    }

    public static function getAll($pageSize = 5)
    {
        
        $query = Article::find()->published()->latest();

    
        $count = $query->count();


        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>$pageSize]);

  
        $articles = $query
        ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        
        $data['articles'] = $articles;
        $data['pagination'] = $pagination;
        return $data;
    }

    public function getDate(){
        return Yii::$app->formatter->asDate($this->date); 
    }

    public static function Popular()
    {
        return Article::find()->published()->orderBy('viewed desc')->limit(3)->all();
    }
    
    public static function Recent()
    {
        return Article::find()->published()->orderBy('date asc')->limit(4)->all();
    }

    public function ArticleComments()
    {
        return $this->getComments()->where(['status'=>1])->all();
    }
    /**
     * {@inheritdoc}
     * @return ArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticleQuery(get_called_class());
    }

    public function getComments(){
        return $this->hasMany(Comment::className(),['article_id'=>'id']);
    }

    public function publish()
    {
        $this->status = self::STATUS_PUBLISHED;
        return $this->save(false);
    }

    public function viewedCounter(){
        $this->viewed +=1;
        return $this->save(false);
    }
}
