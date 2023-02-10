<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 袁嘉蔚 1810546,20200509
 * a view of homework download page - a little bit fancy
 */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
$this->title = 'Homework';
?>
<?= Html::cssFile('@web/css/font-awesome.min.css') ?>
<?= Html::cssFile('@web/css/magnific-popup.css') ?>
<?= Html::cssFile('@web/css/nice-select.css') ?>
<?= Html::cssFile('@web/css/animate.min.css') ?>
<?= Html::cssFile('@web/css/owl.carousel.css') ?>

  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Personal</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

      <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

      <link rel="stylesheet" href="../../../backend/web/css/main.css">
    </head>
    <body>  
 
          

      <section class="services-area section-gap">
        <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content  col-lg-7">
                        <div class="title text-center">
                            <h1 class="mb-10">团队作业模块</h1>
                            <p>The team homework download for team bulijojodibulido</p>
                        </div>
                    </div>
                </div>            
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-home"></span>
                <a href="../../../data/team/布利啾啾迪布利多.zip" download="布利啾啾迪布利多.zip"><h4>下载全部团队作业文件</h4></a>
                <p>
                  Include All Teamwork Files
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-laptop-phone"></span>
                <a href="../../../data/team/布利啾啾迪布利多_需求文档(1810729_1810756_1813265_1713667_1810546).pdf" download="布利啾啾迪布利多_需求文档(1810729_1810756_1813265_1713667_1810546).pdf"><h4>需求文档</h4></a>
                <p>
                  Made by 黄璟知, 1810729
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-file-empty"></span>
                <a href="../../../data/team/布利啾啾迪布利多_设计文档(1810729_1810756_1813265_1713667_1810546).pdf" download="布利啾啾迪布利多_设计文档(1810729_1810756_1813265_1713667_1810546).pdf"><h4>设计文档</h4></a>
                <p>
                  Made by 孙家宜, 1810756
                </p>
              </div>  
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-picture"></span>
                <a href="../../../data/team/布利啾啾迪布利多_实现文档(1810729_1810756_1813265_1713667_1810546).pdf" download="布利啾啾迪布利多_实现文档(1810729_1810756_1813265_1713667_1810546).pdf"><h4>实现文档</h4></a>
                <p>
                  Made by All Members
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-tablet"></span>
                <a href="../../../data/team/布利啾啾迪布利多_用户手册(1810729_1810756_1813265_1713667_1810546).pdf"  download="布利啾啾迪布利多_用户手册(1810729_1810756_1813265_1713667_1810546).pdf"><h4>用户手册</h4></a>
                <p>
                  Made by 李彦欣, 1813265
                </p>
              </div>
            </div>
                        <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-enter"></span>
                <a href="../../../data/team/布利啾啾迪布利多_部署文档(1810729_1810756_1813265_1713667_1810546).pdf" download="布利啾啾迪布利多_部署文档(1810729_1810756_1813265_1713667_1810546).pdf"><h4>部署文档</h4></a>
                <p>
                  Made by 徐云凯, 1713667
                </p>
              </div>
            </div>
                      <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-pie-chart"></span>
                <a href="../../../data/team/布利啾啾迪布利多_项目展示(1810729_1810756_1813265_1713667_1810546).pptx" download="布利啾啾迪布利多_项目展示(1810729_1810756_1813265_1713667_1810546).pdf"><h4>项目展示PPT</h4></a>
                <p>
                  Made by 袁嘉蔚, 1810546
                </p>
              </div>
            </div>
                      <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-camera"></span>
                <a href="../../../data/team/布利啾啾迪布利多_录屏讲解(1810729_1810756_1813265_1713667_1810546).mp4" download="布利啾啾迪布利多_录屏讲解(1810729_1810756_1813265_1713667_1810546).mp4"><h4>录屏讲解</h4></a>
                <p>
                  Made by 黄璟知, 1810729
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-services">
                <span class="lnr lnr-rocket"></span>
                <a href="#"><h4>More...</h4></a>
                <p>
                  complementing...
                </p>
              </div>        
            </div>                            
          </div>
        </div>  
      </section>

      <section class="facts-area section-gap" id="facts-area">
        <div class="container">       
          <div class="row">
            <div class="col-lg-3 col-md-6 single-fact">
              <h1 class="counter">131801</h1>
              <p>Lines of Code</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
              <h1 class="counter">207</h1>
              <p>Commits</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
              <h1 class="counter">7</h1>
              <p>Meetings</p>
            </div>  
            <div class="col-lg-3 col-md-6 single-fact">
              <h1 class="counter">5</h1>
              <p>Splendid Team Workers</p>
            </div>                        
          </div>
        </div>  
      </section>

      <section class="price-area section-gap">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">个人作业模块</h1>
                <p>Personal homework download</p>
              </div>
            </div>
          </div>          
          <div class="row">
            <div class="col-lg-3 col-md-6 single-price">
              <div class="top-part">
                <h1 class="package-no">全部作业</h1>
                <h4>全部成员</h4>
                <p class="mt-10">5 individuals</p>
              </div>
              <div class="package-list">
                <ul>
                  <li>Web前端初探</li>
                  <li>Web前端设计</li>
                  <li>开源建站工具初试文档</li>
                </ul>
              </div>
              <div class="bottom-part">
                <h1>下载全部</h1>
                <a class="price-btn text-uppercase" href="../../../data/personal/全部成员所有作业.zip" download="全部成员所有作业">点击此处下载</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
              <div class="top-part">
                <h1 class="package-no">作业1</h1>
                <h4>Web前端初探</h4>
                <p class="mt-10">单独下载</p>
              </div>
              <div class="package-list">
                <ul>
                  <li>黄璟知 李彦欣</li>
                  <li>孙家宜 徐云凯</li>
                  <li>袁嘉蔚</li>
                </ul>
              </div>
              <div class="bottom-part">
                <h1>下载</h1>
                <a class="price-btn text-uppercase" href="../../../data/personal/全部成员作业1.zip" download="全部成员作业1">点击此处下载</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
              <div class="top-part">
                <h1 class="package-no">作业2</h1>
                <h4>Web前端设计</h4>
                <p class="mt-10">单独下载</p>
              </div>
              <div class="package-list">
                <ul>
                  <li>黄璟知 李彦欣</li>
                  <li>孙家宜 徐云凯</li>
                  <li>袁嘉蔚</li>
                </ul>
              </div>
              <div class="bottom-part">
                <h1>下载</h1>
                <a class="price-btn text-uppercase" href="../../../data/personal/全部成员作业2.zip" download="全部成员作业2">点击此处下载</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
              <div class="top-part">
                <h1 class="package-no">作业3</h1>
                <h4>开源建站工具初试文档</h4>
                <p class="mt-10">单独下载</p>
              </div>
              <div class="package-list">
                <ul>
                  <li>黄璟知 李彦欣</li>
                  <li>孙家宜 徐云凯</li>
                  <li>袁嘉蔚</li>
                </ul>
              </div>
              <div class="bottom-part">
                <h1>下载</h1>
                <a class="price-btn text-uppercase" href="../../../data/personal/全部成员作业3.zip" download="全部成员作业3">点击此处下载</a>
              </div>
            </div>                                    
          </div>
        </div>  
      </section>

    
    </body>
  </html>