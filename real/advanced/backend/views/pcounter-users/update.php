<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 袁嘉蔚 1810546,20200529
 * a view for PcounterUsers
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PcounterUsers */

$this->title = 'Update User Information: ' . $model->user_ip;
$this->params['breadcrumbs'][] = ['label' => 'Pcounter Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_ip, 'url' => ['view', 'id' => $model->user_ip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcounter-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
