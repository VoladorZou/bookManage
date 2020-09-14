<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$userID = $_GET['userID'];
$userName = $_GET['userName'];
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$selectSQL = "select * from user";
$resultSet = mysql_query($selectSQL);
?>
<html>
<h4 align='center'><font color='green'>您所查询的会员信息如下：</font></h4>
<hr color='red'/>
<form>
<table border='1px' align='center'>
<tr><td align="center">会员编号</td><td align="center">会员姓名</td><td align="center">会员性别</td></tr>
<?php
$count=0;
while($i = mysql_fetch_array($resultSet)){
	if($i['userID']==$userID||$userName==$i['userName']){
		$searcheduserID = $i['userID'];
		$searcheduserName = $i['userName'];
		$searcheduserSex = $i['userSex'];
	$count++;
?>
<tr>
<td><?php echo $searcheduserID ?></td>
<td><?php echo $searcheduserName ?></td>
<td><?php echo $searcheduserSex ?></td></tr>
<?php
	}
}
if($count=0){
echo "<script> alert('没有找到所查询的会员信息！');</script>";
}
?>
</table>
<center><a href="manageUser.php">回到会员管理页面</a></center>
</form>
</html>