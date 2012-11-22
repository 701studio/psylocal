<?php
session_start();
if ($_SESSION['username']==""){
  header("Location:login.php");
}
include_once("getdata.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"charset="UTF-8" />
<title>调查问卷结果显示</title>
<link rel="stylesheet" href="style.css"/>
<link rel="shortcut icon" href="/images/favicon.ico"/>
<script type="text/javascript" src="/js/jq.js"></script>
<script type="text/javascript" src="/js/h.js"></script>
<script type="text/javascript" src="/js/hm.js"></script>
<script type="text/javascript">
  /**
	 * 显示折线图函数
	 * 2012-11-21 By YQC
	 * 1.0
	*/
	function display(chart,render){
    chart = new Highcharts.Chart({
      chart:{
        renderTo: render,
        type: 'line',
        backgroundColor:'#F8F8F8'
      },
      title:{
        text:' '
      },
      xAxis: {
        categories: <?php getX(); ?> 
      },
      yAxis: {
        title: {
          text: '历次统计结果'
        }
      },
      tooltip: {
        crosshairs: true,
        shared: true
      },
      series: getYdata(render)       
    }); 	
	}
  /**
   * 获取历次统计数据
   * 2012-11-21 By YQC
   * 1.0
  */
  function getYdata(render){
    if(render=="renji")
    {return <?php getY("renji");?>;}
    if(render=="xuexi")
    {return <?php getY("xuexi");?>;}
    if(render=="xiaoyuan")
    {return <?php getY("xiaoyuan");?>;}
    if(render=="zeye")
    {return <?php getY("zeye");?>;}
    if(render=="qingxu")
    {return <?php getY("qingxu");?>;}
    if(render=="ziwo")
    {return <?php getY("ziwo");?>;}
    if(render=="manyi")
    {return <?php getY("manyi");?>;}
  }
  /**
   * 获取网状图
   * 2012-11-21 BY YQC
   * 1.0
  */
  function displaynet(chart,render,x,max){
    chart = new Highcharts.Chart({       
	    chart:{
	      renderTo: render,
	      polar: true,
	      type: 'line',
        backgroundColor:'#F8F8F8'
	    },
	    title:{
        text:''
	    },
	    pane:{
	    	size: '80%'
	    },
	    xAxis:{
	      categories:x,
	      tickmarkPlacement: 'on',
	      lineWidth: 0
	    },
	    yAxis: {
	      gridLineInterpolation: 'polygon',
	      lineWidth: 0,
	      min: 0,
        tickInterval: 1,
        labels:{enabled:false},
        max: max
	    },
	    tooltip: {
	    	shared: true
	    },
	    legend: {
	      align: 'right',
	      verticalAlign: 'top',
	      y: 100,
	      layout: 'vertical'
	    },
	    series: getNetData(render)	
	  });
  }
  /**
   * 从数据库中获取极性图数据
   * 2012-11-21 BY YQC
   * 1.0
  */
  function getNetData(render){
    if(render=="one")
    {return <?php getNet("one");?>;}
    if(render=="two")
    {return <?php getNet("two");?>;}
    if(render=="three")
    {return <?php getNet("three");?>;}
  }

	$(document).ready(function() {
    var c1,c2,c3,c4,c5,c6,c7;
    var cm1,cm2,cm3;
    display(c1,"renji"); 
    display(c2,"xuexi"); 
    display(c3,"xiaoyuan"); 
    display(c4,"zeye"); 
    display(c5,"qingxu"); 
    display(c6,"ziwo"); 
    display(c7,"manyi");
    displaynet(cm1,"one",['外倾性(5分)','宜人性(5分)','责任感(5分)','神经质(5分)','开放性(5分)'],5);
    displaynet(cm2,"two",['我知觉(7分)','计划未来(7分)','社会能力(7分)','规划风格(7分)','家庭凝聚力(7分)','社会资源(7分)'],7);
    displaynet(cm3,"three",['学校支持(5分)','家庭支持(5分)','同伴支持(5分)','社会支持(5分)'],5);
  });
</script>
</head>
<body>
<div id="topwc">
	<span class="topwcleft"><strong><?php echo "欢迎您 ".$_SESSION['username'].","?></strong>&nbsp;<a href='loginout.php'>注销登录</a></span>
  <span class="topwcrt"><strong>Tips:如果数据出现为零的情况，说明问卷无效</strong></span>
</div>
<div id="outfrm">
  <div class="blocktips">
		<p><strong>导语：下面是图表</strong></p>
  </div>
  <div class="block">
    <div class="blockleft">
      <div class="title-area">人际适应变化图</div>
      <div id="renji" class="picarea"></div>
    </div>
    <div class="blockright">
      <div class="title-area">学习适应变化图</div>
      <div id="xuexi" class="picarea"></div>
    </div>
  </div>

  <div class="block">
    <div class="blockleft">
      <div class="title-area">校园适应变化图</div>
      <div id="xiaoyuan" class="picarea"></div>
    </div>
    <div class="blockright">
      <div class="title-area">择业适应变化图</div>
      <div id="zeye" class="picarea"></div>
    </div>
  </div>

  <div class="block">
    <div class="blockleft">
      <div class="title-area">情绪适应变化图</div>
      <div id="qingxu" class="picarea"></div>
    </div>
    <div class="blockright">
      <div class="title-area">自我适应变化图</div>
      <div id="ziwo" class="picarea"></div>
    </div>
  </div>

  <div class="block">
    <div class="blockleft">
      <div class="title-area">满意度变化图</div>
      <div id="manyi" class="picarea"></div>
    </div>
    <div class="blockright">
      <div class="title-area" style="color:green;font-style:italic">/*背后的故事*/</div>
			<div class="picarea"><img src="images/lw.png"/></div>
    </div>
  </div>

  <!--新的数据类型图-->
	<div class="blocktips">
		<p><strong>导语：下面是新的图表</strong></p>
  </div>
  <div class="block">
    <div class="blockleft">
      <div class="title-area">one</div>
      <div id="one" class="picarea"></div>
    </div>
    <div class="blockright">
      <div class="title-area">two</div>
      <div id="two" class="picarea"></div>
    </div>
  </div>

  <div class="block">
    <div class="blockleft">
      <div class="title-area">three</div>
      <div id="three" class="picarea"></div>
    </div>
    <div class="blockright">
      <div class="title-area">three_one</div>
      <div id="three_one" class="picarea"></div>
    </div>
  </div>
</div>
<!--footer 信息-->
<div id="footer">
<div style="padding:10px;">
<p>中国地质大学（武汉）心理咨询中心</p>
<p>湖北省武汉市洪山区鲁磨路388号 电话：027-67883547</p>
<p>技术支持：<a href="http://yqc.im" target="_blank">尹全超</a>&nbsp;& &nbsp;<a href="http://team.pustone.com" target="_blank">701工作室</a></p>
</div>
</div>
</body>
</html>
