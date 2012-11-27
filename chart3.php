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
<title>3.心理弹性_问卷反馈</title>
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
    if(render=="two")
    {return <?php getNet("two");?>;}
  }

	$(document).ready(function() {
    var cm2;
    displaynet(cm2,"two",['自我知觉(7分)','计划未来(7分)','社会能力(7分)','规划风格(7分)','家庭凝聚力(7分)','社会资源(7分)'],7);
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
		<p><strong>第三部分：心理弹性</strong></p>
    <p class="txindent">
      “心理弹性”比喻成一种精神上的免疫系统。它与身体免疫系统最大的相似之处在于，二者都是急性系统，专门为短期、即时的威胁而设计，身体免疫系统应对的是突然入侵的细菌、毒素，而心理免疫系统应对的则是突如其来的心理压力及其所造成的情绪反应，如恐惧、焦虑、悲伤。
    </p>
		<p class="txindent">
		在成人心理弹性问卷部分，共考察了6个维度的心理弹性：自我知觉(或者叫个人力量)、计划未来、社会能力、规划风格、家庭凝聚力和社会资源。
		</p>
    <li>
      <span style="color:red;">1.自我知觉</span>
      自我知觉得分较高者，表明对自己的个人能力有较高的评价，在解决问题方面更为有自信。
    </li>
    <li>
      <span style="color:red;">2.计划未来</span>
      计划未来得分较高者，表明对未来的规划有预见性。
    </li>
    <li>
      <span style="color:red;">3.社会能力</span>
      社会能力得分高者，体现了对自己社交能力的自我肯定。 
    </li>
    <li>
      <span style="color:red;">4.规划风格</span>
      规划风格得分高者，体现了在生活中规划和整理的能力。 
    </li>
    <li>
      <span style="color:red;">5.家庭凝聚力</span>
      家庭凝聚力得分高者，表示个人有很好的家庭支持系统。
    </li>
		<li>
      <span style="color:red;">6.社会资源</span>
      社会资源得分高者，表示个人所拥有的社会关系支持力度较好。
    </li>
		<p><strong>在提高心理弹性方面，我们建议：</strong></p>
		<p class="txindent">
		一、提高个人的抗压品质 从提升自我开始，主动去学习社交的技巧，让自己看上去更加亲和、可信赖；定期设定一些学习目标，能力的增强会带给你自信和自尊，在面对困境的时候，你就能够找到更多的解决方案。
		</p>
		<p class="txindent">
		二、保持与家庭成员的紧密联系 安排出一些能够和家人共享的时光，也可以将你的烦恼适度地与家人讨论，讨论你希望家人在你遇到困难时的支持方式。
		</p>
		<p class="txindent">
		三、建立宽广的人际网络并学会寻求帮助 宅生活不适合你发展自己的心理弹性，走出房门呼吸屋外的空气，隔三差五地邀请老同学新同事一起聚会，分享彼此的生活与工作经验。在别人有需要的时候及时提供力所能的帮助；当你遭遇困境的时候，也不要感到害羞，要寻求可能的帮助。
		</p>
  </div>
  
  <!--新的数据类型图-->
  <div class="block">
    <div class="blockleft">
      <div class="title-area">心理弹性</div>
      <div id="two" class="picarea"></div>
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
