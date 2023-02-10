<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 孙家宜 1810756,202005010
 * 由gii生成
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CovNewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cov-news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pubDate') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'summary') ?>

    <?= $form->field($model, 'infoSource') ?>

    <?php // echo $form->field($model, 'sourceUrl') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
