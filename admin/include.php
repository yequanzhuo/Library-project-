<?php 
header("content-type:text/html;charset=utf-8");
session_start();
error_reporting(0);
require_once 'mysql.func.php';
require_once 'page.func.php';
require_once 'common.func.php';
require_once 'admin.inc.php';
require_once 'Vcode.class.php';
require_once 'activity.inc.php';
require_once 'configs.php';
require_once 'string.func.php';
connect();
?>
