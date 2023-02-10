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
				<a href="../../../frontend/web/site/about"><span>01</span> 简介</a>
				<a href="../../../frontend/web/site/about1"><span>02</span> 预防</a>
				<a href="../../../frontend/web/site/about2"><span>03</span> 治疗</a>
			</div>
			<a href="../../../frontend/web/site/about" id="big">COVID</a>
		</div>
		<div class="content">
			<h1><span>主要症状</span></h1>
			<p> </p>
			<p>(1) 发烧：最常见，可中度至低热，有些患者有轻度症状而无发烧。</p>
			<p>(2) 咳嗽：主要是干咳。</p>
			<p>(3) 呼吸困难：大约一半的患者在1周后出现呼吸困难，例如胸闷和呼吸急促。</p>
			<p>(4) 其他非典型症状：鼻塞，流鼻涕等上呼吸道症状罕见，有些患者首次出现疲劳，肌肉酸痛，头痛，腹泻等，很容易错过。</p>
			<p>(5) 严重疾病：严重疾病的患者会迅速发展为急性呼吸窘迫综合征，败血性休克，难以纠正的代谢性酸中毒和凝血病。</p>
			<p> </p>
			<h1><span>目前治疗现况</span></h1>
			<p> </p>
			<p> 对新冠肺炎，目前有替代性治疗药物，也许效率不高，但是对早中期感染，确实可治。</p>
			<p> 截止3月5日上午，疫情数据的治愈数量是5万多例。</p>
			<p> 1月22日，国家卫健委发布的诊疗方案（试行第三版）明确给出了用药方案：a-干扰素雾化吸入（常规抗病毒药物），口服洛匹那韦/力托那韦（抗艾药物）。重症、危重，用呼吸机。
				这个方案实际用了砖家王广发的方法，实际效果也不错。
			<p> 2月19日，诊疗方案出了第六版，删除了“目前没有确认有效的抗新冠病毒治疗方法”，说明确定有药有方法了。
				这一版保留了之前的用药方案，增加了l磷酸氯喹、阿比多尔、利巴韦林。
				重症、危重患者，增加了“康复者血浆治疗”和“体外血液净化技术”。</p>
			<p>	2月底，日本感染症学会公布了新型冠状病毒疾病治疗方案。其中主张：
				由于不满50岁的患者多数能够自愈，不一定需要用抗病毒药进行治疗，仅采取对症疗法等持续观察即可。</p>
			<p>	新冠肺炎尚无特效药，病情持续恶化时也将考虑用药。对象药物为艾滋治疗药“洛匹那韦”和“利托那韦”以及抗流感病毒药“Avigan”（法匹拉韦）。</p>
			<p> </p>
			<h1><span>治疗方法</span></h1>
			<p> </p>
			<p>(1) 休息和支持治疗；注意水和电解质的平衡；监测生命体征和血氧饱和度。</p>
			<p>(2) 氧气疗法：低氧血症患者可通过鼻导管和面罩进行氧气疗法，必要时可通过鼻子进行高流量氧气疗法（有创/无创）机械通气。</p>
			<p>(3) 抗病毒治疗：目前尚无有效的抗病毒药物，吸入阿尔法干扰素和一些抗病毒药物如洛匹那韦/利托那韦可能有一定作用。</p>
			<p>(4) 抗菌疗法：避免盲目或不当地使用抗菌药物，并在发现继发细菌感染的迹象后及时使用抗菌药物。</p>
			<p>(5) 中医治疗：辨证论治。</p>
			<p>(6) 糖皮质激素：严重者酌情使用。</p>
			<p> </p>
		</div>
	</div>
	<script type="text/javascript" src="../../../frontend/web/js/canvas-nest.min.js"></script>　　
	<script type="text/javascript" src="../../../frontend/web/js/emojiCursor.js"></script>　
</body>

</html>