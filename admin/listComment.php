<?php 
require_once 'include.php';
//checkLogined();
$sql="select id,activity_id,user_id,content,addtime  from `comment table`";
$rows=fetchAll($sql);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
$totalRows=getResultNum($sql);
$pageSize=10;
$totalPage=ceil($totalRows/$pageSize);
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select id,activity_id,user_id,content,addtime  from `comment table` order by id asc limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
if(!$rows){
	alertMes("sorry,请添加!","index.php");
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
    <td width="99%" align="left" valign="top">您的位置：评论管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">活动名称</th>
        <th align="center" valign="middle" class="borderright">评论者</th>
		<th align="center" valign="middle" class="borderright">评论内容</th>
		<th align="center" valign="middle" class="borderright">留言时间</th>
        <th align="center" valign="middle">操作</th>
      </tr>
	 <?php  foreach($rows as $row):?>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['id'];?></td>
		<td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['activity_id'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['user_id'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['content'];?></td>
		<td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['addtime'];?></td>
        <td align="center" valign="middle" class="borderbottom"><a href="findComment.php?id=<?=$row['id']?>">显示内容</a><span class="gray">&nbsp;|&nbsp;</span><a href="delete.php?id=<?=$row['id']?>">删除</a></td>
      </tr>
      <?php endforeach;?>
	</table>
	</td>
   </tr>
   <?php if($totalRows>$pageSize):?>
   <tr>
   <td colspan="4"><?php echo showPage($page, $totalPage);?></td>
   </tr>
   <?php endif;?>
</table>
</body>
<script type="text/javascript">

	function findComment(id){
			window.location="findComment.php?id="+id;
	}
	function delComment(id){
			if(window.confirm("您确定要删除吗？删除之后不可以恢复哦！！！")){
				window.location="doAdminAction.php?act=delComment&id="+id;
			}
	}
</script>
</html>