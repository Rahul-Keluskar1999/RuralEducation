<?php 
	require_once("_includes/connection.php");

?>
<html> 
<head>
	<title> Post and Sale </title>
    
    <link href="_css/category.css" rel="stylesheet" type="text/css">
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
    
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
 <!--   <script type="text/javascript">
	$("").ready(function(e) {
     
    });
	
	</script>
    <script type="text/javascript">
	$("document").ready(function(e) {
       $("#jfors").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jfors").animate({ width: "320px" }, 500);
				$(".allforsubnav").css("display","block");
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jfors").animate({ width: "280px" }, 500);
				setTimeout(function(){ $(".allforsubnav").css("display","none"); },2000)
            });
            });
			
		/*$(".allforsubnav").hover(function(){
			$(this).toggleClass(function(index, class) {
                $(".allforsubnav").css("display","block");
            });
		},
		function(){
			$(this).toggleClass(function(index, class) {
             setTimeout(function(){ $(".allforsubnav").css("display","none"); },2000)   
            });
			
		});*/
			
			
		$("#jcomunity").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jcomunity").animate({ width: "320px" }, 500);
				$(".allcomsubnav").css("display","block");
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jcomunity").animate({ width: "280px" }, 500);
				 setTimeout(function(){ $(".allcomsubnav").css("display","none"); },2000)
            });
            });
		
		
			
			$("#jvehicle").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jvehicle").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jvehicle").animate({ width: "280px" }, 500);
            });
            });
		
		$("#jclasses").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jclasses").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jclasses").animate({ width: "280px" }, 500);
            });
            });
		$("#jservices").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jservices").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jservices").animate({ width: "280px" }, 500);
            });
            });
			
		$("#jjobs").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jjobs").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jjobs").animate({ width: "280px" }, 500);
            });
            });
		
		$("#jmatrimonial").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jmatrimonial").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jmatrimonial").animate({ width: "280px" }, 500);
            });
            });
		
		$("#jrealestate").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jrealestate").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jrealestate").animate({ width: "280px" }, 500);
            });
            });
		
	});
	
	</script>-->
<!--/*colors used:
#b07df4
#d0affd */-->
   
   
</head>

<body>

<div id="body">
<?php include("_includes/header.html"); ?>
<div id="maincontent">
<div class="ab-cs">
 <ul >
 <h3><span> 1</span>Select a category:</h3>
 <li id="jfors">For Sale <img src="_images/catimg.png"/>
  
         
 <ul > 

<h3><span>2</span> Select a subcatagory:</h3>
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

 </ul> 
</li>

 <li id="jcomunity">Community <img src="_images/catimg.png"/>
             <ul>
              <h3><span>2</span> Select a subcatagory:</h3>
                 <li><a href="#">Carpool</a></li>
                <li><a href="#">Community Activities</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Musicians-Artists-Brands</a></li>
                <li><a href="#">Volunteers</a></li>
                <li><a href="#">Lost and Found</a></li>
             
             </ul></li>
<li id="jjobs">Jobs<img src="_images/catimg.png"/>

            
        <ul>
            <h3><span>2</span> Select a subcatagory:</h3>
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
<li><a href="#">Non-ProfitJobs</a></li>
<li><a href="#">Real Estate Jobs</a></li>
<li><a href="#">Resturant Jobs - Food Service Jobs</a></li>
<li><a href="#">Retail Jobs</a></li>
<li><a href="#">Sales Jobs</a></li>
<li><a href="#">Technology Jobs</a></li>
 
 </ul></li> 
<li  id="jrealestate">Real Estate<img src="_images/catimg.png"/>

           <ul>
            <h3><span>2</span> Select a subcatagory:</h3>
 <li><a href="#">Houses - Apartements for Sale</a></li>
<li><a href="#"> Houses - Apartements for Rent</a></li>
<li><a href="#">Rooms for Rent - Shared</a></li>
<li><a href="#">Housing Swap</a></li>
<li><a href="#">Vacation Rentals</a></li>
<li><a href="#">Parking Spots</a></li>
<li><a href="#">Land</a></li>
<li><a href="#">Office - Commercial Space</a></li>
<li><a href="#">Shops for Rent - Sale</a></li>
 
 </ul></li>

<li id="jservices">Services<img src="_images/catimg.png"/>
           
                 <ul>
                 <h3><span>2</span> Select a subcatagory:</h3>
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
                 
                 </ul></li>

 <li id="jclasses">Classes<img src="_images/catimg.png"/>
 <ul>
             <h3><span>2</span> Select a subcatagory:</h3>
             <li><a href="#">Computer - Multimedia Classes</a></li>
            <li><a href="#">Language Classes</a></li>
            <li><a href="#">Music -Theatre - Dance Classes</a></li>
            <li><a href="#">Tutoring - Private Lessons</a></li>
            
             
             </ul></li>
 </ul>
 </div>
 </div>
</div>
<div id="foot">
<?php include("_includes/ender.php"); ?>

</div>
</body>

</html>