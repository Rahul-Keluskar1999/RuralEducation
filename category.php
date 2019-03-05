<?php require_once("_includes/connection.php"); ?>
<?php require_once("_includes/functions.php"); ?>
<?php find_selected_page(); ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title> Select Category </title>
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="js/development-bundle/themes/sunny/jquery.ui.all.css">
	<script src="js/development-bundle/jquery-1.9.1.js"></script>
	<script src="js/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="js/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="js/development-bundle/ui/jquery.ui.position.js" ></script>
	<script src="js/development-bundle/ui/jquery.ui.menu.js"></script>
	<link rel="stylesheet" href="js/development-bundle/demos/demos.css">
	<script>
	$(function() {
		$( "#menu" ).menu();
	});
	</script>
	<style>
	.ui-menu { 

	
	 }
	
	</style>
</head>
<body>
<div id="body">
<?php include("_includes/header.html"); ?>
<div id="cat">
<div id="topheading">
<p>Select a Category wisely in which you want to post in.</p>
</div>
<?php echo navigation($sel_subject, $sel_page); ?>
<?php echo $sel_subject; ?><br />
			<?php echo $sel_page; ?><br />
</div>

</div>

<?php include("_includes/ender.php"); ?>
<!--<div class="demo-description">
<p>A menu with the default configuration, showing how to use a menu with icons.</p>
</div>-->
</body>
</html>