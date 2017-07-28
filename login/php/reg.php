<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	include("dp.php");
	$user_name=$_POST['user_name'];
	$user_pwd=$_POST['user_pwd'];
	$user_Real_name=$_POST['user_Real_name'];
	$tel=$_POST['tel'];
	$sql="insert into user values(null,'$user_name','$user_pwd','$user_Real_name','$tel')";
	$result=mysql_query($sql) or die("<script>alert('注册失败'); window.location.href='../demo/reg.html';</script>").mysql_error();
	echo "<script>alert('注册成功');window.location.href='../demo/login.html';</script>";
?>
</body>
</html>