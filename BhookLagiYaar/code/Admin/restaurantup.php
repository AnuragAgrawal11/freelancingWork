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
<script type="text/javascript" src="jquery-1.3.2.js"></script>

<script type="text/javascript">

$(document).ready(function() {

	$('#loader').hide();
	$('#show_heading').hide();
	
	$('#search_category_id').change(function(){
		$('#show_sub_categories').fadeOut();
		$('#loader').show();
		$.post("get_chid_categories.php", {
			parent_id: $('#search_category_id').val(),
		}, function(response){
			
			setTimeout("finishAjax('show_sub_categories', '"+escape(response)+"')", 400);
		});
		return false;
	});
});

function finishAjax(id, response){
  $('#loader').hide();
  $('#show_heading').show();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
} 

function alert_id()
{
	if($('#sub_category_id').val() == '')
	alert('Please select a sub category.');
	else
	alert($('#sub_category_id').val());
	return false;
}

</script>
<style>

#search_category_id{ padding:3px; width:200px;}
#sub_category_id{ padding:3px; width:200px;}
.both{ float:left; margin:0 15px 0 0; padding:0px;}
</style>
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
include "connect.php";ini_set( "display_errors", 0);

if(isset($_POST['Submit']))
{
	 include('SimpleImage.php');
      $image = new SimpleImage();
      $image->load($_FILES['image']['tmp_name']);
      $image->resizeToWidth(200);
      $image->resizeToHeight(180);
	  $filename = stripslashes($_FILES['image']['name']);
	  $name = time().'_'.$filename;
	  
	  
      $image->save('logo_up/'.$name);
      //$image->output();
		
		
		  
		  
	
	
	$query = "insert into restaurant (name, mobile, phone_1, phone_2, owner, company, open_time, close_time, type, min_order_amount, shipping_charges,service_charges,address,ref_m_city,ref_m_area,shipping_radius,facebook_link,payment_mode,status,logo) values ('".mysql_real_escape_string(stripslashes($_POST['restaurant_name']))."', '".mysql_real_escape_string(stripslashes($_POST['mobile']))."' ,'".mysql_real_escape_string(stripslashes($_POST['phone_1']))."' ,'".mysql_real_escape_string(stripslashes($_POST['phone_2']))."', '".mysql_real_escape_string(stripslashes($_POST['owner_name']))."', '".mysql_real_escape_string(stripslashes($_POST['company']))."','".mysql_real_escape_string(stripslashes($_POST['open_time']))."','".mysql_real_escape_string(stripslashes($_POST['close_time']))."','".mysql_real_escape_string(stripslashes($_POST['type']))."','".mysql_real_escape_string(stripslashes($_POST['min_order']))."','".mysql_real_escape_string(stripslashes($_POST['ship_chrg']))."','".mysql_real_escape_string(stripslashes($_POST['ser_chrg']))."','".mysql_real_escape_string(stripslashes($_POST['address']))."','".mysql_real_escape_string(stripslashes($_POST['city_name']))."','".mysql_real_escape_string(stripslashes($_POST['area_name']))."','".mysql_real_escape_string(stripslashes($_POST['ship_radius']))."','".mysql_real_escape_string(stripslashes($_POST['facebook']))."','".mysql_real_escape_string(stripslashes($_POST['payment']))."','".mysql_real_escape_string(stripslashes($_POST['status']))."', '".mysql_real_escape_string($name)."') " ;	
	if($result = mysql_query($query))
	{
		$location = "restaurantup.php?info=1"	;
	header("Location:".$location);
	}
	else
	{
		echo mysql_error();
	}
}


