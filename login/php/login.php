<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	include("db.php");
    $user_name=$_POST['user_name'];
    $user_pwd=$_POST['user_pwd'];
    $sql="select * from user where user_name='$user_name' and user_pwd='$user_pwd'";
    $result=mysql_query($sql) or die ("执行失败".mysql_error());
    if(mysql_num_rows($result)>0){
        echo "<script>alert('登陆成功');window.location.href='../demo/a.html';</script>";
        }
        else{
        echo "<script>alert('登陆失败');window.location.href='../demo/login_page.html';</script>";
        }		
?>
</body>
</html>