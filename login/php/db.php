<?php
mysql_connect("localhost","root","") or die("数据库连接失败：".mysql_error());
mysql_select_db("Emperor_terrace") or die("选择数据库失败：".mysql_error());
mysql_query("set names utf8") or die("字符编码设置失败：".mysql_error());
?>