<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * blog 相关
 */

use yii\helpers\Url;
use yii\helpers\Html;
use common\models\User;
$this->title = 'Blog Detail';
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

<?= Html::cssFile('@web/public/css/main.css') ?>
<?= Html::cssFile('@web/public/css/owl.linearicons.css') ?>
<?= Html::cssFile('@web/public/css/themify-icons.css') ?>
<?= Html::cssFile('@web/public/css/magnific-popup.css') ?>
<?= Html::cssFile('@web/public/css/nice-select.css') ?>


<?= Html::jsFile('@web/js/jquery.min.js') ?>
<?= Html::jsFile('public/js/bootstrap.min.js') ?>
<?= Html::jsFile('public/js/owl.carousel.min.js') ?>
<?= Html::jsFile('public/js/jquery.stickit.min.js') ?>
<?= Html::jsFile('public/js/menu.js') ?>
<?= Html::jsFile('public/js/scripts.js') ?>

<div class="blog-view">
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="post">
                        <div class="post-thumb">
                            <a href="blog.html"><img src="<?= Url::to($article->getImage()) ?>" alt=""></a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="<?= Url::toRoute(['blog/category', 'id' => $article->category->id]) ?>"> <?= $article->category->title ?></a></h6>

                                <h1 class="entry-title"><a href="<?= Url::toRoute(['blog/view', 'id' => $article->id]) ?>"><?= $article->title ?></a></h1>
                            </header>
                            <div class="entry-content">
                                <?= $article->content ?>
                            </div>


                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By <?= $article->createdBy->username ?> <?= $article->getDate(); ?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <?php if (!Yii::$app->user->isGuest) : ?>
                        <div class="leave-comment">
                            <!--leave comment-->
                            <h4>快来评论吧~</h4>
                            <?php if (Yii::$app->session->getFlash('comment')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= Yii::$app->session->getFlash('comment'); ?>
                                </div>
                            <?php endif; ?>
                            <?php $form = \yii\widgets\ActiveForm::begin([
                                'action' => ['blog/comment', 'id' => $article->id],
                                'options' => ['class' => 'form-horizontal contact-form', 'role' => 'form']
                            ]) ?>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <?= $form->field($commentForm, 'comment')->textarea(['class' => 'form-control', 'placeholder' => '留下你的足迹'])->label(false) ?>
                                </div>
                            </div>
                            <button type="submit" class="btn send-btn">发送评论</button>
                            <?php \yii\widgets\ActiveForm::end(); ?>
                        </div>
                        <!--end leave comment-->
                    <?php endif; ?>

                    <?php if (!empty($comments)) : ?>
                        <?php foreach ($comments as $comment) : ?>
                            <div class="bottom-comment">
                                <!--bottom comment-->
                                <?php $user_id=$comment->user_id?>
                                
                                <?php $user=User::find()->where(['id'=>$user_id])->one()?>
                                
                                <div class="comment-img">
                                    <?= \cebe\gravatar\Gravatar::widget([
                                        'email' => '<?=$user->email?>',
                                        'options' => [
                                            'alt' => '<?=$user->username>',
                                            'class'=>'img-circle',
                                        ],
                                        'size' => 50,
                                        
                                    ]) ?>
                                </div>

                                <div class="comment-text">
                                    <a href="#" class="replay btn pull-right">回复</a>
                                    <h5><?= $comment->user->username; ?></h5>

                                    <p class="comment-date">
                                        <?= $comment->getDate(); ?>
                                    </p>


                                    <p class="para"><?= $comment->text; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>



                    <!-- end bottom comment-->



                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="<?php echo Url::to(['/blog/search']) ?>">
                                <input class="form-control mr-sm-2" placeholder="Search Posts" name="keyword" type="search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" value="<?php echo Yii::$app->request->get('keyword') ?>">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>



                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="category-title">Catgories</h4>
                            <ul class="cat-list mt-20">
                                <?php foreach ($categories as $category) : ?>
                                    <li>
                                        <a href="<?= Url::toRoute(['blog/category', 'id' => $category->id]); ?>" class="d-flex justify-content-between">
                                            <p><?= $category->title ?></p>
                                            <p><?= $category->getArticlesCount(); ?></p>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Popular Posts</h4>
                            <?php foreach ($popular as $article) : ?>
                                <div class="popular-post-list">
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="img-fluid" src="<?= Url::to($article->getImage()) ?>" alt="">
                                        </div>
                                        <div class="details mt-20">
                                            <a href="<?=Url::toRoute(['blog/view','id'=>$article->id]);?>">
                                                <h6><?= $article->title ?></h6>
                                            </a>
                                            <p><?= $article->getDate() ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
</div>