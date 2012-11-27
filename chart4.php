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
<title>4.应对方式_问卷反馈</title>
<link rel="stylesheet" href="style.css"/>
<link rel="shortcut icon" href="/images/favicon.ico"/>
<script type="text/javascript" src="/js/jq.js"></script>
<script type="text/javascript" src="/js/h.js"></script>
<script type="text/javascript">
  /**
	 * 显示柱状图函数
	 * 2012-11-25 By YQC
	 * 2.0
	*/
	function display(chart,render){
    chart = new Highcharts.Chart({
      chart:{
        renderTo: render,
        type: 'column',
        backgroundColor:'#F8F8F8'
      },
      title:{
        text:' '
      },
      xAxis: {
        categories: ["消极","积极"]
      },
      yAxis: {
        title: {
          text: '得分数据'
        }
      },
      tooltip: {
        crosshairs: true,
        shared: true
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
    if(render=="four")
    {return <?php getNet("four");?>;}
  }

	$(document).ready(function() {
    var cm4;
    display(cm4,"four"); 
  });
</script>
</head>
<body>
<div id="topwc">
	<span class="topwcleft"><strong><?php echo "欢迎您 ".$_SESSION['username'].","?></strong>&nbsp;<a href='loginout.php'>退出登录</a></span>
  <span class="topwcrt"><strong>Tips:如果数据出现为零的情况，说明问卷无效</strong></span>
</div>
<div id="outfrm">
  <div class="blocktips_1">
		<p><strong>第四部分：应对方式</strong></p>
    <p class="txindent">
      在社会生活中，每个人都会面对不可避免的各种压力情境，对个体的心理产生一定的影响。但相同的压力水平对不同的人影响是有很大差别的，这种影响差别主要取决于个体用什么样的方式来应对。 
    </p>
		<p class="txindent">
		一般认为应对是一种包含多种策略的、复杂的、多维的态度和行为过程。首先是对压力情境的认识，也就是态度，不同的态度足以引起压力情境对个体所产生的影响的程度和时间的差异。个体对所面临的压力的态度，是“知难而进”，把压力看作是一种挑战去解决；还是感到难事临头，把压力看作是一种负担。然后，在此基础上，个体对压力情境做出具体的行为，是积极地去解决问题，还是消极地去逃避，也会影响压力情景的后果。这些认知、态度以及行为上的差异就构成了个体面对压力情境时的应对方式的差异。
		</p>
		<p class="txindent">
		我们在本次调研中采用了特质应对方式问卷，考察了你个人的应对风格。积极应对得分较高的人，在面对压力情景时会采用积极解决问题的方式；消极应对得分较高的人，则可能倾向于回避问题。
		</p>
  </div>
  
  <!--新的数据类型图-->
  <div class="block">
    <div class="blockleft">
      <div class="title-area">应对方式</div>
      <div id="four" class="picarea"></div>
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
</div>
</div>
</body>
</html>
