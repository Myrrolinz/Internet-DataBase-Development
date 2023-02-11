<?php

/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen,20230209
 * This is the  controller of video
 */


namespace frontend\controllers;


use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use common\models\Video;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use common\models\VideoLike;
use common\models\VideoView;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use common\models\CommentFormV;

class VideoController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['like', 'dislike', 'history'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
            'verb' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'like' => ['post'],
                    'dislike' => ['post'],
                ]
            ]
        ];
    }


    public function actionUpdate($id)
    {
        $this->layout='video';
        $model = $this->findModel($id);

        $model->thumbnail = UploadedFile::getInstanceByName('thumbnail');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['update', 'id' => $model->video_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $this->layout='video';
        $model = new Video();

        $model->video = UploadedFile::getInstanceByName('video');

        if (Yii::$app->request->isPost && $model->save()) {
            return $this->redirect(['update', 'id' => $model->video_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }



    public function actionSearch($keyword){
        $this->layout = 'video';
        $query = Video::find()
            ->with('createdBy')
            ->published()
            ->latest();
        if ($keyword) {
            $query->byKeyword($keyword);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('search', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionIndex(){
        $this->layout='video';
        $dataProvider=new ActiveDataProvider([
            'query'=>Video::find()->published()->latest(),
            'pagination'=>[
                'pageSize'=>6
            ]
        ]);
        return $this->render('index',[
            'dataProvider'=>$dataProvider
        ]);
    }

    public function actionView($id)
    {
        $this->layout = 'main';
        $video = $this->findVideo($id);

        $videoView = new VideoView();
        $videoView->video_id = $id;
        $videoView->user_id = \Yii::$app->user->id;
        $videoView->created_at = time();
        $videoView->save();

        $comments=$video->getVideoComments();
        $commentForm= new CommentFormV();

        $similarVideos = Video::find()
            ->published()
            ->byKeyword($video->title)
            ->andWhere(['NOT', ['video_id' => $id]])
            ->limit(10)
            ->all();

        return $this->render('view', [
            'model' => $video,
            'similarVideos' => $similarVideos,
            'comments'=>$comments,
            'commentForm'=>$commentForm
        ]);
    }

    public function actionLike($id){
        $video = $this->findVideo($id);
        $userId = \Yii::$app->user->id;

        $videoLikeDislike = VideoLike::find()
            ->userIdVideoId($userId, $id)
            ->one();
        if (!$videoLikeDislike) {
            $this->saveLikeDislike($id, $userId, VideoLike::TYPE_LIKE);
        } else if ($videoLikeDislike->type == VideoLike::TYPE_LIKE) {
            $videoLikeDislike->delete();
        } else {
            $videoLikeDislike->delete();
            $this->saveLikeDislike($id, $userId, VideoLike::TYPE_LIKE);
        }

        return $this->renderAjax('buttons', [
            'model' => $video
        ]);
    }

    public function actionDislike($id){
        $video = $this->findVideo($id);
        $userId = \Yii::$app->user->id;

        $videoLikeDislike = VideoLike::find()
            ->userIdVideoId($userId, $id)
            ->one();
        if (!$videoLikeDislike) {
            $this->saveLikeDislike($id, $userId, VideoLike::TYPE_DISLIKE);
        } else if ($videoLikeDislike->type == VideoLike::TYPE_DISLIKE) {
            $videoLikeDislike->delete();
        } else {
            $videoLikeDislike->delete();
            $this->saveLikeDislike($id, $userId, VideoLike::TYPE_DISLIKE);
        }

        return $this->renderAjax('buttons', [
            'model' => $video
        ]);
    }



    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['myvideo']);
    }

    public function actionMyvideo(){
        $this->layout='video';
        $dataProvider = new ActiveDataProvider([
            'query' => Video::find()->creator(Yii::$app->user->id)->latest(),
        ]);

        return $this->render('myvideo', [
            'dataProvider' => $dataProvider,
        ]);
    }

    protected function findVideo($id)
    {
        $video = Video::findOne($id);
        if (!$video) {
            throw new NotFoundHttpException("Video does not exit");
        }

        return $video;
    }

    protected function saveLikeDislike($videoId, $userId, $type)
    {
        $videoLikeDislike = new VideoLike();
        $videoLikeDislike->video_id = $videoId;
        $videoLikeDislike->user_id = $userId;
        $videoLikeDislike->type = $type;
        $videoLikeDislike->created_at = time();
        $videoLikeDislike->save();
    }
    protected function findModel($id)
    {
        if (($model = Video::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionComment($id)
    {
        $model = new CommentFormV();
        
        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id))
            {
                Yii::$app->getSession()->setFlash('comment', 'Your comment will be added soon!');
                return $this->redirect(['video/view','id'=>$id]);
            }
        }
    }
    

}