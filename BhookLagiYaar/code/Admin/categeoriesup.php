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

	<title>Admin Panel</title>

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
					

				<h1>Add New City</h1>
                
                
                
                
                <?php
include "connect.php";

if(isset($_REQUEST['Submit']))
{
	
	
	$query = "insert into m_menu_category (category_name,notes,status) values ('".mysql_real_escape_string(stripslashes($_POST['name']))."', '".mysql_real_escape_string(stripslashes($_POST['description']))."' , '".mysql_real_escape_string(stripslashes($_POST['status']))."') " ;	
	if($result = mysql_query($query))
	{
		echo 'yes';
	}
	else
	{
		echo mysql_error();
	}
	
	$location = "categeoriesview.php?uinfo=1"	;
	header("Location:".$location);
}


if(isset($_REQUEST['Update']))
{
	//echo "in update";
	$query = "UPDATE m_menu_category SET category_name = '".$_POST['name']."', notes = '".$_POST['description']."', status = '".$_POST['status']."' WHERE category_id = '".$_REQUEST['cid']."'";
	
	echo $query;
	
	if($result = mysql_query($query))
	{
		echo 'yes';
	}
	else
	{
		echo mysql_error();
	}
	
	$location = "categeoriesview.php?uinfo=1"	;
	header("Location:".$location);
}

?>


 
                
                
               	 <?php if($_GET['info']==1){ ?>
					 <div class="notify notify-success">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p>DATA INSERTED SUCCESSFULLY</p>
					</div>
                    <?php } ?>
                  
                <?php
                if($_REQUEST['cid'])
				{
				$query1 = "SELECT * FROM m_menu_category WHERE category_id= '".$_REQUEST['cid']."'";
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		//$city_id = $rows1['city_id'];	
				?>
                
                <div class="widget-content">
							
							<form class="form uniformForm validateForm" method="post" action="" enctype="multipart/form-data" name="news">
								<div class="field-group">
									<label for="required"> Category Name :</label><span class="field">
									  <input type="text" id="title1" name="name" value="<?php echo $rows1['category_name'] ;?>" class="validate[required] cols="50" " >
									</span> 
									<div class="field"></div>
								</div>
                                
								<div class="field-group">
									<label for="required">Description:</label>
									<div class="field">
										<textarea name="description" id="title" rows="5" cols="50"><?php echo $rows1['notes'] ;?></textarea>	
									</div>
								</div> <!-- .field-group -->
								
											
							<div class="field-group">
              <label for="required">Status: </label>
              <div class="field">
              <select  name="status">
              <option value="1" <?php if($rows1['status']==1) echo "selected"; ?>>Active</option>
              <option value="0" <?php if($rows1['status']==0) echo "selected"; ?>>Inactive</option>
              
            </select>
              
              </div>
            </div>
									<div class="login_actions">
				<input type="submit" value="Update" name="Update" class="btn btn-primary" tabindex="3">
			</div> <!-- .actions -->
								
							</form>
							
							
						</div>
				
				
				<?php }
				
				
				else{
				?>
                
                
					<div class="widget-content">
							
							<form class="form uniformForm validateForm" method="post" action="" enctype="multipart/form-data" name="news">
								<div class="field-group">
									<label for="required"> Category Name :</label><span class="field">
									  <input type="text" id="title1" name="name" class="validate[required] cols="50" " >
									</span> 
									<div class="field"></div>
								</div>
                                
								<div class="field-group">
									<label for="required">Description:</label>
									<div class="field">
										<textarea name="description" id="title" rows="5" cols="50"></textarea>	
									</div>
								</div> <!-- .field-group -->
								
											
							<div class="field-group">
              <label for="required">Status: </label>
              <div class="field">
              <select  name="status">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
              
            </select>
              
              </div>
            </div>
									<div class="login_actions">
				<input type="submit" value="Submit" name="Submit" class="btn btn-primary" tabindex="3">
			</div> <!-- .actions -->
								
							</form>
							
							
						</div>
                        
                        <?php }?>
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


</body>
</html>
<?php } 
else header("Location:index.php?log=3");
?>