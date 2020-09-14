<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$name = $_GET['name'];
$password = $_GET['password'];
$pageID = $_GET['pageID'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookManage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
if(!empty($name)){
	$sql="select * from administrator where name='$name'";
	$resultSet = mysql_query($sql);
	if(mysql_num_rows($resultSet)<=0)
	{
		echo "<script> alert('用户名错误或用户不存在！');</script>";
	}
	$sql="select * from administrator where name='$name' and password!='$password'";
	$resultSet = mysql_query($sql);
	if(mysql_num_rows($resultSet)>0)
	{
		echo "<script> alert('密码错误！');</script>";
	}
	$sql="select * from administrator where name='$name' and password='$password'";
	$resultSet = mysql_query($sql);
	if(mysql_num_rows($resultSet)>0)
	{
		header("Location: ./main.php?pageID=$pageID&name=$name");
	}
}
?>
<center><a href="login.php">回到登录页面</a></center>
<center><a href="register.php">立即注册</a></center>