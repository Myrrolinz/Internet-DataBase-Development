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
			<h1><span>如何正确戴口罩</span></h1>
			<p> </p>
			<p>(1)戴上并取下口罩之前都要洗手。</p>
			<p>(2)佩戴时要注意正反面和上下面。口罩应覆盖鼻子和鼻子，并调整鼻夹以贴合脸部。</p>
			<p>(3)避免在佩戴过程中用手触摸面罩的内部和外部。</p>
			<p>(4)戴多个口罩并不能有效地提高防护效果，反而会增加呼吸阻力，并且有可能会损坏密合性。</p>
			<p> </p>
			<h1><span>个人日常预防</span></h1>
			<p> </p>
			<p>(1)居室勤开窗，经常通风</p>
			<p>(2)家庭成员不共用毛巾</p>
			<p>(3)不随地吐痰，口鼻分泌物用纸巾包好再弃置于有盖垃圾箱内</p>
			<p>(4)注意营养，适度运动</p>
			<p>(5)不要接触、购买和食用野生动物</p>
			<p>(6)尽量避免前往售卖活体动物的市场</p>
			<p>(1)家庭备置体温计、医用外科口罩或N95口罩、家用消毒用品等物资</p>
			<p> </p>
			<h1><span>家庭成员出现可疑症状时的建议</span></h1>
			<p> </p>
			<p>(1)避免乘坐地铁、公共汽车等公共交通工具，避免前往人群密集的场所</p>
			<p>(2)就诊时应主动告诉医生自己的相关疾病流行地区的旅行居住史，以及发病后接触过什么人，配合医生开展相关调查</p>
			<p>(3)患者的家属应佩戴口罩，与无症状的其他家庭成员保持距离，避免近距离接触</p>
			<p>(4)若家庭中有人被判定为新型冠状病毒感染的肺炎，其他家庭成员如果经判定为密切接触者，应接受14天医学观察</p>
			<p>(5)对有症状的家庭成员经常接触的地方和物品进行消毒</p>
			<p> </p>
			<h1><span>七步洗手法</span></h1>
			<p> </p>
			<p>(1)掌心搓掌心</p>
			<p>(2)手指交错掌心搓掌心</p>
			<p>(3)手指交错掌心搓手背，两手互换</p>
			<p>(4)两手互握互擦指背</p>
			<p>(5)指尖摩擦掌心两手互换</p>
			<p>(6)拇指在掌中转动两手互换</p>
			<p>(7)一手旋转揉搓另一手的腕部、前臂，直至肘部，交错进行</p>
			<p> </p>
		</div>
	</div>
	<script type="text/javascript" src="../../../frontend/web/js/canvas-nest.min.js"></script>　　
	<script type="text/javascript" src="../../../frontend/web/js/emojiCursor.js"></script>　
</body>

</html>