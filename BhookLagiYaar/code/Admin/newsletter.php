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

	<title>Cpanel</title>

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
				<a href="javascript:;">News Section</a>				
				
				<ul class="subNav">
					<li><a href="newsview.php">View News</a></li>
					<li><a href="newsup.php">Upload New News</a></li>
					
					
				</ul>					
			</li>	
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Testimonial Section</a>				
				
				<ul class="subNav">
					<li><a href="testimonialview.php">View Testimonials</a></li>
					<li><a href="testimonialup.php">Upload Testimonials</a></li>
					
					
				</ul>						
			</li>
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Recipe Section</a>				
				
				<ul class="subNav">
					<li><a href="recipeview.php">View Recipes</a></li>
					<li><a href="recipeup.php">Upload Recies</a></li>
					
					
				</ul>						
			</li>
<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Manage Users & Comments/Newsletters</a>				
				
				<ul class="subNav">
					<li><a href="userview.php">Manage Users</a></li>
					<li><a href="comments.php">Manage Comments</a></li>
					<li><a href="newsletter.php">NBewsletter Subscribers</a></li>
					
				</ul>						
			</li>
		</ul>
				
	</div> <!-- #sidebar -->
	
	<div id="content">		
		
		<div id="contentHeader">
			<h1>CONTROL PANEL</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			
				
			<div class="grid-16">
					

				<h1>Welcome Admin</h1>
                
                
					<table class="list-table" width="700px;">
            	<thead>
                	<tr>
                    	<th>User ID</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Phone No.</th>
                        <th>Email Id</th>
                       <th>Newsletter Subscribed</th>
                      
                        
                    </tr>
                </thead>
                 <?php 
				 include 'connect.php';
				 $query = mysql_query("SELECT * FROM user_login");

		
while ($table = mysql_fetch_array($query))
{
?>

                <tbody>
                	<tr>
                    
                     	<td align="center"><b><?php echo $table[0] ; ?></b></td>
                       <td align="center"><?php echo $table[1] ; ?></td>
                        	<td align="center"><?php echo $table[2] ; ?></td>
                   <td align="center"><?php echo $table[3] ; ?></td>
                   <td align="center"><?php echo $table[4] ; ?></td>
                   <td align="center"><?php if($table[5]==1) echo 'Yes'; else echo 'No'; ?></td>
                   
                       
                        
                    </tr>
                    
                    
                    <?php
}
?>
  
                    
                    
                    
                    
                </tbody>
                </table>
				</div> <!-- .grid -->
			
			
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