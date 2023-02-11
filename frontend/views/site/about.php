<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230201
 * coding by ZhuLu 2013635,20230207
 * about页面
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
		//下一张、上一张切换			
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
        //图片轮播
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
				<a href="../../../frontend/web/site/about1"><span>02</span>冲突双方</a>
				<a href="../../../frontend/web/site/about2"><span>03</span>经过与现状</a>
			</div>
			<a href="../../../frontend/web/site/about" id="big">Russia and Ukraine</a>
		</div>

		<div class="content">
			<h1><span>俄乌战争</span></h1>
			<p> </p>
			    <p>俄乌战争（乌克兰语：російсько-українська війна; 俄语：российско-украинская война）是2014年2月20日起俄罗斯与乌克兰之间爆发的一场旷日持久的混合战争，前期以低强度战争及代理人战争形式进行。</p>
				<p>2022年2月24日冲突当日起正式白热化为全面战争，并迅速发展为第二次世界大战以来欧洲最大规模的战争。 </p>
				<p> </p>
			<p> </p>

			<h1><span>历史背景</span></h1>
			<p> </p>
			    <p>2014年初春的克里米亚危机。在一场短促的军事冲突之后，克里米亚半岛宣布并入俄罗斯，同时乌克兰东部的顿巴斯地区出现了两个由分离主义武装控制的独立政治实体“顿涅茨克人民共和国”（DNR）和“卢甘斯克人民共和国”（LNR），三者合计占据乌克兰7%的领土。由于整场危机已经在事实上发展成乌克兰和俄罗斯之间的局部战争，2014年9月5日，在德俄两国调停下，交战各方签署了实现临时停火、撤出外籍武装人员、承认分裂地区部分自治的《明斯克议定书》。</p>
				<p>2015年2月12日，新的《第二阶段明斯克议定书》又规定撤出部署在双方实控线15公里范围内的重型武器，并允许顿巴斯的两个分离地区举行独立的地方选举。然而从那时起至今，交战各方违反议定书要求的行为从未真正停止。联合国人权事务高级专员办公室2020年初公布的一份报告估计，从2014年4月到2020年2月，整个顿巴斯地区丧生的各类武装人员和平民总数超过1.3万人（其中约1/4为平民），将近200万人被迫逃离家园。</p>
				<p>2021年12月，俄外交部就与美国和其他西方国家开展安全保障对话发表声明，要求美国、北约就排除北约进一步东扩的可能提供法律保障。 </p>
				<p>2022年1月10日至13日，俄分别与美国、北约就安全保障建议开展对话，但未取得实质性成果。 </p>
				<p>2022年2月21日，俄罗斯联邦安全会议成员就乌克兰东部顿巴斯地区局势举行会议。普京随后发表全国电视讲话，谈及俄乌两国关系、乌东部局势、俄安全保障等问题。随后，普京签署关于承认“顿涅茨克人民共和国”和关于承认“卢甘斯克人民共和国”的命令，以及俄罗斯分别与这两个“共和国”的友好合作互助条约。2月22日，俄罗斯外交部宣布即日起俄罗斯与“顿涅茨克人民共和国”和“卢甘斯克人民共和国”建立大使级外交关系 </p>
				<p>当地时间2022年2月22日，俄罗斯外长拉夫罗夫表示，俄罗斯会保障“顿涅茨克人民共和国”及“卢甘斯克人民共和国”的安全。 </p>
				<p>2022年2月22日，俄罗斯联邦委员会（议会上院）通过相关决议，准许俄罗斯总统在俄境外动用联邦武装力量。联邦委员会的决定自通过之日起开始生效。出动军队的数量、行动区域、任务和在俄罗斯境外停留的时间由俄罗斯总统决定。 </p>
				<p>2022年2月23日，俄罗斯总统普京与土耳其总统埃尔多安通电话，讨论了乌克兰东部当前局势。普京表示，在乌克兰政府对顿巴斯“进行侵略”以及断然拒绝执行明斯克协议的情况之下，俄方作出承认乌东部民间武装控制的两个地区独立的这一决定具有客观必要性。普京还表示，对美国和北约关于安全保障议题的相关表态表示失望，他认为美国和北约的反应只是为了忽视俄罗斯的合法关切和要求。 </p>
			<p> </p>

			<h1><span>重要战斗</span></h1>
			<p> </p>
			    <p>争夺利西昌斯克：2022年7月1日，俄罗斯国防部称，已控制利西昌斯克多处目标，乌军损失惨重。但乌方对此予以否认，并表示乌军没有撤离利西昌斯克的计划。</p>
				<p>“解放”卢甘斯克地区：2022年7月3日，俄国防部消息，绍伊古当日向俄总统普京汇报说，俄军已“解放”卢甘斯克地区。得益于成功的战斗行动，俄军和卢甘斯克武装力量已完全控制了利西昌斯克市及其周边居民点。</p>
				<p> 蛇岛争夺战：乌克兰国家通讯社当地时间2022年7月7日报道称，乌克兰武装部队总参谋部主要作战部副部长格罗莫夫在当天简报会上表示，7日乌克兰武装部队在蛇岛升起了国旗，乌克兰武装部队已经建立了对蛇岛的实际控制。</p>
				<p>红利曼：俄乌双方围绕顿涅茨克地区战略要地红利曼的控制权展开激烈战斗。2022年10月1日，乌克兰媒体表示，乌军已经控制了红利曼，俄国防部当天则表示，俄军和顿巴斯地区武装已从红利曼撤离。</p>
			<p> </p>
		</div>
	</div>
	<script type="text/javascript" src="../../../frontend/web/js/canvas-nest.min.js"></script>　　
</body>

</html>