<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
echo "提示：图书馆规定只允许续借一个星期"
?>
<html>
<h4 align='center' >续借</h4>
<form action="renewBookProcess.php">
<table border='1px' align='center'>
<tr><td align="right">续借人编号：</td><td><input type="text" name="userID"/></td></tr>
<tr><td align="right">图书编号：</td><td><input type="text" name="bookID"/></td></tr>
<tr>
<td align="right"><input type="submit" value="提交"/></td>
<td><input type="reset" value="重置"/></td></tr>
</table>
</form>
</html>