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
<title>2.大五人格_问卷反馈</title>
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
    if(render=="one")
    {return <?php getNet("one");?>;}
  }

	$(document).ready(function() {
    var cm1;
    displaynet(cm1,"one",['外倾性(5分)','宜人性(5分)','责任感(5分)','神经质(5分)','开放性(5分)'],5);
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
		<p><strong>第二部分：大五人格</strong></p>
    <p class="txindent">
      心理学中将人与人之间的性格差异总结为人格差异。人格结构中的五个因素后来被称为“大五”（big five），强调该人格模型中每一维度的广泛性。这五个维度因素是神经质（N）、外倾性（E）、经验开放性（O）、宜人性（A）和尽责性（C）。 每个人的五因素组合不同，就表现出不同的性格特点。
    </p>
    <li>
      <span style="color:red;">1.神经质</span>
      神经质反映个体情感调节过程，反映个体体验消极情绪的倾向和情绪不稳定性。高神经质个体倾向于有心理压力，不现实的想法、过多的要求和冲动，更容易体验到诸如愤怒、焦虑、抑郁等消极的情绪。他们对外界刺激反应比一般人强烈，对情绪的调节、应对能力比较差，经常处于一种不良的情绪状态下。并且这些人思维、决策、以及有效应对外部压力的能力比较差。相反，神经质维度得分低的人较少烦恼，较少情绪化，比较平静。神经质有六个子维度，对于每个子维度都有一些说明性的形容词。
    </li>
    <li>
      <span style="color:red;">2.开放性</span>
      开放性描述一个人的认知风格。对经验的开放性被定义为：为了自身的缘故对经验的前摄（proactive）寻求和对的理解，以及对陌生情境的容忍和探索。这个维度将那些好奇的、新颖的、非传统的以及有创造性的个体与那些传统的、无艺术兴趣的、无分析能力的个体做比较。开放性的人偏爱抽象思维，兴趣广泛。封闭性的人讲求实际，偏爱常规，比较传统和保守。开放性的人适合教授等职业，封闭性的人适合警察、销售、服务性职业等。
    </li>
    <li>
      <span style="color:red;">3.外倾性</span>
      外倾性是用来表示人际互动的数量和密度、对刺激的需要以及获得愉悦的能力。这个维度将社会性的、主动的、个人定向的个体和沉默的、严肃的、腼腆的、安静的人作对比。这个方面可由两个品质加以衡量：人际的卷入水平和活力水平。前者评估个体喜欢他人陪伴的程度，而后者反映了个体个人的节奏和活力水平。 
    </li>
    <p class="txindent">
      外向的人喜欢与人接触，充满活力，经常感受到积极的情绪。他们热情，喜欢运动，喜欢刺激冒险。在一个群体当中，他们非常健谈，自信，喜欢引起别人的注意。
    </p>
    <p class="txindent">
      内向的人比较安静，谨慎，不喜欢与外界过多接触。他们不喜欢与人接触不能被解释为害羞或者抑郁，这仅仅是因为比起外向的人，他们不需要那么多的刺激，因此喜欢一个人独处。内向人的这种特点有时会被人误认为是傲慢或者不友好，其实一旦和他接触你经常会发现他是一个非常和善的人。
    </p>
    <li>
      <span style="color:red;">4.宜人性</span>
      宜人性是考察个体对其他人所持的态度，这些态度一方面包括亲近人的、有同情心的、信任他人的、宽大的、心软的，另一方面包括敌对的、愤世嫉俗的、爱摆布人的、复仇心重的、无情的。这里所说的广义的人际定向范围。宜人性代表了“爱”，对合作和人际和谐是否看重。宜人性高的人是善解人意的、友好的、慷慨大方的、乐于助人的，愿意为了别人放弃自己的利益。宜人性高的人对人性持乐观的态度，相信人性本善。宜人性低的人则把自己的利益放在别人的利益之上。本质上，他们不关心别人的利益，因此也不乐意去帮助别人。有时候，他们对别人是非常多疑的，怀疑别人的动机。 
    </li>
    <p class="txindent">
      对于某些职位来说，太高的宜人性是没有必要的，尤其是需要强硬和客观判断的场合，例如科学家、评论家和士兵。 
    </p>
    <li>
      <span style="color:red;">5.尽责性</span>
      尽责性指我们控制、管理和调节自身冲动的方式，评估个体在目标导向行为上的组织、坚持和动机。它把可信赖的、讲究的个体和懒散的、马虎的个体作比较。同时反映个体自我控制的程度以及推迟需求满足的能力。冲动并不一定就是坏事，有时候环境要求我们能够快速决策。冲动的个体常被认为是快乐的、有趣的、很好的玩伴。但是冲动的行为常常会给自己带来麻烦，虽然会给个体带来暂时的满足，但却容易产生长期的不良后果，比如攻击他人，吸食毒品等等。冲动的个体一般不会获得很大的成就。谨慎的人容易避免麻烦，能够获得更大的成功。人们一般认为谨慎的人更加聪明和可靠，但是谨慎的人可能是一个完美主义者或者是一个工作狂。极端谨慎的个体让人觉得单调、乏味、缺少生气。
    </li>
  </div>
  
  <!--新的数据类型图-->
  <div class="block">
    <div class="blockleft">
      <div class="title-area">大五人格</div>
      <div id="one" class="picarea"></div>
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
