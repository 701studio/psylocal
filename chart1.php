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
<title>1.大学生活的适应状况_问卷反馈</title>
<link rel="stylesheet" href="style.css"/>
<link rel="shortcut icon" href="/images/favicon.ico"/>
<script type="text/javascript" src="/js/jq.js"></script>
<script type="text/javascript" src="/js/h.js"></script>
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

	$(document).ready(function() {
    var c1,c2,c3,c4,c5,c6,c7;
    display(c1,"renji"); 
    display(c2,"xuexi"); 
    display(c3,"xiaoyuan"); 
    display(c4,"zeye"); 
    display(c5,"qingxu"); 
    display(c6,"ziwo"); 
    display(c7,"manyi");
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
		<p><strong>第一部分：大学生活的适应状况</strong></p>
    <p class="txindent">
	大学阶段在个体一生的发展中具有非常重要的作用，是个体从青年期向成人期过渡和准备的时期，是从以学习为主到以工作为主的过渡和准备时期。个体对大学适应的好坏不仅影响其大学阶段的学习和生活，还会影响其成人后的工作和生活。有研究证明，大学的师生关系直接影响到步入社会后的人际关系，能够有效调节情绪和自我肯定的大学生在工作中有更突出的成就，心理承受能力差的大学生毕业后工作压力的问题更加突出。
	我们采用的是方晓义等编制的《中国大学生适应量表》，共有60 个项目，分为7 个大的维度，分别是人际关系适应、学习适应、校园生活适应、择业适应、情绪适应、自我适应和满意度。
  </p>
	<li>1.人际关系适应反映了你入学后在重建人际关系方面的能力和实际调整状况。</li>
	<li>2.学习适应反映了你从高中到大学的学习方式和内容转变过程中，对专业学习的适应情况。</li>
	<li>3.校园生活适应反映了你参加大学课余生活的情况。</li>
	<li>4.择业适应反映了你为将来就业所做的准备情况。</li>
	<li>5.情绪适应反映了你在大学生活时，你当前的情绪体验。</li>
	<li>6.自我适应反映了你对自己的生活状态所做的心态调整。</li>
	<li>7.满意度反映了你对当前生活状态的整体满意度。	</li>
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
