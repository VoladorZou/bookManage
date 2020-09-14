<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$userID = $_GET['userID'];
$userName = $_GET['userName'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookManage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
if(!empty($userName)||!empty($userID)){
	$sql="select * from user where userName='$userName'";
	$resultSet = mysql_query($sql);
	if(mysql_num_rows($resultSet)>0)
	{
		header("Location: ./searchUserResult.php?userName=$userName&userID=$userID");
	}
	$sql="select * from user where userID='$userID'";
	$resultSet = mysql_query($sql);
	if(mysql_num_rows($resultSet)>0)
	{
		header("Location: ./searchUserResult.php?userName=$userName&userID=$userID");
	}
	echo "<script> alert('没有找到所查找的图书信息！');</script>";
}else echo "<script> alert('请输入相关信息！');</script>";
?>
<center><a href="manageUser.php">回到会员管理页面</a></center>