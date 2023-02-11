<?php
/**
 * Team:ddl驱动队,NKU
 * coding by ZhuLu 2013635,20230210
 * Predict and Discussion相关
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PredictDiscussion */

$this->title = 'Create Article';
$this->params['breadcrumbs'][] = ['label' => 'Cov Researches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cov-research-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
