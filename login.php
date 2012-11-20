<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>心理咨询中心调查反馈系统</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://<?php echo $_SERVER["HTTP_HOST"];?>/js/jq.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
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
					<div id="result"></div>
			</div>
</div>

</body>
</html>
