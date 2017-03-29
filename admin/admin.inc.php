<?php 
//检查管理员是否存在

function checkAdmin($sql){
	return fetchOne($sql);
}
//检测是否有管理员登陆.

function checkLogined(){
	if($_SESSION['adminId']==""&&$_COOKIE['adminId']==""){
		alertMes("请先登陆","sign_in.php");
	}
}
//添加管理员

function addAdmin(){
	$arr=$_POST;
	$arr['password']=$_POST['password'];
	if(insert("admin",$arr)){
		$mes="添加成功!<br/><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员列表</a>";
	}else{
		$mes="添加失败!<br/><a href='addAdmin.php'>重新添加</a>";
	}
	return $mes;
}

//得到所有的管理员
function getAllAdmin(){
	
	$sql="select id,username,email from admin ";
	$rows=fetchAll($sql);
	return $rows;
}

//编辑管理员

function editAdmin($id){
	$arr=$_POST;
	$arr['password']=$_POST['password'];
	if(update("admin", $arr,"id={$id}")){
		$mes="编辑成功!<br/><a href='listAdmin.php'>查看管理员列表</a>";
	}else{
		$mes="编辑失败!<br/><a href='listAdmin.php'>请重新修改</a>";
	}
	return $mes;
}

// 删除管理员的操作

function delAdmin($id){
	if(delete("admin","id={$id}")){
		$mes="删除成功!<br/><a href='listAdmin.php'>查看管理员列表</a>";
	}else{
		$mes="删除失败!<br/><a href='listAdmin.php'>请重新删除</a>";
	}
	return $mes;
}

//注销管理员

function logout(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),"",time()-1);
	}
	if(isset($_COOKIE['adminId'])){
		setcookie("adminId","",time()-1);
	}
	if(isset($_COOKIE['adminName'])){
		setcookie("adminName","",time()-1);
	}
	session_destroy();
	header("location:login.php");
}
// 添加用户的操作

function addUser(){
	$arr=$_POST;
	$arr['pass']=$_POST['pass'];
	if(insert("users", $arr)){
		$mes="添加成功!<br/><a href='addUser.php'>继续添加</a>|<a href='listUser.php'>查看列表</a>";
	}else{
		$mes="添加失败!<br/><a href='addUser.php'>重新添加</a>";
	}
	return $mes;
}
//删除用户的操作

function delUser($id){
	if(delete("users","id={$id}")){
		$mes="删除成功!<br/><a href='listUser.php'>查看用户列表</a>";
	}else{
		$mes="删除失败!<br/><a href='listUser.php'>请重新删除</a>";
	}
	return $mes;
}
// 编辑用户的操作

function editUser($id){
	$arr=$_POST;
	$arr['pass']=$_POST['pass'];
	if(update("users", $arr,"id={$id}")){
		$mes="编辑成功!<br/><a href='listUser.php'>查看用户列表</a>";
	}else{
		$mes="编辑失败!<br/><a href='listUser.php'>请重新修改</a>";
	}
	return $mes;
}
?>