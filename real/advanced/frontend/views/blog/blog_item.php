<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="container"><div class="col-lg-6 col-md-6">
    <div class="col-lg-6 col-md-6">
        <div class="single-amenities">
            <div class="amenities-thumb">
                <img style="border-radius: 0.5em" class="img-fluid w-100" src="<?= Url::to($model->getImage()) ?>" alt="" />
            </div>
            <div class="amenities-details">
                <h5>
                    <a href="<?= Url::toRoute(['blog/view', 'id' => $model->id]); ?>"><?= $model->title ?>
                    </a>
                </h5>
                <div class="amenities-meta mb-10">
                    <a href="#" class=""><span class="ti-calendar"></span><?= $model->getDate() ?></a>
                    <a href="#" class="ml-20"><span class="ti-comment"></span><?= (int) $model->viewed ?></a>
                </div>
                <p>
                    <?= $model->description ?>
                </p>

                <div class="d-flex justify-content-between mt-20">
                    <div>
                        <a href="#" class="blog-post-btn">
                            Read More <span class="ti-arrow-right"></span>
                        </a>
                    </div>
                    <div class="category">
                        <a href="#">
                            <span class="ti-folder mr-1"></span><?= $model->category->title ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div </div></div>
