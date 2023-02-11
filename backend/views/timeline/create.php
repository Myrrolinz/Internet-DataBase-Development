<?php
/**
 * Team:ddl驱动队,NKU
 * coding by ZhuLu 2013635,20230210
 * coding by sunyiqi 2012810,20230210
 * timeline相关
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TimelineSearch */

$this->title = 'Create Timeline';
$this->params['breadcrumbs'][] = ['label' => 'Timeline', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timeline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
