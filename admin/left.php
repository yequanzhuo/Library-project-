<?php
require_once 'include.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左菜单栏</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/sdmenu.js"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url(images/main/leftbg.jpg) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="images/main/member.gif" width="44" height="44" /></div>
    <span>
	<?php
	/*
	session_start();
	require_once 'include.php';
	if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] ===1){
		echo "<p>当前管理员是：<b>".$_SESSION['username']."</b>";
	}else{
		header("location:sign_in.php");
	}
	*/
	?>

	</span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div>
        <span>活动管理</span>
        <a href="listActivity.php" target="mainFrame" onFocus="this.blur()">活动内容展示</a>
        <a href="addPro.php" target="mainFrame" onFocus="this.blur()">活动内容发布</a>
      </div>
	  <div>
        <span>评论管理</span>
        <a href="listComment.php" target="mainFrame" onFocus="this.blur()">评论信息列表</a>
  
      </div>
      <div>
        <span>用户管理</span>
        <a href="listUser.php" target="mainFrame" onFocus="this.blur()">用户列表</a>
        <a href="addUser.php" target="mainFrame" onFocus="this.blur()">添加用户</a>
      </div>
      <div>
        <span>管理员管理</span>
        <a href="listAdmin.php" target="mainFrame" onFocus="this.blur()">管理员列表</a>
        <a href="addAdmin.php" target="mainFrame" onFocus="this.blur()">添加管理员</a>
      </div>
	  <div class="collapsed">
        
      </div>
    </div>
</body>
</html>