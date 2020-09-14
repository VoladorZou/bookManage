<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID="addBookProcess";
$userID= $_GET['userID'];
$bookID = $_GET['bookID'];
$returnDay = $_GET['returnDay'];
$state = "已归还";
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$updateSQL = "update borrowbook 
              set state = '$state', returnDay='$returnDay' 
			  where bookID='$bookID' ";
$updated = mysql_query($updateSQL,$serverLink);
$updateBookSQL = "update book 
              set bookNum=bookNum+1 
			  where bookID='$bookID' ";
$updatedBook = mysql_query($updateBookSQL,$serverLink);
if($updated){
	echo "<script> alert('归还图书成功！');</script>";
	header("Location: ../manageUser/borrowBookInfo.php?pageID=$pageID");
}else echo"<script>alert('归还图书失败！');</script>";	
?>