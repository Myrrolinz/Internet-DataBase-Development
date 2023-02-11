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
				<a href="../../../frontend/web/site/about"><span>01</span> 首页</a>
				<a href="../../../frontend/web/site/about1"><span>02</span>冲突双方</a>
				<a href="../../../frontend/web/site/about2"><span>03</span>经过与现状</a>
			</div>
			<a href="../../../frontend/web/site/about" id="big">Russia and Ukraine</a>
		</div>
		<div class="content">
		<h1><span>俄乌冲突萌芽阶段</span></h1>
			<p> </p>
			<p>2022年2月15日，俄罗斯国防部宣布撤回部分部署在俄乌边境、此前正在参与大规模军事演习的陆上部队。2022年2月21日，俄罗斯南部军区表示，俄罗斯军队和边防部队阻止了一个破坏和侦察小组从乌克兰越过俄罗斯边境，并击毁了两辆从乌克兰越过俄罗斯边境企图接应该破坏小组的装甲车。2022年2月22日晚，俄罗斯总统普京签署命令，承认乌克兰东部的“顿涅茨克人民共和国”和“卢甘斯克人民共和国。2022年2月23日，俄罗斯总统新闻秘书佩斯科夫说，乌东两个“共和国”领导人要求俄罗斯总统普京帮助其击退乌军。普京获批在境外动用俄武装力量。同日，乌克兰进入全国紧急状态。
			<p> </p>

		<h1><span>俄军大规模攻势阶段（2022年2月24日-2022年4月初）</span></h1>
			<p> </p>
			<p>2022年2月24日，俄罗斯总统普京发表全国讲话，宣布在乌克兰开展“特别军事行动”。
				俄罗斯军队从克里米亚半岛，俄乌东部、北部边境以及乌克兰—白俄边境地区全面攻入乌克兰，采用空袭与地面进攻，对乌克兰实施多点军事打击，俄乌冲突全面爆发。同日乌克兰与俄罗斯断交。
				开战初期情况分为基辅方向，基辅东北方向，克里米亚西北方向，克里米亚东北方向，卢甘斯克方向五个方向和双方谈判情况具体论述。
			<p> </p>
		<h1><span>俄军大规模撤军阶段（2022年3月底——4月初）</span></h1>
			<p> </p>
			<p>俄乌第五轮谈判结束后，在三月底至四月初俄军撤离乌克兰基辅、日托米尔、苏梅和切尔尼戈夫地区，以及哈尔科夫西北和尼古拉耶夫的部分地区。
				乌军在随后控制了俄军撤出的地区。
				俄军在大规模撤军后在哈尔科夫地区还保持了相当存在。
				3月28日至4月2日俄军完全撤出基辅地区和日托米尔地区。
				4月4日俄军完全撤出苏梅州、切尔尼戈夫州以及哈尔科夫北部和西部部分地区。
				4月8日俄军撤出了尼古拉耶夫州的大部分控制地区。
			<p> </p>

		<h1><span>俄军局部攻势阶段（2022年4月初——2022年7月初）</span></h1>
			<p> </p>
			<p>4月1日乌军承认俄军控制哈尔科夫重要交通枢纽伊久姆地区，俄军在此之前的3月24日宣布对其控制。
				4月初到中旬，俄军和顿涅茨克武装控制了马里乌波尔市的大部分区域，剩余乌克兰军队被包围在亚速钢铁厂。
				4月14日，俄军黑海舰队旗舰莫斯科号巡洋舰起火并导致舰上弹药爆炸、严重受损，随后被拖曳回港的过程中失去稳定性，在风浪中沉没。
				此后，黑海舰队撤回克里米亚驻地，放弃对于乌克兰海岸线和黑海航线的封锁。
				4月19日，俄军占领卢甘斯克克里米纳市。
				同日，俄军和顿涅茨克武装开始强攻马里乌波尔钢铁厂。
				4月25日，俄罗斯单方面停止马里乌波尔附近军事行动以撤离平民。
				5月7日俄军和卢甘斯克武装占领重要交通枢纽波帕斯纳市。
				5月11日，乌军成功阻止了俄军装甲部队在顿巴斯北部渡过北顿涅茨克河，从乌军阵地后方突袭乌军北顿涅茨克集团的行动。俄军装甲编队在该战斗中损失惨重。
				5月12日俄军和卢甘斯克武装控制卢甘斯克鲁比日内市。
				5月13日，俄军撤离哈尔科夫市郊区。
				5月16日，北约承诺向乌克兰提供无限制的军事支持。
				5月17日，乌克兰将马里乌波尔控制权移交给俄罗斯。
				同日，俄罗斯外长拉夫罗夫称乌克兰实际上已经退出俄乌谈判进程。
				5月21日，俄军已完全控制马里乌波尔亚速钢铁厂。
				5月27日，俄军控制铁路枢纽（红）利曼市。
				5月31日，俄军和卢甘斯克武装攻入北顿涅茨克市中心。
				6月7日，俄罗斯国防部称已经控制卢甘斯克绝大部分地区和顿涅斯克的大部分地区。
				6月26日，俄罗斯军队和卢甘斯克武装完全控制北顿涅茨克市，
				7月4日，俄军控制了利西昌斯克市，同日俄军宣称完全“解放”了卢甘斯克地区。
				截止7月初，俄军基本控制了北顿涅茨克河右岸地区。
			<p> </p>
		<h1><span>双方休整阶段（2022年7月初——2022年8月底）</span></h1>
			<p> </p>
			<p>从7月开始到8月俄军在乌克兰攻势趋于停滞，双方转为在顿巴斯地区的阵地战。
				7月12日乌克兰总统泽连斯基称已经动员超过100万人，所组建的新部队将参与反攻并夺回失地。
				8月13日乌克兰官方表示无意与俄罗斯恢复谈判。
				8月中旬开始，俄军控制的扎波罗热核电站多次遭到炮击。
			<p> </p>
		<h1><span>乌军反攻阶段（2022年8月底——2022年11月初）</span></h1>
			<p> </p>
			<p>8月底至9月初乌克兰军队在哈尔科夫和赫尔松地区转入反攻。分为哈尔科夫反攻和赫尔松反攻两个部分。
			<p> </p>
		<h1><span>双方局部攻势阶段（2022年11月初——至今）</span></h1>
			<p> </p>
			<p>10月底至11月初：
				俄军和顿涅茨克武装在顿涅茨克市周边和顿巴斯南部乌勒达尔周边发起攻势，在顿涅茨克巴赫穆特（阿特木）市南部抵达北顿顿涅茨克河运河一线。并开始加强第聂伯河南岸地区、扎波罗热等地区阵地。
				乌军抵达卢甘斯克奥斯基尔河一线，并开始持续在卢甘斯克西部斯瓦托地区和扎波罗热北部地区集结兵力。并开始加强在俄乌边境和白乌边境阵地。
				11月13日乌克兰全境再次遭到俄罗斯导弹和无人机袭击。
				11月中旬顿涅茨克巴赫穆特（阿特木）市进入巷战。
				11月21日扎波罗热核电站再遭炮击。
				11月23日俄军对乌克兰电力设施进行了最大规模的打击行动。
				11月24日由于俄军空袭乌克兰控制区三座核电站暂时停运，多地断水断电。
				11月底俄在哈尔科夫库普扬斯克附近进行了反攻。
				12月5日乌军无人机袭击俄军在库尔斯克地区的两座机场。
				12月6日俄对乌电力设施的打击造成乌克兰全国大规模停电。
				同日，作为报复，乌军大规模炮击了顿涅茨克市。
				12月中旬俄军控制了巴赫穆特（阿特木）城市工业区。
				12月21日俄罗斯总统普京称目前动员的30万人约有一半在接受军事训练，另一半在战区。
				12月25日乌军使用无人机袭击克里米亚。
				12月底乌军逐渐形成了俄军在卢甘斯克斯瓦托地区克里米纳市的突出部。
				12月28日俄军发起顿涅斯克苏勒答尔市攻势。
				12月底至1月中旬乌军开始转移其在扎波罗热和斯瓦托方向兵力，将其在顿巴斯方向集结。
				1月6日俄军因东正教圣诞单方面停火，乌军拒绝停火。由于乌军继续炮击俄占顿巴斯地区，双方继续交战。
				1月7日俄军进入苏勒答尔市中心。
				1月9日乌军抵达克里米纳市郊区。
				1月12日俄军控制苏勒答尔市绝大部分，随后切断了巴赫穆特（阿特木）北部补给线。
				1月15日俄军进行了新年开始的第一轮针对乌克兰电力设施和火车站的全面空袭。
				1月18日俄军在顿涅茨克市北部阿瓦迪夫卡附近发起攻势，越过顿涅茨克运河线。
				1月19日俄军控制了位于巴赫穆特（阿特木）西南的克里希夫卡镇，接近该城西部主要补给线。
				同日，俄军在扎波罗热库班、卡缅西克和胡里艾布勒等方向发起攻势。
				1月24日俄军在扎波罗热的进攻转为阵地战。
				同日，乌克兰多名高级内部官员宣布辞职。
				1月25日俄军进攻顿涅茨克南部乌勒达尔镇，乌军渡河袭击俄军在赫尔松南岸阵地。
				同日，北约宣布将向乌克兰提供主战坦克。
				1月26日俄军切断了乌军在巴赫穆特（阿特木）西部的主要补给线路之一。
				1月底乌军再次抽调兵力到顿巴斯南部乌勒达尔，双方在乌勒达尔转为阵地战。
				2月初俄军在卢甘斯克克里米纳市附近转入进攻。
			<p> </p>
		</div>
	</div>
	<script type="text/javascript" src="../../../frontend/web/js/canvas-nest.min.js"></script>　　
</body>

</html>