
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" type="text/css" href="sign_in.css">
<script type="text/javascript">

function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {alert(alerttxt);return false}
  else {return true}
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(email,"Email must be filled out!")==false)
    {email.focus();return false}
  }
}
</script>
</head>
<body>
<div class="B">
<div class="T">
<div id="tit">
<div class="D2">
<a class="signup" href="sign_up.php"><img src="注册.jpg"></a>
<a class="signin" href="sign_in.php"><img src="登陆.jpg"></a>
<div class="slidebar">
	<div class="slider"></div>
</div>
</div>
</div>
</div>
<div class="D">
<form action="dologin1.php" onsubmit="return validate_form(this)" method="post">
<div class="B8">
<input name="username" class="account" aria-label="用户名" required="" type="text" placeholder="用户名"style="width:300px;height:55px">
</div>
<div class="B9">
<input name="password" aria-label="密码" required="" type="password" placeholder="密码"style="width:300px;height:55px">
</div>
<div class="B10">
<button class="sign-button submit" type="submit" style="width:300px;height:45px;background:#66B3FF;color:white;">登录</button>
</div>

</div>
</form>
</div>
</div>


</body>
</html>