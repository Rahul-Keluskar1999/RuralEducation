<?php
	error_reporting(0); 
	require_once("_includes/connection.php");
	require_once("_includes/functions.php");
	{
	$msg=$_GET['msg'];
}
?>
<html> 
<head>
	<title> Post and Sale </title>
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
<!--/*colors used:
#b07df4
#FFB51A
#d0affd */-->
   
  <style>
  body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("WebsiteBackground.jpg");


    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>  
</head>

<body>

<div class="bg">
<div id="fb-root" ></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=239326496139606";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="body">
<?php include("_includes/header.html"); ?>
<div id="indexmaincontent">
<div id="topheading">
<p>Choose your category..</p>
</div>
<span style="color:brown; line-height:20px; font-size:14px; font-family:'Comic Sans MS', cursive; text-align:center;" ><?php echo $msg; ?> </span>
<!--<div class="ullist">
	<ul>
	
    
    <h2>For Sale </h2>
    <li><a href="#">Animals</a></li>
    <li><a href="#">Art-Collections</a></li>
    <li><a href="#">Books-Magzines</a></li>
    <li><a href="#">Bussiness-Industrial</a></li>
    <li><a href="#">Cameras-Camera Accessories</a></li>
    <li><a href="#">Cars</a></li>
    <li><a href="#">Car parts</a></li>
    <li><a href="#">CDs-Records</a></li>
    <li><a href="#">Cell Phones-Accessories</a></li>
    <li><a href="#">Clothing</a></li>
    <li><a href="#">Computer Hardware</a></li>
    <li><a href="#">DVD</a></li>
    <li><a href="#">Electronics</a></li>
    <li><a href="#">For Babies_ Infants</a></li>
    <li><a href="#">Garage Sale</a></li>
    <li><a href="#">Health-Beauty</a></li>
    <li><a href="#">Home-Furniture-Garden</a></li>
    <li><a href="#">Supplies</a></li>
    <li><a href="#">Jewelery</a></li>
    <li><a href="#">Musical Instruments</a></li>
    <li><a href="#">Motorcycles-Scooters</a></li>
    <li><a href="#">Sporting Goods-Bicycles</a></li>
    <li><a href="#">Tickets</a></li>
    <li><a href="#">Toys-Games</a></li>
    <li><a href="#">Video Games-Consoles</a></li>
    
    <h2>Community</h2>
 
    <li><a href="#">Carpool</a></li>
    <li><a href="#">Community Activities</a></li>
    <li><a href="#">Events</a></li>
    <li><a href="#">Musicians-Artists-Brands</a></li>
    <li><a href="#">Volunteers</a></li>
    <li><a href="#">Lost and Found</a></li>
    
	   
</ul>
</div>
</div>
<div id="category">
<div class="ullist">
<ul >
	<h2>
    Jobs
    </h2>
    <li><a href="#">Accounting Jobs - Finance Jobs</a></li>
<li><a href="#">Advertising Jobs - Public Relations Jobs</a></li>
<li><a href="#">Arts Jobs - Entertainment Jobs</a></li>
<li><a href="#">Publishing Jobs</a></li>
<li><a href="#">Clerical Jobs - Administratice Jobs</a></li>
<li><a href="#">Customer Service Jobs</a></li>
<li><a href="#">Clerical Jobs - Administrative Jobs</a></li>
<li><a href="#">Customer Service Jobs</a></li>
<li><a href="#">Education Jobs - Teaching Jobs</a></li>
<li><a href="#">Engineering Jobs - Architecture Jobs</a></li>
<li><a href="#">Healthcare Jobs</a></li>
<li><a href="#">Hotel Jobs - Travel Jobs</a></li>
<li><a href="#">Human Resource Jobs</a></li>
<li><a href="#">Internal Jobs</a></li>
<li><a href="#">Legal Jobs</a></li>
<li><a href="#">Manual Labor Jobs</a></li>
<li><a href="#">Manufacturing Jobs - Operations Jobs</a></li>
<li><a href="#">Marketing Jobs</a></li>
<li><a href="#">Non-Profite Jobs</a></li>
<li><a href="#">Resturant Jobs - Food Service Jobs</a></li>
<li><a href="#">Retail Jobs</a></li>
<li><a href="#">Sales Jobs</a></li>
<li><a href="#">Technology Jobs</a></li>
    
    
    
    </ul>
	</div>
	</div>
	
	<div id="category">
	<div class="ullist">
	<ul>
    <h2>Class</h2>
<li><a href="#">Computer - Multimedia Classes</a></li>
<li><a href="#">Language Classes</a></li>
<li><a href="#">Music -Theatre - Dance Classes</a></li>
<li><a href="#">Tutoring - Private Lessons</a></li>

<h2>Sevices</h2>
<li><a href="#">Babysitter - Nanny</a></li>
<li><a href="#">Casting - Auditions</a></li>
<li><a href="#">Chauffeur- Driver</a></li>
<li><a href="#">Computer</a></li>
<li><a href="#">Event Services</a></li>
<li><a href="#">Health - Beauty - Fitness</a></li>
<li><a href="#">Horoscopes - Tarot</a></li>
<li><a href="#">House hold - Domestic Help</a></li>
<li><a href="#">Moving - Storage</a></li>
<li><a href="#">Repair</a></li>
<li><a href="#">Writing - Editing - Translating</a></li>
<li><a href="#">Matrimonial</a></li>
<li><a href="#">Brides</a></li>
<li><a href="#">Groomes</a></li>

   		</ul>
		</div>-->
        	

	
	<div id="category">

<?php echo navigation_index_1($sel_subject, $sel_page); ?>
	
</div>

<div id="category">
<?php echo navigation_index_2($sel_subject, $sel_page); ?>
	
</div>
<div id="category">
<?php echo navigation_index_3($sel_subject, $sel_page); ?>
	
</div>




	
</div>
	<div id="freead">
<a href="category.php">Post a Free Ad</a>
</div>
</div>

<?php include("_includes/ender.php"); ?>
	</div>


</body>

</html>