<?php 
require_once 'include.php';
$id = $_GET['id']; 
$sql="delete from `comment table` where id=".$id; 
mysql_query($sql);
echo "删除成功</br>";
?> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="listComment.php">返回评论查看界面</a>