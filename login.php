<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>心理咨询中心调查反馈系统</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script src="http://www.w3school.com.cn//jquery/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#submit").click(function(){
				var user=username.value;
				var pwd=userpass.value;
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
			});
		});

		function reset()
		{
			username.value="";
			userpass.value="";
			result.innerHTML="";
		}
	</script>
</head>

<body>
<div id="title">
<h1>心理咨询中心反馈系统</h1>
</div>
<div id="login" name="login">
<div id="top">
<img src="images/login.png" >
</div>
			<div id = "user">
					<div id="lg-un">
						<label class="text">学号:</label><input name="username" type="text" class="input" id="username" required="required" placeholder="用户名"/>
					</div>
					<div id="lg-pw">
						<label class="text">密码:</label><input name="userpass" type="password" class="input" id="userpass" required="required" placeholder="用户密码"/>
					</div>
					<div id="but">
							<input type="submit" name="Submit" value="提交" class="button" id="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" name="Submit2" value="重置" class="button" onclick="reset();"/>
					</div>
					<div id="result"></div>
			</div>
</div>

</body>
</html>
