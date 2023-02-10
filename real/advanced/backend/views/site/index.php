<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 袁嘉蔚 1810546,20200509; 徐云凯 1713667，20200602
 * 袁嘉蔚：实现数据可视化以及数据显示 徐云凯：修改文字框网页样式
 */
/* @var $this yii\web\View */

$this->title = '疫情资料站后台';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.8.0/dist/echarts.min.js"></script></script>
</head>
</html>
<div>

    <p>当前在线用户数量: <span><?php echo Yii::$app->userCounter->getOnline(); ?></span></p>
    <p>今日访问量: <span><?php echo Yii::$app->userCounter->getToday(); ?></span></p>
    <p>昨日访问量: <span><?php echo Yii::$app->userCounter->getYesterday(); ?></span></p>
    <p>网站总访问量: <span><?php echo Yii::$app->userCounter->getTotal(); ?></span></p>
    <p>网站当日最大访问量: <span><?php echo Yii::$app->userCounter->getMaximal(); ?></span></p>
    <p>网站最大访问量日期: <span><?php echo date('Y.m.d', Yii::$app->userCounter->getMaximalTime()); ?></span></p>
</div>

<body>


    <div id="main" style="width: 800px;height:400px;"></div>
    <script type="text/javascript">

        var myChart = echarts.init(document.getElementById('main'));
        var today=<?php echo Yii::$app->userCounter->getToday(); ?>;
        var yesterday=<?php echo Yii::$app->userCounter->getYesterday(); ?>;
        var maximal=<?php echo Yii::$app->userCounter->getMaximal(); ?>;
        var total=<?php echo Yii::$app->userCounter->getTotal(); ?>;
        var onuser=<?php echo Yii::$app->userCounter->getOnline(); ?>;

        var option = {
        	grid:{
        		left:'3%',
        		right:'30%'
        	},
            title: {
                text: '网站访客数据'
            },
            tooltip: {},
            legend: {
                data:['浏览量']
            },
            xAxis: {
                data: ["今日访问","昨日访问","单日最大","总访问","当前在线"]
            },
            yAxis: {},
            series: [{
                name: '浏览量',
                type: 'bar',
                itemStyle:{
                   normal:{
                   color:'#4ad2ff'
                                    }
                                },

                data: [today,yesterday,maximal,total,onuser]
            }]
        };

        myChart.setOption(option);
    </script>
</body>

<style>
p{
    width: 280px;
    border: groove 3px;
    padding: 10px;
    border-radius: 10px;
    color: #61a7e4;
}
span{
    color: #d81414;
    float: center;
}
