<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$bookName = $_GET['bookName'];
$bookID = $_GET['bookID'];
$press = $_GET['press'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookManage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
if(!empty($bookName)||!empty($bookID)||!empty($press)){
	$sql="select * from book where bookName='$bookName'";
	$resultSet = mysql_query($sql);
	if(mysql_num_rows($resultSet)>0)
	{
		header("Location: ./searchBookResult.php?bookName=$bookName&bookID=$bookID&press=$press");
	}
	$sql="select * from book where bookID='$bookID'";
	$resultSet = mysql_query($sql);
	if(mysql_num_rows($resultSet)>0)
	{
		header("Location: ./searchBookResult.php?bookName=$bookName&bookID=$bookID&press=$press");
	}
	$sql="select * from book where press='$press'";
	$resultSet = mysql_query($sql);
	if(mysql_num_rows($resultSet)>0)
	{
		header("Location: ./searchBookResult.php?bookName=$bookName&bookID=$bookID&press=$press");
	}
	echo "<script> alert('没有找到所查找的图书信息！');</script>";
}
?>
<center><a href="manageBook.php">回到图书管理页面</a></center>