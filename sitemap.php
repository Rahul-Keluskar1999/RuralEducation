<?php require_once("_includes/connection.php"); ?>
<?php require_once("_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php $query="Select * from userad where cat_id='$sel_page[id]' ";
$userad=mysql_query($query);

$query="Select * from freead where cat_id='$sel_page[id]' ";
$freead=mysql_query($query);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Site Map </title>
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
	
	
</head>
<body>
<div id="body">
<div id="sitepage">
<div id="topheading">
<p>Site Map </p>
</div>
<div id="homepage">
<a href="index.php">Return to Home page</a>
</div>
<div class="site">
	<h3> Free Posting</h3>
    <ul>
    <li><a href="category.php"> Select a Category</a><br/></li>
    <li><a href="post.php"> Data entry for free post</a><br/></li>
    <li><a href="thankspost.php"> Thanks for free posting</a><br/></li>
    <li><a href="contactus.php">Contact us</a><br/></li>
    </ul>

	<h3> Authorized Posting</h3>
    <ul>
    <li><a href="signup.php"> Sign up</a><br/></li>
    <li><a href="thankspost.php"> Verfied</a><br/></li>
    <li><a href="signin.php">Login</a><br/></li>
    <li><a href="user/index.php">User interface</a><br/></li>
    <li><a href="user/index.php">User selection for category</a><br/></li>
    <li><a href="user/user_post.php">Date entry of user for Ad</a><br/></li>
    <li><a href="user/user_thanks.php">User thanks for posting Ad</a><br/></li>
    <li><a href="user/edit.php">User deleting his/her posts</a><br/></li>
    <li><a href="contactus.php">Contact us</a><br/></li>
    
    
    </ul>
</div>

</div>

</div>

<?php include("_includes/ender.php"); ?>
<!--<div class="demo-description">
<p>A menu with the default configuration, showing how to use a menu with icons.</p>
</div>-->
</body>
</html>