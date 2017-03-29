<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" type="text/css" href="sign_up.css">
</head>
<body>
<div class="B">
<div class="T">
<div id="tit">
<div class="D1">
<a class="signup" href="sign_up.php"><img src="注册.jpg"></a>
<a class="signin" href="sign_in.php"><img src="登陆.jpg"></a>
<div class="slidebar">
	<div class="slider"></div>
</div>
</div>
</div>
</div>
<div class="Z">

<form action="regcheck.php" onsubmit="return validate_form(this)" method="post">

<div class="B1">
<input name="username" aria-label="姓名" required="" type="text" placeholder="姓名" style="width:300px;height:55px">
</div>
<div class="B2">
<input name="pass" aria-label="密码" required="" type="password" placeholder="密码"style="width:300px;height:55px">
</div>
<div class="B4">
<input name="confirm" aria-label="确认密码" required="" type="password" placeholder="确认密码"style="width:300px;height:55px">
</div>

<div class="B6">
<button class="sign-button submit" type="submit" style="width:300px;height:45px;background:#66B3FF;color:white;">注册账号</button>
</div>
</form>
</div>
</div>
</body>
</html>