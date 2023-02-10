<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 袁嘉蔚 1810546,20200509
 * a view for contactform
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactformSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="../../../backend/web/css/main.css">
<div class="contect-wrapper">
<div class="contactform-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contactform', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'firstname',
            'lastname',
            'wechatid',
            'phone',
            'message',
            //'sex',
            //'id',

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
