<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID="addUserProcess";
$userID = $_GET['userID'];
$userName = $_GET['userName'];
$userSex = $_GET['userSex'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$insertSQL = "insert into user(userID,userName,userSex) 
values('$userID','$userName','$userSex')";
$inserted = mysql_query($insertSQL,$serverLink);
if($inserted){
	echo "<script> alert('增加会员成功！');</script>";
	header("Location: ./browseuser.php?pageID=$pageID");
}else echo"<script>alert('增加会员失败！');</script>";	
?>