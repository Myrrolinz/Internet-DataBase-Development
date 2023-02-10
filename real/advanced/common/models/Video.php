<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200504
 */

namespace common\models;

//use common\models\query\UserQuery;
use common\models\query\VideoQuery;
use Yii;
use yii\base\Exception;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveQuery;
use yii\helpers\FileHelper;
use yii\behaviors\TimestampBehavior;
use yii\imagine\Image;
use Imagine\Image\Box;
use yii\helpers\Url;
use yii\data\Pagination;
/**
 * This is the model class for table "{{%video}}".
 *
 * @property string $video_id
 * @property string $title
 * @property string|null $description
 * @property string|null $tags
 * @property int|null $status
 * @property int|null $has_thumbnail
 * @property string|null $video_name
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 *
 * @property User $createdBy
 * @property VideoLike[] $likes
 * @property VideoLike[] $dislikes
 */
class Video extends \yii\db\ActiveRecord
{
    const STATUS_UNLISTED=0;
    const STATUS_PUBLISHED=1;

    public $video;
    public $thumbnail;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%video}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
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
            [['video_id', 'title'], 'required'],
            [['description'], 'string'],
            [['status', 'has_thumbnail', 'created_at', 'updated_at', 'created_by'], 'integer'],
            [['video_id'], 'string', 'max' => 16],
            [['title', 'video_name'], 'string', 'max' => 255],
            [['tags'], 'string', 'max' => 512],
            [['video_id'], 'unique'],
            ['has_thumbnail','default','value'=>0],
            ['status','default','value'=>self::STATUS_UNLISTED],
            ['thumbnail','image','minWidth'=>1280],
            ['video','file','extensions'=>['mp4']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'video_id' => 'Video ID',
            'title' => 'Title',
            'description' => 'Description',
            'tags' => 'Tags',
            'status' => 'Status',
            'has_thumbnail' => 'Has Thumbnail',
            'video_name' => 'Video Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'thumbnail'=>'Thumbnail'
        ];
    }

    public function getStatusLabels()
    {
        return [
            self::STATUS_UNLISTED => 'Unlisted',
            self::STATUS_PUBLISHED => 'Published',
        ];
    }



    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    public function getViews(){
        return $this->hasMany(VideoView::class,['video_id'=>'video_id']);
    }

    public function getLikes(){
        return $this->hasMany(VideoLike::class,['video_id'=>'video_id'])->liked();
    }

    public function getDislikes(){
        return $this->hasMany(VideoLike::class,['video_id'=>'video_id'])->disliked();
    }

    public static function channelLink($user, $schema = false)
    {
        return \yii\helpers\Html::a($user->username,
            Url::to(['/channel/view', 'username' => $user->username], $schema),
            ['class' => 'text-dark']);
    }

    /**
     * {@inheritdoc}
     * @return VideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VideoQuery(get_called_class());
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        $isInsert = $this->isNewRecord;
        if ($isInsert) {
                if($this->video) {
                    try {
                        $this->video_id = Yii::$app->security->generateRandomString(8);
                    } catch (Exception $e) {
                    }
                    $this->title = $this->video->name;
                    $this->video_name = $this->video->name;
                }
        }
        if ($this->thumbnail) {
            $this->has_thumbnail = 1;
        }
        $saved = parent::save($runValidation, $attributeNames);
        if (!$saved) {
            return false;
        }
        if ($isInsert) {
            $videoPath = Yii::getAlias('@frontend/web/storage/videos/' . $this->video_id . '.mp4');
            if (!is_dir(dirname($videoPath))) {
                try {
                    FileHelper::createDirectory(dirname($videoPath));
                } catch (Exception $e) {
                }
            }
            $this->video->saveAs($videoPath);
        }
        if ($this->thumbnail) {
            $thumbnailPath = Yii::getAlias('@frontend/web/storage/thumbs/' . $this->video_id . '.jpg');
            if (!is_dir(dirname($thumbnailPath))) {
                FileHelper::createDirectory(dirname($thumbnailPath));
            }
            $this->thumbnail->saveAs($thumbnailPath);
            Image::getImagine()
                ->open($thumbnailPath)
                ->thumbnail(new Box(1280, 1280))
                ->save();
        }

        return true;
    }

    public function getVideoLink()
    {
        return Yii::getAlias('../../../frontend/web/storage/videos/' . $this->video_id . '.mp4');
    }

    public function getThumbnailLink()
    {
        return $this->has_thumbnail ?
            Yii::getAlias('../../../frontend/web/storage/thumbs/' . $this->video_id . '.jpg')
            : '';
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $videoPath = Yii::getAlias('@frontend/web/storage/videos/' . $this->video_id . '.mp4');
        unlink($videoPath);

        $thumbnailPath = Yii::getAlias('@frontend/web/storage/thumbs/' . $this->video_id . '.jpg');
        if (file_exists($thumbnailPath)) {
            unlink($thumbnailPath);
        }
    }

    public function isLikedBy($userId){
        return VideoLike::find()->userIdVideoId($userId,$this->video_id)->liked()->one();
    }

    public function isDislikedBy($userId){
        return VideoLike::find()->userIdVideoId($userId,$this->video_id)->disliked()->one();
    }

    public function getVideoComments()
    {
        return $this->getComments()->where(['status'=>1])->all();
    }

    public function getComments(){
        return $this->hasMany(Comment::className(),['video_id'=>'video_id']);
    }

    public static function getAll($pageSize = 5)
    {
        
        $query = Video::find()->published()->latest();
  
        $videos = $query
            ->limit($pageSize)
            ->all();
        
        $data['videos'] = $videos;
        
        return $data;
    }
}
