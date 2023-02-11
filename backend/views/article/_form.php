<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230209
 * 后台article的schema
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model frontend\models\Article */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
		'options' => ['rows' => 6],
		'preset' => 'full'
	]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
		'options' => ['rows' => 6],
		'preset' => 'full'
	]) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatusLabels()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
