<?php
header("Content-Type:text/html;charset=utf-8");
$conn=mysql_connect("localhost","root","");
mysql_select_db("library",$conn);
$username=$_POST['username'];
$pass=$_POST['pass'];
if($username==null||$pass==null)
{
die("<script>alert('用户名或密码为空，注册失败!');location='sign_up.php';</script>");
}
$sql="select *from users";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
while($row)
{
	if($row[0]==$username)
	{
		die("<script>alert('该管理员已被注册!');location='sign_in.php';</script>");
	}
	$row=mysql_fetch_row($result);
}
$sql="insert into users values('$username','$pass')";
$result=mysql_query($sql);
die("<script>alert('您已添加成功!');location='sign_in.php';</script>");
?>
