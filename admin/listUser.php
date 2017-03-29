<?php 
require_once 'include.php';
//checkLogined();
$sql="select id,username,name,pass,phone,academy,education  from users";
$rows=fetchAll($sql);
if(!$rows){
	alertMes("sorry,没有用户,请添加!","addUser.php");
	exit;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">学号</th>
        <th align="center" valign="middle" class="borderright">用户姓名</th>
		<th align="center" valign="middle" class="borderright">密码</th>
		<th align="center" valign="middle" class="borderright">手机</th>
		<th align="center" valign="middle" class="borderright">学院</th>
		<th align="center" valign="middle" class="borderright">学历</th>
        <th align="center" valign="middle">操作</th>
      </tr>
	 <?php  foreach($rows as $row):?>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['id'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['username'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['name'];?></td>
		<td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['pass'];?></td>
		<td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['phone'];?></td>
		<td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['academy'];?></td>
		<td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['education'];?></td>
        <td align="center"><input type="button" value="修改" class="btn" onclick="editUser(<?php echo $row['id'];?>)"><input type="button" value="删除" class="btn"  onclick="delUser(<?php echo $row['id'];?>)"></td>
      </tr>
      <?php endforeach;?>
	</table>
	</td>
   </tr>
</table>
</body>
<script type="text/javascript">

	function addUser(){
		window.location="addUser.php";	
	}
	function editUser(id){
			window.location="editUser.php?id="+id;
	}
	function delUser(id){
			if(window.confirm("您确定要删除吗？删除之后不可以恢复哦！！！")){
				window.location="doAdminAction.php?act=delUser&id="+id;
			}
	}
</script>
</html>