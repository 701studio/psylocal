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
</head>
<body>
<div id="topwc">
	<span class="topwcleft"><strong><?php echo "欢迎您 ".$_SESSION['username'].","?></strong>&nbsp;<a href='loginout.php'>退出登录</a></span>
  <span class="topwcrt"><strong>Tips:如果数据出现为零的情况，说明问卷无效</strong></span>
</div>
<div class="blocktips">
  <p><strong>亲爱的同学：</strong></p>
  <p class="txindent">你好!</p>
  <p class="txindent">
    首先感谢你认真参与了我们的实验调查，我们此次研究是关于大学生个人的心理弹性和他们在大学入学初期的适应状况。   
    我们将你个人填写问卷的结果和整体的平均水平进行了比较,一共分为下面五个部分。<span style="color:red">点击链接即可查看具体结果。</span> 
  </p>
</div>
<div id="index_frm">
<div class="index_bk">
<h1><a href="chart1.php" target="_blank">第一部分</a></h1>
<h2>大学生活的适应状况</h2>
</div>
<div class="index_bk">
<h1><a href="chart2.php" target="_blank">第二部分</a></h1>
<h2>大五人格</h2>
</div>
<div class="index_bk">
<h1><a href="chart3.php" target="_blank">第三部分</a></h1>
<h2>心理弹性</h2>
</div>
<div class="index_bk">
<h1><a href="chart4.php" target="_blank">第四部分</a></h1>
<h2>应对方式</h2>
</div>
<div class="index_bk">
<h1><a href="chart5.php" target="_blank">第五部分</a></h1>
<h2>社会资源</h2>
</div>
<div class="index_bk_logo">
<img src="images/logo.png"/>
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
