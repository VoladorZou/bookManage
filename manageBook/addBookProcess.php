<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID="addBookProcess";
$bookID = $_GET['bookID'];
$bookName = $_GET['bookName'];
$press = $_GET['press'];
$bookNum = $_GET['bookNum'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$insertSQL = "insert into book(bookID,bookName,press,bookNum) 
values('$bookID','$bookName','$press','$bookNum')";
$inserted = mysql_query($insertSQL,$serverLink);
if($inserted){
	echo "<script> alert('增加图书成功！');</script>";
	header("Location: ./browseBook.php?pageID=$pageID");
}else echo"<script>alert('增加图书失败！');</script>";	
?>