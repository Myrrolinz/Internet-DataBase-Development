<?php
/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen,20230209
 * video index
 */
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
$this->title = 'Video';
$this->params['breadcrumbs'][] = $this->title;

?>
    <form action="<?php echo Url::to(['/video/search']) ?>"
          class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search"
               name="keyword"
               value="<?php echo Yii::$app->request->get('keyword') ?>">
        <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
    </form>
    <div>分享俄乌战争的新闻故事或您对俄乌战争的看法</div>
<?php
echo \yii\widgets\ListView::widget([
    'dataProvider'=>$dataProvider,
    'pager' => [
        'class' => \yii\bootstrap4\LinkPager::class,
    ],
    'itemView'=>'video_item',
    'layout'=>'<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions'=>[
        'tag'=>false
    ]
])?>