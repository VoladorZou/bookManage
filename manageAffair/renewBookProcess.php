<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID="renewBookProcess";
$userID= $_GET['userID'];
$bookID = $_GET['bookID'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$selectSQL = "select * from borrowbook where bookID='$bookID' and userID='$userID' ";
$resultSet = mysql_query($selectSQL);
while($i = mysql_fetch_array($resultSet)){
	if($i['state']=="已归还"){
		echo "<script> alert('已归还的图书不能进行续借！');</script>";
	}else {
		$updateSQL = "update borrowbook 
              set state = '续借', returnDay=NULL, shouldDay=adddate(shouldDay,interval 7 day)
			  where bookID='$bookID' and userID='$userID' ";
        $updated = mysql_query($updateSQL,$serverLink);
        if($updated){
	       echo "<script> alert('续借图书成功！');</script>";
	       header("Location: ../manageUser/borrowBookInfo.php?pageID=$pageID");
        }else echo"<script>alert('续借图书失败！');</script>";	
	}
}
?>
<center><a href="renewBook.php?pageID=$pageID">回到续借页面</a></center>