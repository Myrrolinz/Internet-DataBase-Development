<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230210
 * 客流量相关
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PcounterUsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pcounter-users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_ip') ?>

    <?= $form->field($model, 'user_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
