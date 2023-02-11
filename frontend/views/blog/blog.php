<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * blog相关
 */

use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>


<?= Html::cssFile('@web/public/css/font-awesome.min.css') ?>

<?= Html::cssFile('@web/public/css/animate.min.css') ?>
<?= Html::cssFile('@web/public/css/owl.theme.css') ?>
<?= Html::cssFile('@web/public/css/owl.transitions.css') ?>
<?= Html::cssFile('@web/public/css/style.css') ?>
<?= Html::cssFile('@web/public/css/responsive.css') ?>
<?= Html::cssFile('@web/public/css/main.css') ?>
<?= Html::cssFile('@web/public/css/owl.carousel1.css') ?>
<?= Html::cssFile('@web/public/css/linearicons.css') ?>
<?= Html::cssFile('@web/public/css/themify-icons.css') ?>
<?= Html::cssFile('@web/public/css/magnific-popup.css') ?>
<?= Html::cssFile('@web/public/css/nice-select.css') ?>
<?= Html::cssFile('@web/public/css/bootstrap-datepicker.css') ?>



<link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
        rel="stylesheet"
/>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"
></script>


<div class="site-blog">
    <!--main content start-->
<div class="main-content">
<section class="home-banner-area relative">
            <div class="container-fluid">
                <div class="row">
                    <div class="owl-carousel home-banner-owl">
                        <div class="banner-img">
                            <img class="img-fluid" src="<?=Url::to('@web/uploads/w1.jpg')?>" alt="" />
                            <div class="text-wrapper">
                                <a href="#" class="d-flex">
                                    <h1>
                                        俄乌战争 <br />
                                        
                                    </h1>
                                </a>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img class="img-fluid" src="<?=Url::to('@web/uploads/w4.png')?>" alt="" />
                            <div class="text-wrapper">
                                <a href="#" class="d-flex">
                                    <h1>
                                        俄乌战争引发粮食危机<br />
                                        数百万人面临营养不良
                                    </h1>
                                </a>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img class="img-fluid" src="<?=Url::to('@web/uploads/w3.jpg')?>" alt="" />
                            <div class="text-wrapper">
                                <a href="#" class="d-flex">
                                    <h1>
                                        乌民众在比利时示威<br />
                                        抗议俄挑起乌国内战争
                                        
                                    </h1>
                                </a>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img class="img-fluid" src="<?=Url::to('@web/uploads/w2.png')?>" alt="" />
                            <div class="text-wrapper">
                                <a href="#" class="d-flex">
                                    <h3 style="color:#fff;">
                                        俄乌战争对贸易的影响 <br />
                                        全球海运、空运、陆运及快递业务大面积暂停，运价上升，<br />
                                        金融制裁、政治制裁深刻影响国际贸易局势。
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-icons">
                <ul>
                    <li>
                        <a href="<?= Url::toRoute(['blog/blog']);?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::toRoute(['blog/blog']);?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::toRoute(['blog/blog']);?>"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li class="diffrent">sharre now</li>
                </ul>
            </div>
        </section>
    <div class="container">
        
        <section class="blog-post-area section-gap relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="row">
                            <?php foreach($articles1 as $article):?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-amenities">
                                    <div class="amenities-thumb">
                                        <img    style="border-radius: 0.5em"
                                                class="img-fluid w-100"
                                                src="<?=Url::to($article->getImage())?>"
                                                alt=""
                                        />
                                    </div>
                                    <div class="amenities-details">
                                        <h5>
                                            <a href="<?=Url::toRoute(['blog/view','id'=>$article->id]);?>"
                                            ><?= $article->title?>
                                            </a>
                                        </h5>
                                        <div class="amenities-meta mb-10">
                                            <a href="#" class=""
                                            ><span class="ti-calendar"></span><?= $article->getDate() ?></a
                                            >
                                            <a href="#" class="ml-20"
                                            ><span class="ti-eye"></span><?= (int) $article->viewed ?></a
                                            >
                                        </div>
                                        <p>
                                            <?=$article->description?>
                                        </p>

                                        <div class="d-flex justify-content-between mt-20">
                                            <div>
                                                <a href="<?= Url::toRoute(['blog/blog']);?>" class="blog-post-btn">
                                                    Read More <span class="ti-arrow-right"></span>
                                                </a>
                                            </div>
                                            <div class="category">
                                                <a href="#">
                                                    <span class="ti-folder mr-1"></span><?= $article->category->title?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php  endforeach;?>
                            <?php foreach($articles2 as $article):?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-amenities">
                                    <div class="amenities-thumb">
                                        <img    style="border-radius: 0.5em"
                                                class="img-fluid w-100"
                                                src="<?=Url::to($article->getImage())?>"
                                                alt=""
                                        />
                                    </div>
                                    <div class="amenities-details">
                                        <h5>
                                            <a href="<?=Url::toRoute(['blog/view','id'=>$article->id]);?>"
                                            ><?=$article->title?>
                                            </a>
                                        </h5>
                                        <div class="amenities-meta mb-10">
                                            <a href="#" class=""
                                            ><span class="ti-calendar"></span><?=$article->getDate()?></a
                                            >
                                            <a href="#" class="ml-20"
                                            ><span class="ti-eye"></span><?= (int) $article->viewed?></a
                                            >
                                        </div>
                                        <p>
                                        <?=$article->description?>
                                        </p>

                                        <div class="d-flex justify-content-between mt-20">
                                            <div>
                                                <a href="<?= Url::toRoute(['blog/blog']);?>" class="blog-post-btn">
                                                    Read More <span class="ti-arrow-right"></span>
                                                </a>
                                            </div>
                                            <div class="category">
                                                <a href="#">
                                                    <span class="ti-folder mr-1"></span> <?= $article->category->title?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <?php  endforeach;?>
                        </div>

                    </div>
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                            <div class="single-sidebar-widget search-widget">
                                <form class="search-form" action="<?php echo Url::to(['/blog/search']) ?>">
                                    <input class="form-control mr-sm-2" placeholder="Search Posts" name="keyword" type="search" onfocus="this.placeholder = ''" 
                                    onblur="this.placeholder = 'Search Posts'"
                                    value="<?php echo Yii::$app->request->get('keyword') ?>">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <button onclick="location.href='<?= Url::toRoute(['blog/create']);?>'" type="button"  class="btn btn-primary">
         发表</button>
         <button onclick="location.href='<?= Url::toRoute(['blog/mypost']);?>'" type="button"  class="btn btn-info" style="margin-left: 10px;">
         我的</button>
                            </div>



                            <div class="single-sidebar-widget post-category-widget">
                                <h4 class="category-title">Catgories</h4>
                                <ul class="cat-list mt-20">
                                    <?php foreach($categories as $category):?>
                                    <li>
                                        <a href="<?= Url::toRoute(['blog/category','id'=>$category->id]);?>" class="d-flex justify-content-between">
                                            <p><?= $category->title?></p>
                                            <p><?= $category->getArticlesCount(); ?></p>
                                        </a>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>

                            <div class="single-sidebar-widget popular-post-widget">
                                <h4 class="popular-title">Popular Posts</h4>
                                <?php foreach($popular as $article):?>
                                <div class="popular-post-list">
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="img-fluid" src="<?=Url::to($article->getImage())?>" alt="">
                                        </div>
                                        <div class="details mt-20">
                                            <a href="<?=Url::toRoute(['blog/view','id'=>$article->id]);?>">
                                                <h6><?=$article->title?></h6>
                                            </a>
                                            <p><?=$article->getDate()?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>


                            <div class="single-sidebar-widget share-widget">
                                <h4 class="share-title">Share this post</h4>
                                <div class="social-icons mt-20">
                                    <a href="#">
                                        <span class="ti-facebook"></span>
                                    </a>
                                    <a href="#">
                                        <span class="ti-twitter"></span>
                                    </a>
                                    <a href="#">
                                        <span class="ti-pinterest"></span>
                                    </a>
                                    <a href="#">
                                        <span class="ti-instagram"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <!-- end main content-->
</div>