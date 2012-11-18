<?php
session_start();
if ($_SESSION['username']==""){
  header("Location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"charset="UTF-8" />
<title>调查问卷结果显示</title>
</head>
<body>
<?php echo "用户".$_SESSION['username'].",欢迎您"?>
<a href='loginout.php'>注销登录</a>
</body>
</html>
