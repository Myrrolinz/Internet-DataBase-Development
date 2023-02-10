<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200505
 */
use yii\rest\IndexAction;
?>

<aside class='shadow'>
<?php
echo \yii\bootstrap4\Nav::widget([
    'options'=>[
        'class'=>'d-flex flex-column nav-pills'
    ],
    'items' => [
        [
            'label' => 'Home',
            'url' => ['/site/index']
        ],
        [
            'label' => 'Videos',
            'url' => ['/video/index']
        ],
        [
            'label'=>'Blogs',
            'url'=>['/article/index']
        ],
        [
            'label'=>'Comments',
            'url'=>['/comment/index']
        ],
        [
            'label'=>'News',
            'url'=>['/cov-news/index']
        ],
        [
            'label'=>'Research',
            'url'=>['/cov-research/index']
        ],
        [
            'label'=>'Contact Info',
            'url'=>['/contactform/index']
        ],
        [
            'label'=>'User Info',
            'url'=>['/pcounter-users/index']
        ],
        [
            'label'=>'Web Traffic Info',
            'url'=>['/pcounter-save/index']
        ],
        [
            'label'=>'Homework',
            'url'=>['/site/homework']
        ]
    ]
])
?>
</aside>

