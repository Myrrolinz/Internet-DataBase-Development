<?php

use common\models\Video;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\User;
$this->title = 'Video View';
$this->params['breadcrumbs'][] = $this->title;

/** @var $model Video */
/** @var $similarVideos Video[] */

?>




<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" poster="<?php echo $model->getThumbnailLink() ?>" src="<?php echo $model->getVideoLink() ?>" controls></video>
        </div>
        <h6 class="mt-2"><?php echo $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <?php echo $model->getViews()->count() ?> views •
                <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
            </div>
            <div>
                <?php \yii\widgets\Pjax::begin() ?>
                <?php echo $this->render('buttons', [
                    'model' => $model
                ]) ?>
                <?php \yii\widgets\Pjax::end() ?>
            </div>
        </div>
        <div>
            <p><?php echo Html::a($model->createdBy->username, [
                    '/channel/view', 'username' => $model->createdBy->username
                ]) ?></p>
            <?php echo Html::encode($model->description) ?>
        </div>

        <?php if (!Yii::$app->user->isGuest) : ?>
            <div class="leave-comment">
                <!--leave comment-->
                <h4>快来评论吧~</h4>
                <?php if (Yii::$app->session->getFlash('comment')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= Yii::$app->session->getFlash('comment'); ?>
                    </div>
                <?php endif; ?>
                <?php $form = \yii\widgets\ActiveForm::begin([
                    'action' => ['video/comment', 'id' => $model->video_id],
                    'options' => ['class' => 'form-horizontal contact-form', 'role' => 'form']
                ]) ?>
                <div class="form-group">
                    <div class="col-md-12">
                        <?= $form->field($commentForm, 'comment')->textarea(['class' => 'form-control', 'placeholder' => '留下你的足迹'])->label(false) ?>
                    </div>
                </div>
                <button type="submit" class="btn send-btn">发表评论</button>
                <?php \yii\widgets\ActiveForm::end(); ?>
            </div>
            <!--end leave comment-->
        <?php endif; ?>
        <?php if (!empty($comments)) : ?>
            <?php foreach ($comments as $comment) : ?>
                <div class="bottom-comment">
                                <!--bottom comment-->
                                <?php $user_id=$comment->user_id?>
                                
                                <?php $user=User::find()->where(['id'=>$user_id])->one()?>
                                
                                <div class="comment-img">
                                    <?= \cebe\gravatar\Gravatar::widget([
                                        'email' => '<?=$user->email?>',
                                        'options' => [
                                            'alt' => '<?=$user->username>',
                                            'class'=>'img-circle',
                                        ],
                                        'size' => 50,
                                        
                                    ]) ?>
                                </div>

                    <div class="comment-text">
                        <a href="#" class="replay btn pull-right"> 回复</a>
                        <h5><?= $comment->user->username; ?></h5>

                        <p class="comment-date">
                            <?= $comment->getDate(); ?>
                        </p>


                        <p class="para"><?= $comment->text; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
    <div class="col-sm-4">
        <?php foreach ($similarVideos as $similarVideo) : ?>
            <div class="media mb-3">
                <a href="<?php echo Url::to(['/video/view', 'id' => $similarVideo->video_id]) ?>">
                    <div class="embed-responsive embed-responsive-16by9 mr-2" style="width: 120px">
                        <video class="embed-responsive-item" poster="<?php echo $similarVideo->getThumbnailLink() ?>" src="<?php echo $similarVideo->getVideoLink() ?>"></video>
                    </div>
                </a>
                <div class="media-body">
                    <h6 class="m-0"><?php echo $similarVideo->title ?></h6>
                    <div class="text-muted">
                        <p class="m-0">
                            <?php echo $model->channelLink($similarVideo->createdBy) ?>
                        </p>
                        <small>
                            <?php echo $similarVideo->getViews()->count() ?> views •
                            <?php echo Yii::$app->formatter->asRelativeTime($similarVideo->created_at) ?>
                        </small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>