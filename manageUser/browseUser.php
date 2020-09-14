<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
$pageID = $_GET['pageID'];
if($pageID=="deleteBook"){
	echo "<script> alert('删除图书信息成功！');</script>";
}
if($pageID=="deleteUser"){
	echo "<script> alert('删除会员信息成功！');</script>";
}
$pageID="";
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");
$selectSQL = "select * from user";
$resultSet = mysql_query($selectSQL);
?>
<html>
<h4 align='center'><font color='green'>所有会员信息如下：</font></h4>
<hr color='red'/>
<form>
<table border='1px' align='center'>
<tr><td align="center">姓名</td><td align="center">性别</td></tr>
<?php
while($i = mysql_fetch_array($resultSet)){
		$userName = $i['userName'];
		$userSex = $i['userSex'];
?>
<tr><td><?php echo $userName ?></td><td><?php echo $userSex ?></td></tr>
<?php
}
?>
</table>
<center><a href="manageUser.php?pageID=$pageID">回到会员管理页面</a></center>
</form>
</html>