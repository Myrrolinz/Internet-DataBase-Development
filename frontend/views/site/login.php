<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * login页面
 */


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo Html::cssFile('@web/css/style.css'); ?>

<div class="site-login">
	<style>
		.site-login {
			height: 450px;
			width: 100%;
			background-position: center;
			background-size: 50%;
			text-align: center;
			position: center;
		}
		
		
	</style>
	
	<p>Login</p>
	<div class="row">
		<div class="col-lg-12">
			<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

			<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

			<?= $form->field($model, 'password')->passwordInput() ?>

			<?= $form->field($model, 'rememberMe')->checkbox() ?>

			<div class="form-group">
				<?= Html::submitButton('Log in', ['class' => 'btn', 'name' => 'login-button']) ?>
			</div>
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
				top: 15px;
				left: 150px;
				position: relative;
				width: 125px;
				height: 50px;
				background: white;
				color:#000;
				border: 5px solid white;
				box-shadow: 0px 0px 10px 5px #aaa;
				border-radius: 30px;
				transition: .5s;
				display: flex;

                font-size: 20px;
			}

			.btn:hover {
				background-color: #c45;
				color: white;
				border: 5px solid white;
				display: flex;
			}

			.site-login p {
				font-size: 50px;
				text-align: center;
				font-weight: bolder;
				position: relative;
			}

		</style>
		<?php ActiveForm::end(); ?>
	</div>
</div>

<div class="background"></div>

<style>
  .background {
 /* 设置容器尺寸 - 原理1 */
    width: 480px;
    height: 480px;
	top: -300px;
	left: 450px;
	position: relative;
 	/* 背景渐变色 - 原理2 */
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    /* 背景尺寸 - 原理3 */
 	background-size: 600% 600%;
 	/* 循环动画 - 原理4 */
    animation: gradientBG 5s ease infinite;
  }

  /* 动画，控制背景 background-position */
  @keyframes gradientBG {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
  }
</style>