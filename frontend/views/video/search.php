<?php

/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen,20230209
 * This is the search of video
 */

/** @var $dataProvider ActiveDataProvider */

use yii\data\ActiveDataProvider;
use yii\helpers\Url;

?>

    <form action="<?php echo Url::to(['/video/search']) ?>"
          class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search"
               name="keyword"
               value="<?php echo Yii::$app->request->get('keyword') ?>">
        <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
    </form>
    <h1>Found videos</h1>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>