<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230209
 * 后台article的更新
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Set Image', ['set-image', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Set Category', ['set-category', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <!-- <?= Html::a('Set Tag', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-default']) ?> -->
        <?= Html::a('Publish', ['publish','id'=>$model->id],[
            'class'=>'btn btn-success',
            'data'=>[
                'confirm'=>'Are you sure you want to publish this item?',
                'method'=>'post',
            ],
        ])?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'content:ntext',
            'date',
            'image',
            'viewed',
            'created_by',
            'status',
            'category_id',
        ],
    ]) ?>

</div>
