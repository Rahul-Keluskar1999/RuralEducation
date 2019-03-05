<?php
if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
if(isset($_GET['name']) && $_GET['name']!='')
{
	$msg=$_GET['name'];
}
error_reporting(0);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="_css/signup.css" />
</head>

<body>
<div id="signupbody">
<div id="signininimage">
  <a href="signup.php"><img src="_images/signin.png" width="150" height="150" alt="signin image"></a><br/> 
  <span style="color:#FF3737; padding-bottom:10px; line-height:40px; font-family:Verdana, Geneva, sans-serif; font-size:14px;" ><?php echo $msg;?></span>
  <?php echo $name;?>
  </div>
<div id="sheading">
	<p> Fill all the credentials</p>
</div>
<div id="textfeildbg">
<form name="signin" method="post" action="singuppros.php">
	<input name="f_name" type="text" placeholder="First name" maxlength="60" id="textfeilds" required="required" >
    
    <input name="l_name" type="text" placeholder="Last name" maxlength="50" id="textfeilds" required="required">
    
    <input name="u_email" type="email" placeholder="Email Address" maxlength="50" id="emailfeilds"  required="required">
    
    <input name="u_hash" type="password" placeholder="Password" maxlength="50" id="password" required="required">
    
    <input name="username" type="text" placeholder="User Name" maxlength="50" id="textfeilds" required="required" />

	<input type="hidden" value="mm" name="signup" />
	<input type="submit" id="submit" value="Sign Up" >

	<a href="index.php"  id="forget">Return to homepage</a>

</form>

</div>

</div>
</body>
</html>