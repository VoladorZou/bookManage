<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
echo "<script> alert('请填写您的信息');</script>";
?>
<html>
<h4 align='center' >注册用户</h4>
<form action="registerProcess.php">
<table border='1px' align='center'>
<tr><td align="right">姓名：</td><td><input type="text" name="name"/></td></tr>
<tr><td align="right">密码：</td><td><input type="text" name="password"/></td></tr>
<tr>
<td align="right"><input type="submit" value="提交"/></td>
<td><input type="reset" value="重置"/></td></tr>
</table>
</form>
</html>