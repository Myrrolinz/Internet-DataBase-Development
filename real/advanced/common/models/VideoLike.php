<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200504
 */

namespace common\models;

use common\models\query\VideoLikeQuery;
use common\models\query\VideoQuery;
use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "{{%video_like}}".
 *
 * @property int $id
 * @property string $video_id
 * @property int $user_id
 * @property int|null $type
 * @property int|null $created_at
 *
 * @property User $user
 * @property Video $video
 */
class VideoLike extends \yii\db\ActiveRecord
{
    const TYPE_LIKE=1;
    const TYPE_DISLIKE=0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%video_like}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['video_id', 'user_id'], 'required'],
            [['user_id', 'type', 'created_at'], 'integer'],
            [['video_id'], 'string', 'max' => 16],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['video_id'], 'exist', 'skipOnError' => true, 'targetClass' => Video::className(), 'targetAttribute' => ['video_id' => 'video_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'video_id' => 'Video ID',
            'user_id' => 'User ID',
            'type' => 'Type',
            'created_at' => 'Created At',
        ];
    }

//    /**
//     * Gets query for [[User]].
//     *
//     * @return ActiveQuery|\common\models\query\UserQuery
//     */
//    public function getUser()
//    {
//        return $this->hasOne(User::className(), ['id' => 'user_id']);
//    }

    /**
     * Gets query for [[Video]].
     *
     * @return ActiveQuery|VideoQuery
     */
    public function getVideo()
    {
        return $this->hasOne(Video::className(), ['video_id' => 'video_id']);
    }

    /**
     * {@inheritdoc}
     * @return VideoLikeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VideoLikeQuery(get_called_class());
    }
}
