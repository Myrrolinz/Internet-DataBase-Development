<?php

/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230201
 * coding by ZhuLu 2013635,20230207
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
				<a href="../../../frontend/web/site/about1"><span>02</span>冲突双方</a>
				<a href="../../../frontend/web/site/about2"><span>03</span>经过与现状</a>
			</div>
			<a href="../../../frontend/web/site/about" id="big">Russia and Ukraine</a>
		</div>
		<div class="content">
		<h1><span>俄罗斯</span></h1>
			<p> </p>
			<p>俄罗斯总统普京2022年2月24日清晨宣布在顿巴斯地区发起特别军事行动。俄军此次军事行动规模巨大，达到了战役标准。俄军在乌克兰的行动属于境外作战，无论出于战略进攻还是战略防御的目的，实施境外攻势作战都是俄罗斯自沙俄时代就沿袭下来的基本军事思想。俄国防部发言人科纳申科夫在总结俄军在顿巴斯地区的特别军事行动时表示，当天分配给俄武装部队的所有任务都顺利完成。在俄军火炮和空中火力支援下，顿巴斯当地武装已突破乌武装部队的梯队防御线，向纵深推进了6-8公里。在克里米亚方向的俄军打开了通向赫尔松的通道，得以恢复北克里米亚运河对克里米亚半岛的供水。当天俄军摧毁了乌克兰83处地面军事基础设施，击落乌克兰两架苏-27战机、两架苏-24战机、一架武装直升机和四架“旗手-TB-2”攻击无人机。
			<p>在此方向上，俄军出动的兵力包括近卫第1坦克集团军所属近卫红旗第2塔曼摩步师和近卫红旗第4坎捷米罗夫卡坦克师，以及近卫第8集团军所属第150摩步师、第49集团军所属第205哥萨克摩步旅和第34山地摩步旅等。</p>
			<p>作战中，俄军采用了空地一体作战样式。优势空中力量支援下的大规模装甲集群突击，是自苏军时期就具有和保持的传统优势作战能力，也被北约视为最大威胁。</p>
			<p>2022年9月，据美联社等外媒最新消息，乌克兰军队在最新的军事行动中仍然维持着反攻势头，重新控制了哈尔科夫地区的多个城镇。2022年9月12日，俄罗斯国防部则表示，俄军对哈尔科夫地区的乌军发动了空袭。</p>
			<p>2022年9月21日，俄罗斯总统普京在视频讲话中宣布进行部分动员。</p>
			<p>当地时间2022年9月25日，俄罗斯国防部公布战况消息称，俄军防空部队击落了多架乌克兰无人机，拦截了“海马斯”多管火箭系统发射的多枚火箭弹。同一天，乌克兰武装部队总参谋部称，乌军在顿涅茨克地区索列达尔等地击退了俄军的进攻。</p>
			<p>当地时间2022年10月4日，俄罗斯国防部长绍伊古表示，已有20多万人通过部分动员加入俄罗斯武装力量，这部分人员将在训练完成后与已经参与作战的部队一起执行特别军事行动。</p>
			<p>2022年10月14日，俄罗斯总统普京表示，目前已经完成动员22万余人，所有动员措施将在两周内完成。</p>
			<p>2022年10月19日，俄罗斯总统普京宣布，顿涅茨克、卢甘斯克、赫尔松和扎波罗热四个新加入俄罗斯的地区进入战时状态。普京签署了四个地区的戒严令，于20日零时开始实施。</p>
			<p>当地时间2022年10月21日，俄罗斯总统普京签署总统令，宣布成立政府协调委员会，用于保障特别军事行动的需求。</p>
			<p>当地时间2023年1月24日，俄罗斯别尔哥罗德州州长向俄罗斯总统普京报告称，自乌克兰开始炮击该州以来，当地已有25人死亡，96人受伤。</p>
		<h1><span>乌克兰</span></h1>
			<p> </p>
			<p>当地时间2022年2月22日，乌克兰总统泽连斯基通过电视直播发表讲话，他表示，乌克兰将保留进行独自和集体防卫的权利。国际社会对乌克兰领土边界的承认不会因俄罗斯的行为而发生改变。俄罗斯对“顿涅茨克人民共和国”与“卢甘斯克人民共和国”的承认是其单方面退出明斯克协议的行为。23日，乌克兰国家边防局表示，已经对乌克兰与俄罗斯、白俄罗斯、顿巴斯领土和毗邻海岸地区实施了限制措施。包括禁止在夜间逗留，禁止任何船只从港口离开，禁止任何车辆（军事、安全服务和农业设备除外）使用不在道路登记册上的通往国家边境的道路。乌克兰议会批准在全国实施紧急状态。24日，乌克兰管理部门宣布关闭全国领空。已动员所有军事力量和特种部队。
			<p>乌克兰方面2022年9月9日宣布，9月已从俄军手中收复了1000多平方公里的土地。目前，乌军正在哈尔科夫方向发起反攻，最近3天已成功推进近50公里。 乌克兰总统泽连斯基称：“到目前为止，乌克兰武装部队已经解放并控制了哈尔科夫地区大约30个定居点。”2022年9月，据塔斯社基辅报道，乌克兰副总理伊琳娜·韦列修克20日在对乌克兰国家网发表评论时说，乌公民在非基辅控制区参加入俄公投或将面临最高5年监禁的刑事责任。</p>
			<p>当地时间2022年9月30日，乌克兰总统泽连斯基、乌议长斯特凡丘克和乌总理什米加尔签署了乌克兰加入北约的申请。</p>
			<p>据乌克兰公众电视广播公司报道，当地时间2022年10月4日，乌克兰总统泽连斯基批准了国家安全委员会关于不可能与俄罗斯总统普京进行谈判的决定。</p>
			<p>2022年10月14日，乌克兰媒体报道称，乌克兰总统泽连斯基当天召开了最高统帅部会议，讨论了前线局势和乌武装部队的进一步行动。会议着重考虑了部队后勤保障问题，特别是不间断的弹药供应和冬季准备工作。</p>
			<p>当地时间2022年11月9日，乌克兰报道称，乌克兰武装部队夺回赫尔松州两个定居点，乌武装部队在普拉夫代内和卡利尼夫斯克升起乌克兰国旗。2022年11月，据中国驻乌克兰大使馆微信公众号消息，乌克兰官方当地时间16日宣布将该国的国家战时状态延长至2023年2月19日。</p>
			<p> </p>
		</div>
	</div>
	<script type="text/javascript" src="../../../frontend/web/js/canvas-nest.min.js"></script>　　
	<script type="text/javascript" src="../../../frontend/web/js/emojiCursor.js"></script>　
</body>

</html>