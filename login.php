<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>心理咨询中心调查反馈系统</title>
<link rel="shortcut icon" href="/images/favicon.ico"/>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="/js/jq.js"></script>
<script type="text/javascript" src="/js/tp.js"></script>
<link rel="stylesheet" href="tp.css" type="text/css"/>
<script type="text/javascript">
	$(document).ready(function(){
		$('.tooltip').tooltipster({
			position: 'bottom-left'
		});
		$("#submit").click(function(){
			var user=$.trim(username.value);
			var pwd=$.trim(userpass.value);
			if(isNO())
			{
				$.ajax({
				url:'logincheck.php',
				type:'post',
				dataType:'json',
				data:{username:user,userpass:pwd},
				success:function(resp){
					if(resp['status']==='yes')
					{
						location='index.php';
					}
					else
					{
						document.getElementById("result").innerHTML=resp['msg'];
					}
				}	
				});
			}
			
		});
	});
	function  isNO(){
		//学号长度必须是11位
		var user=$.trim(username.value);
		if(user.length!=11)
		{
			document.getElementById("result").innerHTML="输入长度有误，请重新输入";
			return false;
		}
		//并且必须是数字
		else
		{
			if(isNaN(user))
			{
				document.getElementById("result").innerHTML="必须是数字，请重新输入";
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	function reset()
	{
		username.value="";
		userpass.value="";
		result.innerHTML="";
	}
</script>
</head>

<body>
<div id="container">

<div id="title">
<h1>心理咨询中心反馈系统</h1>
</div>
<div id="login" name="login">
<div id="top">
<img src="images/login.png" >
</div>
			<div id = "user">
					<div id="lg-un">
						<label class="text" for="username">学号:</label><input name="username" type="text" class="input" id="username" required="required" placeholder="用户名"/>
					</div>
					<div id="lg-pw">
						<label class="text" for="userpass">密码:</label><input name="userpass" type="password" class="input" id="userpass" required="required" placeholder="用户密码"/>
					</div>
					<div id="but">
							<input type="submit" name="Submit" value="提交" class="button" id="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" name="Submit2" value="重置" class="button" onclick="reset();"/>
					</div>
					<a href="javascript:void(0);" class="tooltip" title="如果未设置密码，可以尝试默认密码，即学号。">无法登录？</a>
					<div id="result"></div>
			</div>
</div>
<div id="hd_tccccc"></div>
<div id="footer">
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

</div>
</body>
</html>
