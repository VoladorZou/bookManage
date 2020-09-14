<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID = $_GET['pageID'];
if($pageID=="deleteBook"){
	echo "<script> alert('删除图书成功！');</script>";
}
$pageID="";
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$selectSQL = "select * from book";
$resultSet = mysql_query($selectSQL);
?>
<html>
<h4 align='center'><font color='green'>馆藏图书信息如下：</font></h4>
<hr color='red'/>
<form>
<table border='1px' align='center'>
<tr><td align="center">书名</td><td align="center">出版社</td><td align="center">库存</td></tr>
<?php
while($i = mysql_fetch_array($resultSet)){
		$bookID = $i['bookID'];
		$bookName = $i['bookName'];
		$press = $i['press'];
		$bookNum = $i['bookNum'];
?>
<tr><td><?php echo $bookName ?></td><td><?php echo $press ?></td><td><?php echo $bookNum ?></td></tr>
<?php
}
?>
</table>
<center><a href="manageBook.php?pageID=$pageID">回到图书管理页面</a></center>
</form>
</html>