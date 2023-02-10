<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by LiYanxin 1813265,20200504
 */



/* @var $this yii\web\View */

use yii\helpers\Html;


$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;


?>

<?php echo Html::cssFile('@web/css/default.css'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<meta charset='UTF-8'>
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		.box {
			position: relative;
			width: 1300px;
			height: 640px;
			/*框在页面里的位置*/
			border: 10px solid rgb(250, 252, 253);
			margin: 0px auto;
			background-repeat: no-repeat;
			overflow: hidden;
			background-size: 50%;
			z-index: 0;
		}

		/*.box img{
			width: 900px;
			height: 340px;
		}*/
		#pic {
			width: 1300px;
			height: 640px;
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}

		.btn1 {
			position: relative;
			width: 100px;
			height: 35px;
			left: 35.7%;
			top: 45%;
			-webkit-transition-duration: 0.4s;
			transition-duration: 0.4s;
			text-align: center;
			background-color: white;
			color: black;
			border: 2px solid rgb(135, 135, 135);
			border-radius: 5px;
			z-index: 2;
		}

		.btn1:hover {
			background-color: rgb(135, 135, 135);
			color: white;
		}
	</style>
</head>

<head>
	<meta charset='UTF-8'>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="description" />
	<meta name="keywords" content="keywords" />
	<meta name="author" content="Arcsin, www.arcsin.se" />
	<link rel="stylesheet" type="text/css" href="default.css" />
	<title>COVID</title>
</head>

<body>
	<div class="box">
		<img id="pic" src="../../../frontend/web/img/0.jpg" />
	</div>
	<div>
		<input type="button" class="btn1" value="上一张" />
		<input type="button" class="btn1" value="下一张" />
	</div>
	<script>
		var pic = document.getElementById("pic");
		var preBtn = document.getElementsByClassName("btn1")[0];
		var nextBtn = document.getElementsByClassName("btn1")[1];
		//			
		preBtn.onclick = function() {
			n--;
			if (n == 0) {
				n = 6;
			}
			pic.src = "../../../frontend/web/img/" + n + ".jpg"
		}
		nextBtn.onclick = function() {
			picLunH();
		}
		var n = 1;

		function picLunH() {
			n++;
			if (n == 7) {
				n = 1;
			}
			pic.src = "../../../frontend/web/img/" + n + ".jpg"

		}
		setInterval(picLunH, 3000);
	</script>

	<div class="main">
		<div class="header_left">
			<div class="menu">
				<div class="gfx_nav"><span></span></div>
				<a href="../../../frontend/web/site/about"><span>01</span> 首页</a>
				<a href="../../../frontend/web/site/about1"><span>02</span> 预防</a>
				<a href="../../../frontend/web/site/about2"><span>03</span> 治疗</a>
			</div>
			<a href="../../../frontend/web/site/about" id="big">COVID</a>
		</div>

		<div class="content">
			<h1><span>认识冠状病毒</span></h1>
			<p> </p>
			<p>这是一种新病毒，2019年12月，中国出现了肺炎聚集性病例，调查发现这是一种未知的病毒引起的，之后我们将之命名为“新型冠状病毒”。</p>
			<p>冠状病毒是一个大型病毒家族，由遗传物质核心、包膜和棘蛋白构成。由于外表像皇冠。而皇冠在拉丁语中被称为Corona，因此这类病毒被命名为Coronavirus（冠状病毒）</p>
			<p>冠状病毒有很多种，可导致呼吸道疾病，有时还会引起肠胃道症状</p>
			<p>冠状病毒是一种单链正链RNA病毒，目前有六种已知的冠状病毒感染人类，包括229E，NL63，OC43，HKU1，中东呼吸综合征冠状病毒（MERSr-CoV）和严重急性呼吸综合征冠状病毒（SARSr-CoV）。</p>
			<p> </p>
			<h1><span>认识新型冠状病毒</span></h1>
			<p> </p>
			<p>新型冠状病毒首次在中国发现，它最初出现在武汉市一群肺炎患者中</p>
			<p>患者都与一个海鲜及活畜市场有关</p>
			<p>此后，病毒从患者传播到其他人，包括家人和医护人员</p>
			<p>病毒一经发现便开始出现很多感染病例，病毒在中国逐渐传播开，也传到了一些其他的国家</p>
			<p> </p>
			<h1><span>新型冠状病毒来源</span></h1>
			<p> </p>
			<p>病毒可以在很多种动物中传播</p>
			<p>因此，病毒渐渐开始可以从动物身上传播到人，这叫“溢出”，可由一系列因素引起</p>
			<p>病毒的突变或者人与动物之间的接触增加可能就是其中的一些因素</p>
			<p>具体例子可以参见MERS冠状病毒来自骆驼，SARS冠状病毒来自果子狸</p>
			<p>但是，目前新型冠状病毒的动物宿主尚不明确</p>
			<p> </p>
			<h1><span>如何传播</span></h1>
			<p> </p>
			<p>病毒传播的具体动力学尚待确定</p>
			<p>大体上说，呼吸道病毒通常是通过感染者咳嗽或打喷嚏时产生的飞沫传播，或者通过被病毒污染的物体传播</p>
			<p>所以，最容易受到新型冠状病毒感染的是那些与动物有密切接触的人，例如活禽市场的工作人员</p>
			<p>还有照顾患者的人，例如患者家人或医护人员</p>
			<p> </p>
		</div>
	</div>
	<script type="text/javascript" src="../../../frontend/web/js/canvas-nest.min.js"></script>　　
	<script type="text/javascript" src="../../../frontend/web/js/emojiCursor.js"></script>　
</body>

</html>