<?php
/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen 2013904,20230209
 * a view for contactform
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\contactform */

$this->title = 'Create Contactform';
$this->params['breadcrumbs'][] = ['label' => 'Contactforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="../../../backend/web/css/main.css">
<div class="contect-wrapper">
<div class="contactform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