if(isset($_REQUEST['Update']))
{
	
	$query = "UPDATE restaurant SET name = '".$_POST['restaurant_name']."', mobile = '".$_POST['mobile']."', phone_1 = '".$_POST['phone_1']."', phone_2 = '".$_POST['phone_2']."' , owner = '".$_POST['owner_name']."', company = '".$_POST['company']."', open_time = '".$_POST['open_time']."', close_time = '".$_POST['close_time']."', type = '".$_POST['type']."', min_order_amount = '".$_POST['min_order']."', shipping_charges = '".$_POST['ship_chrg']."', service_charges = '".$_POST['ser_chrg']."', address = '".$_POST['address']."', ref_m_city = '".$_POST['city_name']."', ref_m_area = '".$_POST['area_name']."', shipping_radius = '".$_POST['ship_radius']."', facebook_link = '".$_POST['facebook']."', payment_mode = '".$_POST['payment']."', status = '".$_POST['status']."' WHERE restaurant_id = '".$_REQUEST['rid']."'";
	
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
                if($_REQUEST['rid'])
				{
				$query1 = "SELECT * FROM restaurant WHERE restaurant_id= '".$_REQUEST['rid']."'";
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		//$city_id = $rows1['city_id'];	
				?>
                
               <div class="widget-content">
							
							<form class="form uniformForm validateForm" method="post" action="" enctype="multipart/form-data" name="res">
								<div class="field-group">
									<label for="required">Restaurant Name</label><span class="field">
									  <input type="text" id="1" name="restaurant_name" class="validate[required] cols="50" " value="<?php echo $rows1['name']; ?>" >
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Owner Name</label><span class="field">
									  <input type="text" id="2" name="owner_name" class="validate[required] cols="50" " value="<?php echo $rows1['owner']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                
                                <div class="field-group">
									<label for="required">Company</label><span class="field">
									  <input type="text" id="3" name="company" value="<?php echo $rows1['company']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Mobile</label><span class="field">
									  <input type="text" id="4" name="mobile" value="<?php echo $rows1['mobile']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Phone 1</label><span class="field">
									  <input type="text" id="5" name="phone_1" value="<?php echo $rows1['phone_1']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Phone 2</label><span class="field">
									  <input type="text" id="6" name="phone_2" value="<?php echo $rows1['phone_2']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                         
								<div class="field-group">
									<label for="required"> Address:</label>
									<div class="field">
										<textarea name="address" id="7" rows="5" cols="50"  class="validate[required]" ><?php echo $rows1['address']; ?>"</textarea>	
									</div>
								</div> <!-- .field-group -->
								
											
							<div class="field-group">
              <label for="required">City: </label>
              <div class="field">
           
<select name="city_name"  id="search_category_id">
		
		<?php
		$query = "SELECT  city_name,city_id FROM m_city";
		$results = mysql_query($query);
		
		while ($rows = mysql_fetch_assoc(@$results))
		{?>
			<option value="<?php echo $rows['city_id'];?>" <?php if($rows['city_id']==$_REQUEST['cid']) echo "selected"; ?>><?php echo $rows['city_name'];?></option>
		<?php
		}?>
		</select>	    
              </div>
            </div>
           
		
	
	
            <div class="field-group">
              <label for="required" id="show_heading">Area: </label>
              <div class="field">
               
              	<div id="show_sub_categories" align="center">
			<img src="loader.gif" style="margin-top:8px; float:left" id="loader" alt="" />
		</div>
            
              
              </div>
            </div>
            
            <div class="field-group">
									<label for="required">Type</label><span class="field">
									  <input type="radio" id="8" name="type" value="1" <?php if($rows['type']==1) echo "checked"; ?>>Veg&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="type" value="2" <?php if($rows['type']==2) echo "checked"; ?>>Non Veg&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="type" value="3" <?php if($rows['type']==3) echo "checked"; ?>>Both
									</span> 
									<div class="field"></div>
								</div>
            
            <div class="field-group">
									<label for="required">Mode of Payment</label><span class="field">
									  <input type="radio" id="9" name="payment" value="1" <?php if($rows['payment_mode']==1) echo "checked"; ?>>Cash On Delivery&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="payment" value="2" <?php if($rows['payment_mode']==2) echo "checked"; ?>>Online&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="payment" value="3" <?php if($rows['payment_mode']==3) echo "checked"; ?>>Both
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Min Order Amount (Rs.)</label><span class="field">
									  <input type="text" id="10" name="min_order" class="validate[required] cols="50" " value="<?php echo $rows1['min_order_amount']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Service charges</label><span class="field">
									  <input type="text" id="11" name="ser_chrg" class="validate[required] cols="50" "  value="<?php echo $rows1['service_charges']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required"> Shipping Charges(Rs.)</label><span class="field">
									  <input type="text" id="12" name="ship_chrg" class="validate[required] cols="50" "  value="<?php echo $rows1['shipping_charges']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Shipping Radius (Km)</label><span class="field">
									  <input type="text" id="13" name="ship_radius" class="validate[required] cols="50" "  value="<?php echo $rows1['shipping_radius']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Open Time</label><span class="field">
									  <input type="text" id="timepicker" name="open_time"  value="<?php echo $rows1['open_time']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Close Time</label><span class="field">
									  <input type="text" id="timepicker1" name="close_time"  value="<?php echo $rows1['close_time']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                
                                
                                <div class="field-group">
									<label for="required">Facebook Link</label><span class="field">
									  <input type="text"  name="facebook" id="facebook"  value="<?php echo $rows1['facebook_link']; ?>">
									</span> 
									<div class="field"></div>
								</div>
                                
                             
                                
                                <div class="field-group">
									<label for="required">Status</label><span class="field">
									  <input type="radio" id="st" name="status" value="1" <?php if($rows['status']==1) echo "checked"; ?>>Active&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="status" value="0" <?php if($rows['status']==0) echo "checked"; ?>>Inactive&nbsp;&nbsp;&nbsp;&nbsp;

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
									<label for="required">Restaurant Name</label><span class="field">
									  <input type="text" id="1" name="restaurant_name" class="validate[required] cols="50" " >
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Owner Name</label><span class="field">
									  <input type="text" id="2" name="owner_name" class="validate[required] cols="50" ">
									</span> 
									<div class="field"></div>
								</div>
                                
                                <div class="field-group">
									<label for="required">Company</label><span class="field">
									  <input type="text" id="3" name="company" >
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Mobile</label><span class="field">
									  <input type="text" id="4" name="mobile">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Phone 1</label><span class="field">
									  <input type="text" id="5" name="phone_1" >
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Phone 2</label><span class="field">
									  <input type="text" id="6" name="phone_2">
									</span> 
									<div class="field"></div>
								</div>
                         
								<div class="field-group">
									<label for="required"> Address:</label>
									<div class="field">
										<textarea name="address" id="7" rows="5" cols="50"  class="validate[required]"></textarea>	
									</div>
								</div> <!-- .field-group -->
								
											
							<div class="field-group">
              <label for="required">City: </label>
              <div class="field">
           
<select name="city_name"  id="search_category_id">
		<option>Slecet City </option>
		<?php
		$query = "SELECT  city_name,city_id FROM m_city";
		$results = mysql_query($query);
		
		while ($rows = mysql_fetch_assoc(@$results))
		{?>
        	
			<option value="<?php echo $rows['city_id'];?>"><?php echo $rows['city_name'];?></option>
		<?php
		}?>
		</select>	    
              </div>
            </div>
           
		
	
	
            <div class="field-group">
              <label for="required" id="show_heading">Area: </label>
              <div class="field">
               
              	<div id="show_sub_categories" align="center">
			<img src="loader.gif" style="margin-top:8px; float:left" id="loader" alt="" />
		</div>
            
              
              </div>
            </div>
            
            <div class="field-group">
									<label for="required">Type</label><span class="field">
									  <input type="radio" id="8" name="type" value="1" checked >Veg&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="type" value="2">Non Veg&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="type" value="3">Both
									</span> 
									<div class="field"></div>
								</div>
            
            <div class="field-group">
									<label for="required">Mode of Payment</label><span class="field">
									  <input type="radio" id="9" name="payment" value="1" checked>Cash On Delivery&nbsp;&nbsp;&nbsp;&nbsp;
                                     
<input type="radio" name="payment" value="2">Online&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="payment" value="3">Both
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Min Order Amount (Rs.)</label><span class="field">
									  <input type="text" id="10" name="min_order" class="validate[required] cols="50" ">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Service charges</label><span class="field">
									  <input type="text" id="11" name="ser_chrg" class="validate[required] cols="50" ">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required"> Shipping Charges(Rs.)</label><span class="field">
									  <input type="text" id="12" name="ship_chrg" class="validate[required] cols="50" ">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Shipping Radius (Km)</label><span class="field">
									  <input type="text" id="13" name="ship_radius" class="validate[required] cols="50" ">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Open Time</label><span class="field">
									  <input type="text" id="timepicker" name="open_time">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">Close Time</label><span class="field">
									  <input type="text" id="timepicker1" name="close_time">
									</span> 
									<div class="field"></div>
								</div>
                                
                                
                                <div class="field-group">
									<label for="required">Facebook Link</label><span class="field">
									  <input type="text"  name="facebook" id="facebook">
									</span> 
									<div class="field"></div>
								</div>
                                
                             
                                <div class="field-group">
              <label for="image">Logo:</label>
              <div class="field">
                <input type="file" name="image"  class="text-input">
              </div>
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