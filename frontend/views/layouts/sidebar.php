<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230201
 * 侧边栏外观
 */

use yii\rest\IndexAction;
?>

<aside class='shadow'>
    <?php
    $menuItems = [
        ['label' => 'Home', 'url' => ['/video/index']],
        

    ];
    if (Yii::$app->user->isGuest) {
    } else {
        $menuItems[] = [
            'label'=> 'Create',
            'url'=>['/video/create']
        ];
        $menuItems[]=['label'=>'My videos','url'=>['/video/myvideo']];
    }?>
<?php
echo \yii\bootstrap4\Nav::widget([
    'options'=>[
        'class'=>'d-flex flex-column nav-pills'
    ],
    'items' => $menuItems,
])
?>
</aside>

