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
					

				<h1>Add New Menu</h1>
                
                
                
                
                <?php
include "connect.php";ini_set( "display_errors", 0);

if(isset($_POST['Submit']))
{
	
		
		  
		  
	
	
	$query = "insert into item (ref_restaurant_id, ref_menu_category, item_name, price, type, is_ad_ons, status) values ('".mysql_real_escape_string(stripslashes($_POST['res_name']))."', '".mysql_real_escape_string(stripslashes($_POST['cat_name']))."' ,'".mysql_real_escape_string(stripslashes($_POST['item_name']))."' ,'".mysql_real_escape_string(stripslashes($_POST['price']))."', '".mysql_real_escape_string(stripslashes($_POST['type']))."', '".mysql_real_escape_string(stripslashes($_POST['ad']))."','".mysql_real_escape_string(stripslashes($_POST['status']))."') " ;	
	echo $query;
	if($result = mysql_query($query))
	{
		$location = "itemsup.php?info=1"	;
	header("Location:".$location);
	}
	else
	{
		echo mysql_error();
	}
}


if(isset($_REQUEST['Update']))
{
	
	$query = "UPDATE item SET ref_restaurant_id = '".$_POST['res_name']."', ref_menu_category = '".$_POST['cat_name']."', item_name = '".$_POST['item_name']."', price = '".$_POST['price']."' , type = '".$_POST['type']."', is_ad_on = '".$_POST['ad']."', status = '".$_POST['status']."' WHERE item_id = '".$_REQUEST['iid']."'";
	
	echo $query;
	
	if($result = mysql_query($query))
	{
		echo 'yes';
	}
	else
	{
		echo mysql_error();
	}
	
	$location = "restaurantview.php?uinfo=1"	;
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
                if($_REQUEST['iid'])
				{
				$query1 = "SELECT * FROM item WHERE item_id= '".$_REQUEST['iid']."'";
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		//$city_id = $rows1['city_id'];	
				?>
                
               <div class="widget-content">
							
							<form class="form uniformForm validateForm" method="post" action="" enctype="multipart/form-data" name="res">
                            
                            <div class="field-group">
              <label for="required">Restaurant Name : </label>
              <div class="field">
           
<select name="res_name"  id="search_category_id">
		
		<?php
		$query = "SELECT  name,restaurant_id FROM restaurant";
		$results = mysql_query($query);
		
		while ($rows = mysql_fetch_assoc(@$results))
		{?>
			<option value="<?php echo $rows['restaurant_id'];?>"><?php echo $rows['name'];?></option>
		<?php
		}?>
		</select>	    
              </div>
            </div>
            
            <div class="field-group">
              <label for="required">Category Name :</label>
              <div class="field">
           
<select name="cat_name"  id="search_category_id">
		
		<?php
		$query = "SELECT  category_id,category_name FROM m_menu_category";
		$results = mysql_query($query);
		
		while ($rows = mysql_fetch_assoc(@$results))
		{?>
			<option value="<?php echo $rows['category_id'];?>"><?php echo $rows['category_name'];?></option>
		<?php
		}?>
		</select>	    
              </div>
            </div>
            
                            
								<div class="field-group">
									<label for="required">Item Name :</label><span class="field">
									  <input type="text" id="1" name="item_name" class="validate[required] cols="50" " value="<?php echo $rows1['item_name']?>" >
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Price</label><span class="field">
									  <input type="text" id="2" name="price" class="validate[required] cols="50" " value="<?php echo $rows1['price']?>">
									</span> 
									<div class="field"></div>
								</div>
                                
                                
                                
                   
            
            <div class="field-group">
									<label for="required">Type</label><span class="field">
									  <input type="radio" id="8" name="type" value="1" checked >Veg&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="type" value="2">Non Veg

									</span> 
									<div class="field"></div>
								</div>
            
            <div class="field-group">
									<label for="required">Ad Ons</label><span class="field">
									  <input type="radio" id="9" name="ad" value="1" checked>Yes&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="ad" value="2">No
									</span> 
									<div class="field"></div>
								</div>
  
                                <div class="field-group">
									<label for="required">Status</label><span class="field">
									  <input type="radio" id="st" name="status" value="1" checked>Active&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="status" value="2">Inactive&nbsp;&nbsp;&nbsp;&nbsp;

									</span> 
									<div class="field"></div>
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
							
							<form class="form uniformForm validateForm" method="post" action="" enctype="multipart/form-data" name="res">
                            
                            <div class="field-group">
              <label for="required">Restaurant Name : </label>
              <div class="field">
           
<select name="res_name"  id="search_category_id">
		
		<?php
		$query = "SELECT  name,restaurant_id FROM restaurant";
		$results = mysql_query($query);
		
		while ($rows = mysql_fetch_assoc(@$results))
		{?>
			<option value="<?php echo $rows['restaurant_id'];?>"><?php echo $rows['name'];?></option>
		<?php
		}?>
		</select>	    
              </div>
            </div>
            
            <div class="field-group">
              <label for="required">Category Name :</label>
              <div class="field">
           
<select name="cat_name"  id="search_category_id">
		
		<?php
		$query = "SELECT  category_id,category_name FROM m_menu_category";
		$results = mysql_query($query);
		
		while ($rows = mysql_fetch_assoc(@$results))
		{?>
			<option value="<?php echo $rows['category_id'];?>"><?php echo $rows['category_name'];?></option>
		<?php
		}?>
		</select>	    
              </div>
            </div>
            
                            
								<div class="field-group">
									<label for="required"> Item Name :</label><span class="field">
									  <input type="text" id="1" name="item_name" class="validate[required] cols="50" " >
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Price</label><span class="field">
									  <input type="text" id="2" name="price" class="validate[required] cols="50" ">
									</span> 
									<div class="field"></div>
								</div>
                                
                                
                                
                   
            
            <div class="field-group">
									<label for="required">Type</label><span class="field">
									  <input type="radio" id="8" name="type" value="1" checked >Veg&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="type" value="2">Non Veg

									</span> 
									<div class="field"></div>
								</div>
            
            <div class="field-group">
									<label for="required">Ad Ons</label><span class="field">
									  <input type="radio" id="9" name="ad" value="1" checked>Yes&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="ad" value="2">No
									</span> 
									<div class="field"></div>
								</div>
  
                                <div class="field-group">
									<label for="required">Status</label><span class="field">
									  <input type="radio" id="st" name="status" value="1" checked>Active&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="status" value="2">Inactive&nbsp;&nbsp;&nbsp;&nbsp;

									</span> 
									<div class="field"></div>
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
<script>
$(function () { 
	$( "#datepicker" ).datepicker();
	$( "#datepicker_inline" ).datepicker();
	$('#colorpickerHolder').ColorPicker({flat: true});
	$('#timepicker').timepicker ({ 
		showPeriod: true 
		, showNowButton: true
		, showCloseButton: true
	});
	$('#timepicker1').timepicker ({ 
		showPeriod: true 
		, showNowButton: true
		, showCloseButton: true
	});
	
	$('#timepicker_inline_div').timepicker({
	   defaultTime: '9:20'
	});		
		
	$('#colorSelector').ColorPicker({
		color: '#FF9900',
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onSubmit: function (hsb, hex, rgb, el) {
			$(el).ColorPickerHide ();	
		},
		onChange: function (hsb, hex, rgb) {
			$('#colorSelector div').css({ 'background-color': '#' + hex });
			$('#colorpickerField1').val ('#' + hex);
		}
	});
	
	$('#colorpickerField1').live ('keyup', function (e) {
		var val = $(this).val ();
		val = val.replace ('#', '');
		$('#colorSelector div').css({ 'background-color': '#' + val });
		$('#colorSelector').ColorPickerSetColor(val);
	});

});

</script>

</body>
</html>
<?php } 
else header("Location:index.php?log=3");
?>