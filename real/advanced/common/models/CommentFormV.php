<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200509
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