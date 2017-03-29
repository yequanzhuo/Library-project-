<?php 


// 根据ID得到指定分类信息

function getActivityById($id){
	$sql="select id,content from new activity  where id={$id}";
	return fetchOne($sql);
}



//修改分类的操作

function editActivity($id){
	$arr=$_POST;
	if(update("activity ", $arr,"id={$id}")){
		$mes="分类修改成功!<br/><a href='listActivity.php'>查看列表</a>";
	}else{
		$mes="分类修改失败!<br/><a href='listActivity.php'>重新修改</a>";
	}
	return $mes;
}

//删除分类

function delActivity($id){
		if(delete("activity ","id={$id}")){
			$mes="删除成功!<br/><a href='listActivity.php'>查看列表</a>";
		}else{
			$mes="删除失败！<br/><a href='listActivity.php'>请重新操作</a>";
		}
	return $mes;
	
}

//得到所有分类

function getAllComment(){
	$sql="select id,content from activity ";
	$rows=fetchAll($sql);
	return $rows;
}



?>


