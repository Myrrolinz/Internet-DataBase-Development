<?php
/**
 * Team:ddl驱动队,NKU
 * coding by guanyunmei 2013750,20230207
 * news相关，由gii生成
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CovNews */

$this->title = 'Create Cov News';
$this->params['breadcrumbs'][] = ['label' => 'Cov News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cov-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
