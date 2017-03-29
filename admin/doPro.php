<?php 
	//error_reporting(0);
	header ( "Content-type: text/html; charset=utf-8" );
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("library",$conn);
	mysql_query("set names utf8");
	$name=$_POST['name'];			
	$content=$_POST['content'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$descer=$_POST['descer'];
	$body=$_POST['body'];
	$addtime=date("Y-m-j H:i:s");
	

	function uploadFile($fileInfo,$uploadPath='uploads',$allowExt=array('jpeg','jpg','gif','png'),$maxSize=2097152){
		if($fileInfo['error']>0){
			switch($fileInfo['error']){
				case 1:
					$mes = '上传文件超过php配置文件中upload_max_filesize';
					break;
				case 2:
					$mes = '超过表单MAX_FILE_SIZE大的限制大小';
					break;
				case 3:
					$mes = '文件部分被上传';
					break;
				case 4:
					$mes = '没有选择上传文件';
					break;
				case 6:
					$mes ='没有找到临时目录';
					break;
				case 7:
				case 8:
					$mes = '系统错误';
				break;
			}
			exit ($mes);
			return false;
		}
		$ext = pathinfo($fileInfo['name'],PATHINFO_EXTENSION);
		if(!is_array($allowExt)){
			exit('系统错误');
		}
		//检测文件上传的类型
		if(!in_array($ext,$allowExt)){
			exit('非法文件类型');
		}
		//检测上传文件大小是否符合规范
		if($fileInfo['size']>$maxSize){
			exit('上传文件过大');
		}
		$uploadPath='image';//传到哪个目录下
		if(!file_exists($uploadPath)){
			mkdir($uploadPath,0777,true);
			chmod($uploadPath,0777);
		}
		$uniName=md5(uniqid(microtime(true),true)).'.'.$ext;
		$destination=$uploadPath.'/'.$uniName;	
		if(!move_uploaded_file($fileInfo['tmp_name'],$destination)){
			exit('文件移动失败');
		}
		//echo '文件上传成功';	
		return $destination;
		
	}	
	$fileInfo=$_FILES['myFile'];
	$newName=uploadFile($fileInfo);
	echo $newName;		

	$query=mysql_query("insert into activity(name,address,content,phone,descer,body,myFile,addtime) values('$name','$address','$content','$phone','$descer','$body','$destination','$addtime')",$conn);
	if($query==true){ 
		echo "<script>alert('添加成功！');history.back();</script>";
	}else{
		echo "<script>alert('添加失败！');history.back();</script>";
	}



?>