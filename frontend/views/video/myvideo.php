<?php

/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen,20230209
 * display of my video
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="../../../backend/web/css/main.css">
<div class="contect-wrapper">
    <div class="video-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Video', ['create'], ['class' => 'btn btn-success']) ?>
        </p>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'attribute' => 'video_id',
                    'content' => function ($model) {
                        return $this->render('video_item', ['model' => $model]);
                    }
                ],
                [
                    'attribute' => 'created_by',
                    'content' => function ($model) {
                        return $model->createdBy->username;
                    }
                ],
                [
                    'attribute' => 'status',
                    'content' => function ($model) {
                        return $model->getStatusLabels()[$model->status];
                    }
                ],
                //'has_thumbnail',
                //'video_name',
                'created_at:datetime',
                'updated_at:datetime',
                //'created_by',


                [
                    'class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                        'delete' => function ($url) {
                            return Html::a('Delete', $url, [
                                'data-method' => 'post',
                                'data-confirm' => 'Are you sure?'
                            ]);
                        }
                    ]
                ],
            ],
        ]); ?>

    </div>
</div>