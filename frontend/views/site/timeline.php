<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230209
 * coding by ZhuLu 2013635,20230209
 * 时间线页面
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


$this->registerCssFile('@web/css/animate.min.css');
$this->registerJsFile('@web/js/jquery-3.4.1.min.js');


?>

<?php echo Html::cssFile('@web/css/default.css'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<link href="@web/css/timeline.min.css" rel="stylesheet" />
	<link href="@web/css/animate.min.css" rel="stylesheet" type="text/css"/>
	<style>

	.timeline__content {
	position: relative;
	color: #c55;
	}
	.timeline__item::after {
	
	border-color: #c55;
	}

	p {
        font-size: 45px;
        position: relative;
		color: #000;
    }
	</style>
	
</head>

<body>


<script src="../../../frontend/web/js/timeline.min.js"></script>
<script src="../../../frontend/web/js/jquery-3.4.1.min.js"></script>
</body>


  <p>俄乌冲突时间线</p>



<div class="timeline">
  <div class="timeline__wrap">
    <div class="timeline__items">

	<?php $count = Timeline::find()->count(); $pagination = new Pagination(['totalCount' => $count,'pageSize' => 20]);
							$articles = Timeline::find()->offset($pagination->offset)->limit($pagination->limit)->all();?>

	<?php foreach ($articles as $Timeline) : ?>
		<div class="timeline__item" onclick='window.open("<?= Html::encode("{$Timeline->url}") ?>")'>

        	<div class="timeline__content">
			<?= Html::encode("·{$Timeline->date}·{$Timeline->event}") ?>
			</div>
		</div>
		
	<?php endforeach; ?>
    </div>
  </div>
</div>


<script type="text/javascript">
	$(".timeline").addClass("animate__animated animate__fadeIn");
</script>
</html>