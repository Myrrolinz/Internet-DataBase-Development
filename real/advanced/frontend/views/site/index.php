<?php
use common\models\Visit;
use yii\helpers\Url;
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200505 & 徐云凯 1713667
 * This is the home page of frontend web
 */
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

$url = Yii::getAlias("@web") . '/img/';

$this->title = '疫情资料站';
?>
<div class="site-index">

    <!-- 下面第3行是疫情地图的占位符！！！！！！！注意别删了！！！！ -->
    <!-- 下面第2行是疫情地图的占位符！！！！！！！注意别删了！！！！ -->
    <!-- 下面这行是疫情地图的占位符！！！！！！！注意别删了！！！！ -->
    <div id="plague-map"></div>

    <section class="slider"></section>
    <div class="container">
        <div class="card-carousel">
            <div class="card" id="1">
                <div class="sliderThumb" style=" background:url(<?= $url ?>kewadi.png) 50% 50% no-repeat; background-size:cover;height:60%;width:100%">

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
                <div class="sliderThumb" style=" background:url(<?= $url ?>feizhou.png) 50% 50% no-repeat; background-size:cover;height:60%;width:100%">
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
                <div class="sliderThumb" style=" background:url(<?= $url ?>meiguo.png) 50% 50% no-repeat; background-size:cover;height:60%;width:100%">

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
                <div class="sliderThumb" style=" background:url(<?= $url ?>shiwei.png) 50% 50% no-repeat; background-size:cover;height:60%;width:100%">

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
                <div class="sliderThumb" style="background: url(<?= $url ?>mei.png) 50% 50% no-repeat;background-size:cover;height:60%;width:100%" <div class="sliderCaption">
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
