<?php 
error_reporting(0);


	
	if ($validForm) {

		$to = 'zidansyed@yahoo.com';

		$subject = 'post and sale contact form';
		

		$message .= "Form Name:  {$_POST['formName']}\r\n\r\n";

		$message .= "Name:   {$_POST['name']} {$_POST['name']}\r\n";

		$message .= "Email Address:   {$_POST['email']}\r\n";

		$message .= "Subject:   {$_POST['Subject']}\r\n";		

		$message .= "Comments:  {$_POST['comments']}\r\n";

	


		$headers = "From: {$_POST['email']}\r\n";

		$headers .= 'Cc: zidnasyed@yahoo.com';


		mail($to,$subject,$message,$headers);

		header("Location: index.php");


		exit;

	}


?>
<html> 
<head>
	<title> Post and Sale </title>
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link href="_css/footer.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="return">
<a href="index.php" style=""> Return to home page</a>
</div>
<div id="body">

<div id="maincontent">
	<form name="contactus" action="contactus.php"   method="post">
<table width="100%" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td height="19" colspan="3" class="formheading">Please fill all the feilds to contact us.</td>
  </tr>
  <tr<?php echo (isset($errors['name'])?' style="color:red;"':'') ?>>
    
    <td height="5" colspan="2" rowspan="2" class="formtxt">Full Name <font color="#FF6666" size="2">*</font></td>
    
    <td width="741"><input name="name" type="text" class="formtxtfeilds" id="textfield2" size="30" maxlength="30" required <?php echo (isset($_POST['name'])?" value=\"$_POST[name]\"":'') ?> /></td>
  
 
 
  <tr<?php echo (isset($errors['name'])?' style="color:red;"':'') ?>>
    <td><span style="color:red;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;font-size:14px;">
      <?php if (!empty($errors['name'])): ?>
Please enter your first and last name.<br />
<?php endif; ?>
    </span></td>
  <tr<?php echo (isset($errors['email'])?' style="color:red;"':'') ?>>
    
    
    <td height="19" colspan="2" rowspan="2" class="formtxt">Your Email Address <font color="#FF6666" size="2">*</font></td>
    
    <td><label for="subject"></label>
      <input name="email" type="email" class="formtxtfeilds" id="textfield3" size="30" maxlength="30" required<?php echo (isset($_POST['email'])?" value=\"$_POST[email]\"":'') ?>/></td>
  
  </tr>
  <tr<?php echo (isset($errors['email'])?' style="color:red;"':'') ?>>
    <td><span style="color:red;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;font-size:14px;">
      <?php if (!empty($errors['email'])): ?>
Please enter a valid email address.<br />
<?php endif; ?>
    </span></td>
  </tr>
  <tr<?php echo (isset($errors['email'])?' style="color:red;"':'') ?>>
    <td height="19" colspan="2" rowspan="2" class="formtxt">Subject <font color="#FF6666" size="2">*</font></td>
    <td><label for="textfield4"></label>
      <input name="subject" type="text" class="formtxtfeilds" id="textfield4" size="30" maxlength="30" required /></td>
  </tr>
  <tr<?php echo (isset($errors['email'])?' style="color:red;"':'') ?>>
    <td><span style="color:red;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;font-size:14px;">
      <?php if (!empty($errors['subject'])): ?>
Please give a topic to your message.<br />
<?php endif; ?>
    </span></td>
  </tr>
  <tr>
    <td height="68" colspan="2" rowspan="2" class="formtxt">Message <font color="#FF6666" size="2">*</font></td>
    <td><label for="textfield5"></label>
      <label for="message"></label>
      <textarea name="message" cols="55" rows="5" class="formmsgbox" id="message" required></textarea></td>
  </tr>
  <tr>
    <td><span style="color:red;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;font-size:14px;">
      <?php if (!empty($errors['message'])): ?>
Please wright a msg that you want to share!!!<br />
<?php endif; ?>
    </span></td>
  </tr>
  <tr>
    <td height="42" colspan="2"></td>
    <td><input name="button" type="submit" class="submitbutton" id="button" value="Send" />
      <input name="button2" type="reset" class="resetbtn" id="button2" value="Reset" /></td>
  </tr>
</table>
</form>

</div>
	

	<?php require_once("_includes/footer.php"); ?>
</div>


</body>

</html>