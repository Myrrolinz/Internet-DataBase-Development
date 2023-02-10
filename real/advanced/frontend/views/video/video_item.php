<?php

use common\models\Video;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $model Video */
?>

<div class="card m-3" style="width: 20rem;">
    <a href="<?php echo Url::to(['/video/view', 'id' => $model->video_id]) ?>">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   src="<?php echo $model->getVideoLink() ?>"></video>
        </div>
    </a>
    <div class="card-bod p-2">
        <h6 class="card-title m-0"><?php echo $model->title ?></h6>
        <p class="text-muted card-text m-0">
            <?php echo Html::a($model->createdBy->username,[
                '/channel/view','username'=>$model->createdBy->username
            ]) ?>
        </p>
        <p class="text-muted card-text m-0">
            <?php echo $model->getViews()->count() ?> views .
            <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
    </div>
</div>