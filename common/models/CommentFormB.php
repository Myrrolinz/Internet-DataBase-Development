<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * blog评论相关
 */

namespace common\models;

use Yii;
use yii\base\Model;

class CommentFormB extends Model{
    public $comment;

    public function rules(){
        return [
            [['comment'],'required'],
            [['comment'],'string','length'=>[3,250]]
        ];
    }

    public function saveComment($article_id)
    {
        $comment = new Comment;
        $comment->text = $this->comment;
        $comment->user_id = Yii::$app->user->id;
        $comment->article_id = $article_id;
        //$comment->video_id='null';
        $comment->status = 0;
        $comment->date = date('Y-m-d');
        return $comment->save();

    }
}