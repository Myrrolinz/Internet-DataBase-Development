<?php
/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen 2013904,20230209
 * a view for contactform
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\contactform */

$this->title = 'Update Contactform: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contactforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<link rel="stylesheet" href="../../../backend/web/css/main.css">
<div class="contect-wrapper">
<div class="contactform-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
