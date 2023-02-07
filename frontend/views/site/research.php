<?php
/**
 * Team:ddl驱动队,NKU
 * coding by ZhuLu 2013635,20230207
 * Predict and Discussion相关
 */

use yii\helpers\Html;
use yii\data\Pagination;
use yii\web\Response;
use yii\web\Controller;
use yii\helpers\Url;
use yii\widgets\LinkPager;

use frontend\models\PredictDiscussion;
$this->title = 'Research';
$this->params['breadcrumbs'][] = $this->title;


?>



<?= Html::cssFile('@web/PredictDiscussion/css/main.css') ?>
<?= Html::jsFile('@web/PredictDiscussion/js/jquery-3.2.1.min.js') ?>


<div class="research-index">
	<!-- Page heading -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<h2 class="f1-l-1 cl2">
					预测与讨论
				</h2>
			</div>
		</div>
	</div>

	<head>
        <meta charset="utf-8" />
        <title>轮播图</title>
        <style type="text/css">
            * {
                margin: 0px;
                padding: 0px;
            }

            #lunbotu {
                width: 1000px;
                height: 460px;
                overflow: hidden;
                position: relative;
                margin: 0px auto;
                position: relative;
            }

            #banner {
                height: 460px;
                width: 6130px;
                position: absolute;
                transition: 2s;
                left: 0px;
            }

            #banner img {
                float: left;
            }

            #biao {
                position: absolute;
                top: 430px;
                left: 43%;
            }

            #biao_1 {
                height: 20px;
                width: 20px;
                border: 1px solid #000;
                z-index: 10;
                float: left;
                list-style: none;
                border-radius: 50%;
                margin-left: 20px;
                text-align: center;
                cursor:pointer;
            }

        </style>
    </head>

    <body>
        <div id="lunbotu">
            <div id="banner">
                <img class="m" src="../../../frontend/web/PredictDiscussion/img/1.jpg" />
                <img class="m" src="../../../frontend/web/PredictDiscussion/img/2.jpg" />
                <img class="m" src="../../../frontend/web/PredictDiscussion/img/3.png" />
                <img class="m" src="../../../frontend/web/PredictDiscussion/img/4.jpg" />
                <img class="m" src="../../../frontend/web/PredictDiscussion/img/5.jpg" />
            </div>
            <div id="biao">
                <ul>
                    <li id="biao_1">1</li>
                    <li id="biao_1">2</li>
                    <li id="biao_1">3</li>
                    <li id="biao_1">4</li>
                    <li id="biao_1">5</li>
                </ul>
            </div>
        </div>		
    </body>
	
	<script type="text/javascript">
		var slid = document.getElementById("banner");
		//var id = document.getElementById("bt");
		var imgwidth = document.getElementsByClassName("m");
		var oli=document.getElementsByTagName("li");
		//console.log(oli);
		//console.log(imgwidth );
		var i =0;
		auto();
		//oli[0].style.cssText="background:#ff6700;color:#fff;";
		function auto(){

			time = setInterval(function(){
				i++;
			if(i <= 4) {
				slid.style.left = slid.offsetLeft - 1100 + "px";
				//oli[i].style.cssText="background:#ff6700;color:#fff;";
				oli[i-1].style.cssText="background:none;color:#000;";
			} else {
				slid.style.left ="0px";
				oli[4].style.cssText="background:none;color:#000;";
				//oli[0].style.cssText="background:#ff6700;color:#fff;";
				i=0;
			}
			console.log(i);

		}, 3000)

		}

			for(var j=0;j<=4;j++){
				//console.log(imgwidth[j].index);
			imgwidth[j].index=j;
			oli[j].index=j;
			oli[j].onmouseover=function(){
				//this.style.cssText="background:#ff6700;color:#fff;"    
				this.onmouseout=function(){
					this.style.cssText="background:none;color:#000;"
				}
			}

			oli[j].onclick=function(){
				clearInterval(time);
				m=this.index;
				slid.style.left=-m*1226+"px";    
				i=m;
				auto();
				console.log(i);
			}
			}    

	</script>
  

  <!-- Feature post -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-12 p-rl-1 p-b-2">					
					<?php $count = PredictDiscussion::find()->count(); $pagination = new Pagination(['totalCount' => $count,'pageSize' => 10]);
							$articles = PredictDiscussion::find()->offset($pagination->offset)->limit($pagination->limit)->all();?>
					
					<?php foreach ($articles as $PredictDiscussion) : ?>
						<h3 class="how1-child2 m-t-14 m-b-10">
							<a class="how-txt1 size-a-6 f1-m-4 cl1 hov-cl10 trans-03" href="<?= Html::encode("{$PredictDiscussion->url}") ?>">
								<?= Html::encode("·{$PredictDiscussion->title}·") ?>
							</a>
						</h3>
              			<h3 class="how1-child2 m-t-14 m-b-10">
						    <a class="how-txt1 size-a-6 f1-s-7 cl5 trans-03">
							<?= Html::encode("{$PredictDiscussion->summary}") ?>
							</a>                  			
						</h3>

						<span class="how1-child2">
							<span class="f1-s-4 cl11">
								Date
							</span>

							<span class="f1-s-3 cl11 m-rl-3">
								-
							</span>
								
							<span class="f1-s-3 cl11">
								<?= Html::encode("{$PredictDiscussion->date}") ?>
							</span>
						</span>
					<?php endforeach; ?>

					<!-- Pagination -->
					<div class="flex-wr-c-c m-rl--7 p-t-28">
                        <ul class="wp_paging clearfix">
						    总共&nbsp;<?= Html::encode("{$count}") ?>&nbsp;条研究&nbsp;
						</ul>
						<ul class="wp_paging clearfix">
						    <?php  echo LinkPager::widget(['pagination' => $pagination]);?>
						</ul>
					</div>
				</div>				
			</div>
		</div>
    </section>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>
</div>