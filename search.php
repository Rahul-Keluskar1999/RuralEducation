<?php require_once("_includes/connection.php"); ?>
<?php require_once("_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php 
error_reporting(0);
if(isset($_POST['search']) && $_POST['search']=="mmm")
{ 
$search=preg_replace('#[^a-z 0-9?!]#i', '',$_POST['search_text'] );
$query="(SELECT ad_title AS title FROM userad WHERE MATCH (ad_title,description,address) AGAINST ('$search')) UNION (SELECT ad_title AS title FROM freead WHERE MATCH (ad_title,description,address) AGAINST ('$search'))   ";
$count=mysql_query($query) or die(mysql_error());
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Search </title>
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
	
	
</head>
<body>
<div id="body">
<?php include("_includes/header.html"); ?>
<div id="cat">
<div id="topheading">
<p>Content related to your search</p>
</div>

<?php
$abc=mysql_num_rows($count);
if($abc > 1)
{
$k=1;
 while($rec=mysql_fetch_array($count)){?>
<table width="100%" cellspacing="4" cellpadding="4" id="table">
  <tr >
    <td colspan="2" class="adtitle">Title: <span style="color:#666;"><?php echo $rec['ad_title']; ?></span></td>
    
  </tr>
  <tr>
    <td rowspan="3" id="adpic"><img src="Uploaded/<?php echo ucwords($rec['photo_name']);?>"
     style="border-radius:15px; max-height:300px; padding:7px; -webkit-box-shadow:  0px 0px 5px 1px #FFD57D;
        
        box-shadow:  0px 0px 5px 1px #FFD57D; "/></td>
    
    <td class="adbg" ><span style="color:#666;"><?php echo $rec['price']; ?></span><br/>Price </td>
    </tr>
    <tr>
    <td  class="adbg"> <span style="color:#666;"><?php echo $rec['contact_name']; ?></span><br/>Contact name</td>
   
  </tr>
  <tr>
    <td  class="adbg"><span style="color:#666;"><?php echo $rec['m_number']; ?></span><br/>Mobile number</td>
   
  </tr>
  <tr>
    <td  class="adbg" colspan="2">Description:<br/><span style="color:#666;"><?php echo $rec['description']; ?></span><br/></td>
   
  </tr>
  
</table>


<?php $k++; }
}

else {
	 echo "<br/> <br/> <strong>Sorry nothing found according to your search try by retyping it.</strong>";	
	
}
?>


</div>

</div>

<?php include("_includes/ender.php"); ?>
<!--<div class="demo-description">
<p>A menu with the default configuration, showing how to use a menu with icons.</p>
</div>-->
</body>
</html>