<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
date_default_timezone_set("Asia/Shanghai");
echo "今天是: " . date("Y年m月d日");
$pageID = "";
if($pageID=="deleteBook"){
	echo "<script> alert('删除图书成功！');</script>";
}
$pageID="";
$serverLink = @mysql_connect("localhost","root","root") or die("连接失败！");
//mysql_query("set names 'gbk'");
$dbLink = @mysql_select_db("bookmanage",$serverLink) or die("选择当前数据库失败！程序中断执行！");

$update01SQL = "update borrowbook set state='逾期' where state='借出中' and datediff(curdate(),shouldDay)>0";
$updat01ed = mysql_query($update01SQL,$serverLink);
$selectSQL = "select * from borrowbook";
$resultSet = mysql_query($selectSQL);
$selectBookSQL = "select * from book";
$resultBookSet = mysql_query($selectBookSQL);
$selectUserSQL = "select * from user";
$resultUserSet = mysql_query($selectUserSQL);
?>
<html>
<h4 align='center'><font color='green'>借书信息</font></h4>
<hr color='red'/>
<form>
<table border='1px' align='center'>
<tr><td align="center">书名</td><td align="center">用户名</td>
<td align="center">借书日期</td><td align="center">借阅期限</td><td align="center">状态</td>
<td align="center">归还日期</td><td align="center">应还日期</td></tr>
<?php
while($i = mysql_fetch_array($resultSet)){
	mysql_data_seek($resultBookSet,0);//指针复位
	mysql_data_seek($resultUserSet,0);//指针复位
		while($j = mysql_fetch_array($resultBookSet)){
			if($i['bookID']==$j['bookID']){
				$bookName = $j['bookName'];
			}
		}
		while($k = mysql_fetch_array($resultUserSet)){
			if($i['userID']==$k['userID']){
				$userName = $k['userName'];
			}
		}
		$borrowDay = $i['borrowDay'];
		$returnDay = $i['returnDay'];
		$timeLimit = $i['timeLimit'];
		$state = $i['state'];
		$shouldDay = $i['shouldDay'];
?>
<tr><td><?php echo $bookName ?></td><td><?php echo $userName ?></td>
<td><?php echo $borrowDay ?></td><td><?php echo $timeLimit ?></td><td><?php echo $state ?></td>
<td><?php if($returnDay!="0000-00-00"){
                echo $returnDay;
            } ?></td>
<td><?php 
          if($shouldDay!="0000-00-00"){
                echo $shouldDay;
            } ?></td></tr>
<?php
}
?>
</table>
<center><a href="manageUser.php?pageID=$pageID">回到用户管理页面</a></center>
</form>
</html>