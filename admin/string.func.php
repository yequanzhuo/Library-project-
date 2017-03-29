<?php 

function getUniName(){
	return md5(uniqid(microtime(true),true));
}

//得到文件的扩展名

function getExt($filename){
	return strtolower(end(explode(".",$filename)));
}
?>
