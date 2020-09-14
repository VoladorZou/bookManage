<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID = "register";
$name = $_GET['name'];
$password = $_GET['password'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$insertSQL = "insert into administrator(name,password) values('$name','$password')";
$inserted = mysql_query($insertSQL,$serverLink);
if($inserted){
	echo "<script> alert('注册成功！');</script>";
	header("Location: ./login.php?pageID=$pageID");
}else echo"<script>alert('注册失败！');</script>";	
?>