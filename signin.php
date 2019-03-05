<?php if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
error_reporting(0);
?>
<html> 
<head>
	<title> Post and Sale </title>
	
	
	<link href="_css/signin.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="signinbody">

<div id="signininimage">
  <a href="signin.php" ><img src="_images/signin.png" width="150" height="150" alt="signin image"></a> 
  <br/> <span style="color:red; line-height:40px; font-family:'Comic Sans MS', cursive; font-size:12px;"><?php echo $msg; ?>  </span>
  </div>
<div id="sheading">
	<p> Log into your account....</p>
</div>
<div id="textfeildbg">
<form name="signin" method="post" action="signinpros.php">
	<input name="user" type="text" placeholder="Username" maxlength="60" id="textfeilds" >
    
    <input name="pass" type="password" placeholder="Password" maxlength="50" id="password">
	<input name="login" type="hidden" value="mmm">
	<input type="submit" id="submit" value="Log In" >
    
    <a href="index.php"  id="forget">Return to homepage</a>

</form>

</div>
</div>


<!--<div id="body">

<div id="maincontent">
 
	<div id="headermsg">
 If you do not have an account or never posted please <a href="register.php">Register</a> first.
	</div>
		<div id ="totalform">
	<div id="signheading">
  Sign in
	</div>

	<div id="signform">
    <form action="#" name="signin" method="post">
      <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
          <td width="110" id="stext">User name</td>
          <td colspan="2"><label for="textfield"></label>
            <input name="textfield" type="text" class="signintxtfield" id="textfield" size="25" maxlength="45"></td>
        </tr>
        <tr>
          <td id="stext">Password</td>
          <td colspan="2"><label for="textfield2"></label>
            <input name="textfield2" type="text" class="signintxtfield" id="textfield2" size="25" maxlength="45"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="74"><input name="button" type="submit" class="button" id="button" value="Sign in"></td>
          <td width="162"><a href="#" id="forget">Forgot your password</a></td>
        </tr>
      </table>
      </form>
    </div>
	
	</div>
 </div>-->


</body>

</html>