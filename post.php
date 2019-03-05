<?php require_once("_includes/connection.php"); ?>
<?php require_once("_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php
	error_reporting(0);
?>

<html> 
<head>
	<title> Post and Sale </title>
    <link href="_css/post.css" rel="stylesheet" type="text/css">
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
    
<!--/*colors used:
#b07df4
#d0affd */-->
<script type="text/javascript">
function performClick(node) {
   var evt = document.createEvent("MouseEvents");
   evt.initEvent("click", true, false);
   node.dispatchEvent(evt);
}
</script>
<style type="text/css">
.valid{
	text-align:left;
	font-size:10px;
	font-family:"Comic Sans MS", cursive;
	color:#F00;	
	
}

</style>   
</head>

<body>

<div id="body">
<?php include("_includes/header.html"); ?>
<div id="maincontent">
<div id="topheading">
<p> Post a Free Add</p>
</div>
<div id="allform">
<form action="_includes/postpros.php" method="post" enctype="multipart/form-data">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" class="text" style="text-align:center;"><span style="color:red;">NOTE:</span> Feilds with <span style="color:red;">*</span> feilds are compulsory<br/><span><?php echo $insert; ?></span></td>
    
  </tr>
  
  <tr style="height:60px;">
    <td width="150" class="text">Category you choosed</td>
    <td width="500" class="textwithbg"> <?php echo $sel_subject['title']; ?><?php echo $sel_page['sub_title']; ?><br/><a href="category.php">Change your category </a></td>
  </tr>
    <tr style="visibility:hidden;">
    <td colspan="2"><input name="cat_id" value="<?php echo $sel_page['id'];?>" ></td>
  </tr>
  <tr>
    <td width="150" class="text"><span style="color:red;">*</span>Ad title:</td>
    <td ><input name="ad_title"  class="textfeilds" required type="text" placeholder="Write exact title as your product name or model" maxlength=" 70" size="70"></td>
  </tr>
   <tr>
    <td width="150" class="text"><span style="color:red;">*</span>Ad Photos:</td>
   <td><label for="photo"></label>
     <input type="file" name="photo" id="photo">
     <br/><span class="valid"><?php echo $msg;?></span></td>
  </tr>
  </tr>
   <tr>
    <td width="150" class="text">Description for your ad:</td>
   <td ><textarea name="description" cols="" rows="" class="textarea" placeholder="Describe what makes your ad unique, and the person watching it can easily understand it."> </textarea></td>
  </tr>
  </tr>
  </tr>
   <tr>
    <td width="150" class="text">Price:</td>
   <td style="font-size:12px; font-family:'Times New Roman';" > <p> Write price according to Pakistani currency <input name="price" type="number" size="20" maxlength="50"  id="currency" placeholder="example: 50.00"> .OO Pkr</td>
  </tr>
</table>
<div id="sellerinfo">
<p> Seller information</p>
</div>
<table width="100%" cellspacing="0" cellpadding="0">
 <tr>
    <td width="150" class="text">Contact name:</td>
    <td ><input name="contact_name"  class="textfeilds" type="text" placeholder="Your name through which the caller pronounce you" maxlength=" 70" size="70"></td>
  </tr>
  
  <tr>
    <td width="150" class="text"><span style="color:red;">*</span>Email:</td>
    <td ><input name="email" required  class="textfeilds" type="email" placeholder="Enter a valid email address." maxlength=" 70" size="70"><br/><p style="font-size:12px; background: #FFF url(_images/emailshare.png) no-repeat; padding-left:20px;">Your email address wont be shared </p></td>
  </tr>
  
   <tr>
    <td width="150" class="text"><span style="color:red;">*</span>Mobile Number:</td>
    <td ><input name="m_number" required class="textfeilds" type="number" placeholder="Example:9234494665518" maxlength=" 70" size="70"></td>
  </tr>
    </tr>
  
   <tr>
    <td width="150" class="text">Ad Address:</td>
    <td ><input name="address"  class="textfeilds" type="text" placeholder="Enter you address where you can provide the product" maxlength=" 70" size="70"></td>
  </tr>
  
  <tr>
    <td></td>
    <td ><input type="submit" id="submit" value="Post" ><input type="hidden" name="post" value="mmm" ></td>
  </tr>
</table>


</form>			
</div>	
  </div>
	
</div>

<?php include("_includes/ender.php"); ?>

</body>

</html>