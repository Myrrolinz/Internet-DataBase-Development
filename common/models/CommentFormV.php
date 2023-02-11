<?php
/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen,20230209
 * video评论相关
 */
namespace common\models;

use Yii;
use yii\base\Model;

class CommentFormV extends Model{
    public $comment;

    public function rules(){
        return [
            [['comment'],'required'],
            [['comment'],'string','length'=>[3,250]]
        ];
    }

    public function saveComment($video_id)
    {
        $comment = new Comment;
        $comment->text = $this->comment;
        $comment->user_id = Yii::$app->user->id;
        $comment->video_id = $video_id;
       // $comment->article_id= 0;
        $comment->status = 0;
        $comment->date = date('Y-m-d');
        return $comment->save();

    }
}