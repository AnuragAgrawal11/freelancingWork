<?php
ini_set( "display_errors", 0);
session_start();
if($_SESSION['istrue']==1)
{

?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Admin</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
		
	<link rel="stylesheet" href="stylesheets/all.css" type="text/css" />
	
	<!--[if gte IE 9]>
	<link rel="stylesheet" href="stylesheets/ie9.css" type="text/css" />
	<![endif]-->
	
	<!--[if gte IE 8]>
	<link rel="stylesheet" href="stylesheets/ie8.css" type="text/css" />
	<![endif]-->

</head>

<body>

<div id="wrapper">
	
	<div id="header">
				
		<a href="javascript:;" id="reveal-nav">
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
		</a>
	</div> <!-- #header -->
	
	 <!-- #search -->
	
	<div id="sidebar">		
		
		<ul id="mainNav">			
			
						
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">City Section</a>				
				
				<ul class="subNav">
					<li><a href="cityview.php">View City</a></li>
					<li><a href="cityup.php">Add New City</a></li>
					
				</ul>						
			</li>	
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Area Section</a>				
				
				<ul class="subNav">
					<li><a href="areaview.php">View Areas</a></li>
					<li><a href="areaup.php">Add New Area</a></li>
					
					
				</ul>						
			</li>
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Restaurants Section</a>				
				
				<ul class="subNav">
					<li><a href="restaurantview.php">View Restaurants</a></li>
					<li><a href="restaurantup.php">Add Restaurant</a></li>
					
					
				</ul>						
			</li>
<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Menu Categeories</a>				
				
				<ul class="subNav">
					<li><a href="categeoriesview.php">View Categeories</a></li>
					<li><a href="categeoriesup.php">Add Menu Categeories</a></li>
					
					
				</ul>						
			</li>
            
            <li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Menu Items</a>				
				
				<ul class="subNav">
					<li><a href="itemsview.php">View Items</a></li>
					<li><a href="itemsup.php">Add Item </a></li>
					
					
				</ul>						
			</li>
            <li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Customers</a>				
				
				<ul class="subNav">
					<li><a href="customers.php">View Customers</a></li>
					
					
					
				</ul>						
			</li>
            <li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Orders</a>				
				
				<ul class="subNav">
					<li><a href="orders.php">View Orders</a></li>
					
					
					
				</ul>						
			</li>
		</ul>
				
	</div> <!-- #sidebar -->
	
	<div id="content">		
		
		<div id="contentHeader">
			
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			
				
			<div class="grid-16">
					

				<h1>Welcome Admin</h1>
					
				</div> <!-- .grid -->
			
			
            <br>

		</div> <!-- .container -->
		
	</div> <!-- #content -->
	
	<div id="topNav">
		 <ul>
		 	
		 	
		 	<li><a href="logout.php">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->
	
	 <!-- .quickNav -->
	
	
</div> <!-- #wrapper -->

<div id="footer">
	Made By Anurag Agrawal
</div>


<script src="javascripts/all.js"></script>

<script>
$(function () { 
	
	$('form').live ('submit', function (e) { e.preventDefault (); });

});

</script>

</body>
</html><?php } 
else header("Location:index.php?log=3");
?>