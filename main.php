<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
//$name = $_GET['name'];
$pageID = $_GET['pageID'];
//1. 怎样实现弹框提示“XX登录成功！”
if($pageID=="login"){
	echo "<script> alert('登录成功！');</script>";
}
date_default_timezone_set("Asia/Shanghai");
echo "现在是(北京时间): " . date("Y年m月d日 h时:i分:sa");
//include("time.php");
?>
<html>
<h4 align='center' >图书借阅管理系统</h4>
<form action="">
<table border='1px' align='center'>
<tr><td align="center"><a href="manageBook/manageBook.php">图书管理</a></td></tr>
<tr><td align="center"><a href="manageUser/manageUser.php">会员管理</a></td></tr>
<tr><td align="center"><a href="manageAffair/manageAffair.php">业务管理</a></td></tr>
</table>
</form>
<center><a href="login.php">切换登录账号</a></center>
<center><a href="contactUs.php">联系我们</a></center>
</html>

