<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by LiYanxin 1813265,20200504
 */




/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo Html::cssFile('@web/css/style.css'); ?>
<div class="site-signup">
    <style>
        
        .site-signup {
            height: 450px;
            width: 100%;
            text-align: center;
            background-position: center;
            background-size: 50%;
            position: relative;
            
        }
    </style>


    <p>Signup</p>
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <style type="text/css">
                .row {
                    width: 480px;
                    height: 480px;
                    position: relative;
                    z-index: 999;
                    text-align: center;
                    margin: 6% auto;
                    background: rgba(216, 216, 216, 0.5);
                    padding: 5px;
                    overflow: hidden;
                    border: 10px solid white;
                    box-shadow: 0px 0px 10px 5px #aaa;
                    display: flex;
                }

                .btn {
                    text-align: center;
                    top: 15px;
                    left: 160px;
                    position: relative;
                    width: 125px;
                    height: 50px;
                    background: white;
                    color: #000;
                    border: 5px solid white;
                    box-shadow: 0px 0px 10px 5px #aaa;
                    border-radius: 30px;
                    transition: .5s;
                    display: flex;
                }

                .btn:hover {
                    background-color: rgb(135, 135, 135);
                    color: white;
                    border: 5px solid white;
                    display: flex;
                }

                .site-signup p {
                    font-size: 50px;
                    text-align: center;
                    font-weight: bolder;
                    position: relative;
                    
                }
            </style>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php echo Html::cssFile('@web/css/bk.css'); ?>
<div class="foreground"></div>

<div class="midground">
    <div class="tuna1"></div>
    <div class="tuna2"></div>
</div>

<div class="background">
</div>