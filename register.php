<?php
	if(isset($_REQUEST['msg']) && $_REQUEST['msg']!="")
	{ $msg=$_REQUEST['msg'];}


?>
<html> 
<head>
	<title> Post and Sale </title>
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link href="_css/footer.css" rel="stylesheet" type="text/css">
	<link href="_css/signin.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="body">
<?php require_once"_includes/header.html"; ?>
<div id="maincontent">
 
	<div id="headermsg">
 If you  have an account or posted before <a href="signin.php">signin</a> instead of registration. </div>
		<div id ="totalform">
	<div id="sheading">
  Regitration
	</div>

	<div id="signform">
    <form action="user_reg.php" name="signin" method="post">
      <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
        <td>   </td>
          <td <?php if($msg=="You are succesfully registered to post and sale") 
		  	echo 'id="msgtxt"'; else echo 'id="warning"';
			 ?>>
			 <?php echo $msg; ?></td>
        </tr>
        <tr>
          <td width="110" id="stext">User name</td>
          <td colspan="2"><label for="name"></label>
            <input name="name" type="text" class="signintxtfield" id="name" size="25" maxlength="45"></td>
        </tr>
        <tr>
          <td id="stext">Password</td>
          <td colspan="2"><label for="pwd"></label>
            <input name="pwd" type="password" class="signintxtfield" id="pwd" size="25" maxlength="45"></td>
        </tr>
        <tr>
          <td id="stext">Email Address</td>
          <td colspan="2"><label for="pwd"></label>
            <input name="email" type="text" class="signintxtfield" id="email" size="25" maxlength="45"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="74"><input name="button" type="submit" class="button" id="button" value="Register">
            <input type="hidden" name="MM" id="MM"></td>
          
        </tr>
      </table>
      </form>
    </div>
	
	</div>
 </div>
	<?php require_once("_includes/footer.php"); ?>

</body>

</html>