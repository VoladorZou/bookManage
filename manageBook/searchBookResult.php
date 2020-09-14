<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$bookID = $_GET['bookID'];
$bookName = $_GET['bookName'];
$press = $_GET['press'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$selectSQL = "select * from book";
$resultSet = mysql_query($selectSQL);
?>
<html>
<h4 align='center'><font color='green'>您所查询的图书信息如下：</font></h4>
<hr color='red'/>
<form>
<table border='1px' align='center'>
<tr><td align="center">图书编号</td><td align="center">书名</td>
<td align="center">出版社</td><td align="center">数量</td></tr>
<?php
$count=0;
while($i = mysql_fetch_array($resultSet)){
	if($i['bookID']==$bookID||$bookName==$i['bookName']||$press==$i['press']){
		$searchedbookID = $i['bookID'];
		$searchedbookName = $i['bookName'];
		$searchedpress = $i['press'];
		$searchedbookNum = $i['bookNum'];
	$count++;
?>
<tr>
<td><?php echo $searchedbookID ?></td>
<td><?php echo $searchedbookName ?></td>
<td><?php echo $searchedpress ?></td>
<td><?php echo $searchedbookNum ?></td></tr>
<?php
	}
}
if($count=0){
echo "<script> alert('没有找到所查询的图书信息！');</script>";
}
?>
</table>
<center><a href="manageBook.php">回到图书管理页面</a></center>
</form>
</html>