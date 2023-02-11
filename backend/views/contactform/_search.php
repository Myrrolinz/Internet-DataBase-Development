<?php
/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen 2013904,20230209
 * a view for contactform
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ContactformSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contactform-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'wechatid') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'message') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
