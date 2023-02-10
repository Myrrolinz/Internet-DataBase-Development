<?php

use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::cssFile('@web/public/css/media_query.css') ?>

<?= Html::cssFile('@web/public/css/animate.css') ?>
<?= Html::cssFile('@web/public/css/owl.carousel2.css') ?>
<?= Html::cssFile('@web/public/css/owl.theme.default.css') ?>
<?= Html::cssFile('@web/public/css/style_1.css') ?>

<div class="main-content">
    <div class="container-fluid paddding mb-5">
        <div class="row mx-0">
        
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                <div class="fh5co_suceefh5co_height"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($news1->image).'"/>';?>
                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                    <div class="fh5co_suceefh5co_height_position_absolute_font">
                        <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?= $news1->pubDate ?>
                            </a></div>
                        <div class=""><a href="<?= $news1->sourceUrl ?>" class="fh5co_good_font"><?= $news1->title ?> </a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?php foreach ($news2 as $news) : ?>
                        <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                            <div class="fh5co_suceefh5co_height_2"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($news->image).'"/>';?>
                                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?= $news->pubDate ?></a></div>
                                    <div class=""><a href="<?= $news->sourceUrl ?>" class="fh5co_good_font_2"> <?= $news->title ?> </a></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">最近</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                <?php foreach ($news3 as $news) : ?>
                    <div class="item px-2">
                        <div class="fh5co_latest_trading_img_position_relative">
                            <div class="fh5co_latest_trading_img"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($news->image).'" class="fh5co_img_special_relative" />';?> </div>
                            <div class="fh5co_latest_trading_img_position_absolute"></div>
                            <div class="fh5co_latest_trading_img_position_absolute_1">
                                <a href="<?= $news->sourceUrl ?>" class="text-white"> <?= $news->title ?> </a>
                                <div class="fh5co_latest_trading_date_and_name_color"> <?= $news->infoSource ?> - <?= $news->pubDate ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container-fluid fh5co_video_news_bg pb-4">
            <div class="container animate-box" data-animate-effect="fadeIn">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4 ">Video News</div>
                </div>
                <div>

                    <div class="owl-carousel owl-theme" id="slider3">
                        <?php foreach ($videos as $video) : ?>
                            <div class="item px-2">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_hover_news_img_video_tag_position_relative">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video class="embed-responsive-item" poster="<?php echo $video->getThumbnailLink() ?>" src="<?php echo $video->getVideoLink() ?>" controls></video>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                            <span class=""><?= $video->title ?> </span></a>
                                        <div class="c_g"><i class="fa fa-clock-o"></i> <?= $video->created_by ?> - <?= Yii::$app->formatter->asRelativeTime($video->created_at) ?> </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-10 animate-box" data-animate-effect="fadeInLeft">
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">更多</div>
                        </div>
                        <?php foreach ($news4 as $news) : ?>
                            <div class="row pb-4">
                                <div class="col-md-5">
                                    <div class="fh5co_hover_news_img">
                                        <div class="fh5co_news_img"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($news->image).'" />';?></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="col-md-7 animate-box">
                                    <a href="<?= $news->sourceUrl ?>" class="fh5co_magna py-2"> <?= $news->title ?> </a> <a href="<?= $news->sourceUrl ?>" class="fh5co_mini_time py-3"> <?= $news->infoSource ?> -
                                        <?= $news->pubDate ?> </a>
                                    <div class="fh5co_consectetur"> <?= $news->summary ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>
                <div class="text-center">
                <?php echo LinkPager::widget([
                    'pagination' => $pagination,
                ]); ?>        
            </div>
                
                
            </div>
           
        </div>
        
    </div>
    