<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<html>
<h4 align='center' >借书</h4>
<form action="borrowBookProcess.php">
<table border='1px' align='center'>
<tr><td align="right">借书人编号：</td><td><input type="text" name="userID"/></td></tr>
<tr><td align="right">图书编号：</td><td><input type="text" name="bookID"/></td></tr>
<tr><td align="right">借书日期：</td><td><input type="text" name="borrowDay"/></td></tr>
<tr><td align="right">借阅期限：</td><td><input type="radio" name="timeLimit" value="一周"/>一周
<input type="radio" name="timeLimit" value="一个月"/>一个月</td></tr>
<tr>
<td align="right"><input type="submit" value="提交"/></td>
<td><input type="reset" value="重置"/></td></tr>
</table>
</form>
</html>