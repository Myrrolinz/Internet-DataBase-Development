<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230201
 * coding by ZhuLu 2013635,20230207
 */



/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\data\Pagination;
use yii\web\Response;
use yii\web\Controller;
use yii\helpers\Url;
use yii\widgets\LinkPager;

use frontend\models\Timeline;

$this->title = 'Timeline';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile('@web/css/timeline.css');
$this->registerJsFile('@web/js/timeline.js');
$this->registerCssFile('@web/css/timeline.min.css');
$this->registerJsFile('@web/js/timeline.min.js');


?>

<?php echo Html::cssFile('@web/css/default.css'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<link href="@/web/css/timeline.min.css" rel="stylesheet" />
	<style>
	.timeline__content {
	position: relative;
	color: #c55;
	}
	</style>
	
</head>

<body>


<script src="../../../frontend/web/js/timeline.min.js"></script>
</body>
<div class="timeline">
  <div class="timeline__wrap">
    <div class="timeline__items">

	<?php $count = Timeline::find()->count(); $pagination = new Pagination(['totalCount' => $count,'pageSize' => 20]);
							$articles = Timeline::find()->offset($pagination->offset)->limit($pagination->limit)->all();?>

	<?php foreach ($articles as $Timeline) : ?>

      <div class="timeline__item">
        <div class="timeline__content">
		<date></date>
		<?= Html::encode("·{$Timeline->date}·{$Timeline->event}") ?>
        </div>
      </div>

	  <?php endforeach; ?>
    </div>
  </div>
</div>

</html>