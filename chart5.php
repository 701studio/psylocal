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
<title>5.社会资源_问卷反馈</title>
<link rel="stylesheet" href="style.css"/>
<link rel="shortcut icon" href="/images/favicon.ico"/>
<script type="text/javascript" src="/js/jq.js"></script>
<script type="text/javascript" src="/js/h.js"></script>
<script type="text/javascript" src="/js/hm.js"></script>
<script type="text/javascript">
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
    if(render=="three")
    {return <?php getNet("three");?>;}
  }

	$(document).ready(function() {
    var cm3;
    displaynet(cm3,"three",['学校支持(5分)','家庭支持(5分)','同伴支持(5分)','社会支持(5分)'],5);
  });
</script>
</head>
<body>
<div id="topwc">
	<span class="topwcleft"><strong><?php echo "欢迎您 ".$_SESSION['username'].","?></strong>&nbsp;<a href='loginout.php'>退出登录</a></span>
  <span class="topwcrt"><strong>Tips:如果数据出现为零的情况，说明问卷无效</strong></span>
</div>
<div id="outfrm">
  <div class="blocktips">
		<p><strong>第五部分：社会资源</strong></p>
    <p class="txindent">
      社会资源一般被认为是社会支持的一部分。一个人所拥有的社会资源越丰富，在逆境或压力状况下，其心理复原力会越好。
    </p>
		<p class="txindent">
		我们在本次调研中共考场了4个部分的社会资源：家庭资源、学校资源、社会资源和同伴资源。你的得分越高，表明你感受到的外界对你的支持力量越好。
		</p>
  </div>
  
  <!--新的数据类型图-->
  <div class="block">
    <div class="blockleft">
      <div class="title-area">社会资源</div>
      <div id="three" class="picarea"></div>
    </div>
    <div class="blockright">
      <div class="title-area">Links</div>
      <div class="picarea">
			  <div class="pic_left">
					<a href="index.php">返回首页</a>
					<a href="chart1.php">1.大学生活的适应状况</a>
					<a href="chart2.php">2.大五人格</a>
					<a href="chart3.php">3.心理弹性</a>
					<a href="chart4.php">4.应对方式</a>
					<a href="chart5.php">5.社会资源</a>
				</div>
				<img src="images/lw.png"/>
			</div>
    </div>
  </div>

</div>
<!--footer 信息-->
<div id="footer_con">
<div style="padding:10px;">
<p>中国地质大学（武汉）心理咨询中心</p>
<p>湖北省武汉市洪山区鲁磨路388号 电话：027-67883547</p>
<p>本站主机由中国地质大学官方论坛&nbsp;<a href="http://bbs.cug.edu.cn" target="_blank">侏罗纪公园</a>&nbsp;友情赞助</p>
<div id="qi"><p>技术支持：<a>701工作室</a></p>
	<div id="hide">
	<image src="images/701.gif">
	<div>
	O:<a href="http://team.pustone.com" target="_blank">701工作室</a></br>
	M:<a href="http://yqc.im" target="_blank">尹全超</a> <a href="http://luoohao.com/" target="_blank">罗浩</a> <a href="http://cugxxz.tk/" target="_blank">徐晓舟</a>
	</div>
	</div>
</div>
<p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=61817708&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:61817708:42" alt="点击这里给我发消息" title="点击这里给我发消息"></a></p>
</div>
</div>
</body>
</html>
