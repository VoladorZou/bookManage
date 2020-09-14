<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$selectSQL = "select * from firmInfo";
$resultSet = mysql_query($selectSQL);
?>
<html>
<h4 align='center'><font color='green'>欢迎与我们取得联系！</font></h4>
<hr color='red'/>
<form>
<table border='1px' align='center'>
<tr><td align="center">单位名称</td><td align="center">负责人</td><td align="center">办公地点</td><td align="center">联系电话</td></tr>
<?php
while($i = mysql_fetch_array($resultSet)){
		$firmName = $i['firmName'];
		$chairman = $i['chairman'];
		$address = $i['address'];
		$phoneNum = $i['phoneNum'];
?>
<tr><td><?php echo $firmName ?></td><td><?php echo $chairman ?></td><td><?php echo $address ?></td><td><?php echo $phoneNum ?></td></tr>
<?php
}
?>
</table>
<center><a href="main.php?pageID=$pageID">回到主页面</a></center>
</form>
</html>