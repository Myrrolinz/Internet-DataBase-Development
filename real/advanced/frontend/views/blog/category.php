<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200509
 */
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\helpers\Html;
$this->title = 'Blog Category';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::cssFile('@web/public/index.css') ?>

<?= Html::cssFile('@web/public/css/font-awesome.min.css') ?>
<?= Html::cssFile('@web/public/css/animate.min.css') ?>
<?= Html::cssFile('@web/public/css/owl.carousel.css') ?>
<?= Html::cssFile('@web/public/css/owl.theme.css') ?>
<?= Html::cssFile('@web/public/css/owl.transitions.css') ?>
<?= Html::cssFile('@web/public/css/style.css') ?>
<?= Html::cssFile('@web/public/css/responsive.css') ?>
<?= Html::jsFile('@web/js/jquery.min.js') ?>
<?= Html::jsFile('public/js/bootstrap.min.js') ?>
<?= Html::jsFile('public/js/owl.carousel.min.js') ?>
<?= Html::jsFile('public/js/jquery.stickit.min.js') ?>
<?= Html::jsFile('public/js/menu.js') ?>
<?= Html::jsFile('public/js/scripts.js') ?>

<div class="site-category">
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach($articles as $article):?>
                <article class="post post-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-thumb">
                                <a href="<?= Url::toRoute(['blog/view','id'=>$article->id]);?>"><img src="<?=Url::to($article->getImage())?>" alt="" class="pull-left"></a>

                                <a href="<?= Url::toRoute(['blog/view','id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">View Post</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">
                                    <h6><a href="<?=Url::toRoute(['blog/category','id'=>$article->category->id]);?>"> <?= $article->category->title?></a></h6>

                                    <h1 class="entry-title"><a href="<?=Url::toRoute(['blog/view','id'=>$article->id]);?>"><?=$article->title?></a></h1>
                                </header>
                                <div class="entry-content">
                                    <p><?= $article->description?>
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">By <?=$article->created_by?> On <?= $article->getDate();?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach;?>
                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
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
                        
                    </aside>
                   
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                        <?php foreach($categories as $category):?>
                            <li>
                                        <a href="<?= Url::toRoute(['blog/category','id'=>$category->id]);?>" class="d-flex justify-content-between">
                                            <p><?= $category->title?></p>
                                            <p><?= $category->getArticlesCount(); ?></p>
                                        </a>
                                    </li>
                            <?php endforeach;?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
</div>