<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
require_once ("include.php");

$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];

if($_SESSION['username'] == '')
{
	exit('用户名不能为空');
}
if($_SESSION['password'] == '')
{
	exit('密码不能为空');
}

$sql="select * from  admin where username = '$_SESSION[username]'";
$rs = mysql_query($sql);
$row = mysql_fetch_row($rs);


if($row)
{
	if($row[2] == $_SESSION['password'])
	{
		$_SESSION['userName']=$row[1];
		$_SESSION['userId']=$row[0];
		header("location:index.php"); 
	}
	else{
		echo "登录错误，请重新<a href='sign_in.php'>登录</a>";
	}
}
else
{
	echo "用户名不存在，请重新<a href='sign_in.php'>登录</a>";
}



?>



