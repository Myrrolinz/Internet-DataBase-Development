<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 袁嘉蔚 1810546,20200529
 * a view for PcounterSave
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PcounterSave */

$this->title = 'Update Web Traffic Information: ' . $model->save_name;
$this->params['breadcrumbs'][] = ['label' => 'Pcounter Saves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->save_name, 'url' => ['view', 'id' => $model->save_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcounter-save-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
