<?php

/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen,20230209
 * video channel相关
 */
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\View;

/** @var $this View */
/** @var $channel User */
/**@var $dataProvider ActiveDataProvider */
?>

    <div class="jumbotron">
        <h1 class="display-4"><?php echo $channel->username ?></h1>
        <hr class="my-4">
        <?php \yii\widgets\Pjax::begin() ?>
        <?php echo $this->render('subscribe', [
            'channel' => $channel
        ]) ?>
        <?php \yii\widgets\Pjax::end() ?>
    </div>

<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '@frontend/views/video/video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>