<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="../../../backend/web/css/main.css">
<div class="contect-wrapper">
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    /**
     * Team:布利啾啾迪布利多,NKU
     * coding by huangjingzhi 1810729,20200509
     */
    // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'Image',
                'content' => function ($model) {
                    return $this->render('article_item', ['model' => $model]);
                }
            ],
            //'id',
            'title',
            'description:ntext',
            
            'date',

            //'image',
            //'viewed',
            [
                'attribute' => 'created_by',
                'content' => function ($model) {
                    return $model->createdBy->username;
                }
            ],
            'status',
            //'category_id',

            ['class' => 'yii\grid\ActionColumn',
             'buttons' => [
                        'delete' => function ($url) {
                            return Html::a('Delete', $url, [
                                'data-method' => 'post',
                                'data-confirm' => 'Are you sure?'
                            ]);
                        }
                    ]],
        ],
    ]); ?>

</div>
</div>