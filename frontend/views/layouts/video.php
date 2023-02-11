<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230201
 * video 外观
 */

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap h-100 d-flex flex-column">
        <?php echo $this->render('header2') ?>


        <main class="d-flex">
            <?php echo $this->render('sidebar') ?>
            <div class="content-wrapper p-3">
                
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </main>


    </div>

   

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>