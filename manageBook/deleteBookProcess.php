<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID="deleteBook";
$bookName = $_GET['bookName'];
echo $bookName;
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$deleteSQL = "delete from book where bookName='$bookName' ";
$deleted = mysql_query($deleteSQL,$serverLink);
if($deleted){
	echo "<script> alert('删除成功!');</script>";
	header("Location: ./browseBook.php?pageID=$pageID");
}else echo "<script>alert('删除失败！');</script>";
$close = @mysql_close($serverLink);
?>
<center><a href="main.php?pageID=$pageID">回到图书借阅管理系统主页面</a></center>