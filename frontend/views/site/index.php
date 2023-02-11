<?php
use common\models\Visit;
use yii\helpers\Url;
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * home页面
 */
use yii\helpers\Html;
use yii\data\Pagination;
use yii\web\Response;
use yii\web\Controller;
use yii\widgets\LinkPager;

use frontend\models\Timeline;
?>

<?php
/* @var $this yii\web\View */
$this->registerCssFile('@web/css/home.css');
$this->registerJsFile('@web/js/home.js');


$this->registerCssFile('@web/css/leaflet.css');
$this->registerCssFile('@web/css/plague-map.css');
$this->registerJsFile("@web/js/jquery-3.4.1.min.js");
$this->registerJsFile("@web/js/leaflet.js");
$this->registerJsFile("@web/js/plague-map.js");

$this->registerCssFile('@web/css/timeline.css');
$this->registerJsFile('@web/js/timeline.js');
$this->registerCssFile('@web/css/timeline.min.css');
$this->registerJsFile('@web/js/timeline.min.js');


$this->registerCssFile('@web/css/animate.min.css');
$this->registerJsFile('@web/js/jquery-3.4.1.min.js');

$url = Yii::getAlias("@web") . '/img/';

$this->title = '俄乌战争资料站';
?>



<div class="site-index">

    <!-- 下面第3行是疫情地图的占位符！！！！！！！注意别删了！！！！ -->
    <!-- 下面第2行是疫情地图的占位符！！！！！！！注意别删了！！！！ -->
    <!-- 下面这行是疫情地图的占位符！！！！！！！注意别删了！！！！ -->
    <div id="plague-map"></div>



    <div class="form-group">
			<?= Html::submitButton('点击查看俄乌冲突时间线', ['class' => 'sbtn', 'name' => 'login-button', 'onclick'=>'window.open("site/timeline")' ]) ?>
	</div>
		<style type="text/css">
			.sbtn {
				top: 50px;
				left: 550px;
				position: relative;
				width: 250px;
				height: 50px;
				background: white;
				color:#000;
				border: 5px solid white;
				box-shadow: 0px 0px 10px 5px #aaa;
				border-radius: 30px;
				transition: .5s;
				display: flex;

                font-size: 20px;
                line-height:40px;
			}

			.sbtn:hover {
				background-color: #c55;
				color: white;
				border: 5px solid white;
				display: flex;
			}

		</style>



    <section class="slider"></section>
    <div class="container">
        <div class="card-carousel">
            <div class="card" id="1">
                <div class="sliderThumb" style=" background:url(<?= $url ?>7.jpg) 50% 50% no-repeat; background-size:cover;height:60%;width:100%">

                </div>
                <div class="sliderCaption" style="text-align:center;padding:20px 20px 0px">
                    <a href="<?= $news[0]->sourceUrl ?>" style="font-size: 22px;font-weight:600;color:#4a0d66"><?=$news[0]->title?></a>
                    <p style="font-size: 0.8rem;padding-top: 10px;"><?=$news[0]->summary?></p>
                    <p>
                        <a href="<?=Url::toRoute(['news/index']);?>" class="btn btn-secondary">更多新闻</a>
                    </p>
                </div>
            </div>
            <div class="card" id="2">
                <div class="sliderThumb" style=" background:url(<?= $url ?>8.jpg) 50% 50% no-repeat; background-size:cover;height:60%;width:100%">
                </div>
                <div class="sliderCaption">
                    <a href="<?= $news[2]->sourceUrl ?>" style="font-size: 22px;font-weight:600;color:#4a0d66"><?=$news[2]->title?></a>
                    <p style="font-size: 0.8rem;padding-top: 10px;"><?=$news[2]->summary?></p>
                    <p>
                        <a href="<?=Url::toRoute(['news/index']);?>" class="btn btn-secondary">更多新闻</a>
                    </p>
                </div>
            </div>
            <div class="card" id="3">
                <div class="sliderThumb" style=" background:url(<?= $url ?>9.jpg) 50% 50% no-repeat; background-size:cover;height:60%;width:100%">

                </div>
                <div class="sliderCaption">
                    <a href="<?= $news[3]->sourceUrl ?>" style="font-size: 22px;font-weight:600;color:#4a0d66"><?=$news[3]->title?></a>
                    <p style="font-size: 0.8rem;padding-top: 10px;"><?=$news[3]->summary?></p>
                    <p>
                        <a href="<?=Url::toRoute(['news/index']);?>" class="btn btn-secondary">更多新闻</a>
                    </p>
                </div>
            </div>
            <div class="card" id="4">
                <div class="sliderThumb" style=" background:url(<?= $url ?>10.jpg) 50% 50% no-repeat; background-size:cover;height:60%;width:100%">

                </div>
                <div class="sliderCaption">
                    <a href="<?= $news[4]->sourceUrl ?>" style="font-size: 22px;font-weight:600;color:#4a0d66"><?=$news[4]->title?></a>
                    <p style="font-size: 0.8rem;padding-top: 10px;"><?=$news[4]->summary?></p>
                    <p>
                        <a href="<?=Url::toRoute(['news/index']);?>" class="btn btn-secondary">更多新闻</a>
                    </p>
                </div>
            </div>
            <div class="card" id="5">
                <div class="sliderThumb" style="background: url(<?= $url ?>11.jpg) 50% 50% no-repeat;background-size:cover;height:60%;width:100%" <div class="sliderCaption">
                </div>
                <div class="sliderCaption">
                    <a href="<?= $news[5]->sourceUrl ?>" style="font-size: 22px;font-weight:600;color:#4a0d66"><?=$news[5]->title?></a>
                    <p style="font-size: 0.8rem;padding-top: 10px;"><?=$news[5]->summary?></p>
                    <p>
                        <a href="<?=Url::toRoute(['news/index']);?>" class="btn btn-secondary">更多新闻</a>
                    </p>
                </div>
            </div>
        </div>
        <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
    </div>
</div>
