<?php



/** @var $dataProvider ActiveDataProvider */

use yii\data\ActiveDataProvider;
use yii\helpers\Url;

?>
<div class="container">
<form action="<?php echo Url::to(['/blog/search']) ?>"
          class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search"
               name="keyword"
               value="<?php echo Yii::$app->request->get('keyword') ?>">
        <button ><i class="fa fa-search"></i></button>
    </form>
    <h1>Found videos</h1>
</div>

<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'blog_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>