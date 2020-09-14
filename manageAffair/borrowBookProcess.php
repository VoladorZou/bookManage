<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID="addBookProcess";
$userID= $_GET['userID'];
$bookID = $_GET['bookID'];
$borrowDay = $_GET['borrowDay'];
$timeLimit = $_GET['timeLimit'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$insertSQL = "insert into borrowbook(bookID,userID,borrowDay,timeLimit,state) 
values('$bookID','$userID','$borrowDay','$timeLimit','借出中')";
$inserted = mysql_query($insertSQL,$serverLink);

if($timeLimit=="一周"){
	$update01SQL = "update borrowbook set shouldDay=adddate(borrowDay,interval 7 day)
	where bookID='$bookID' and userID='$userID' ";
    $updat01ed = mysql_query($update01SQL,$serverLink);
}
if($timeLimit=="一个月"){
	$update02SQL = "update borrowbook set shouldDay=adddate(borrowDay,interval 30 day)
	where bookID='$bookID' and userID='$userID' ";
    $updat02ed = mysql_query($update02SQL,$serverLink);
}

$updateSQL = "update book 
              set bookNum=bookNum-1 
			  where bookID='$bookID' ";
$updated = mysql_query($updateSQL,$serverLink);
if($inserted){
	echo "<script> alert('借阅图书成功！');</script>";
	header("Location: ../manageUser/borrowBookInfo.php?pageID=$pageID");
}else echo"<script>alert('借阅图书失败！');</script>";	
?>