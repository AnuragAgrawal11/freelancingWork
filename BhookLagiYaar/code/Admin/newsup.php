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

	<title>News Upload</title>

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
			
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			
				
			<div class="grid-16">
					

				<h1>Add New City</h1>
                
                
                
                
                <?php
include "connect.php";ini_set( "display_errors", 0);

if(isset($_POST['Submit']))
{
	echo "hello";	
	
	$query = "insert into m_city (title,date,time,content) values ('".mysql_real_escape_string(stripslashes($_POST['title']))."', '".mysql_real_escape_string(stripslashes($_POST['date']))."' , '".mysql_real_escape_string(stripslashes($_POST['time']))."', '".mysql_real_escape_string(stripslashes($_POST['content']))."') " ;	
	if($result = mysql_query($query))
	{
		
	}
	else
	{
		echo mysql_error();
	}
	
	$location = "newsup.php?info=1"	;
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
                
					<div class="widget-content">
							
							<form class="form uniformForm validateForm" method="post" action="" enctype="multipart/form-data" name="news">
								<div class="field-group">
									<label for="required">City Name </label><span class="field">
									  <input type="text" id="title2" name="city_name" class="validate[required]  ">
									</span> 
									<div class="field"></div>
								</div>
                                <div class="field-group">
									<label for="required">City Code </label><span class="field">
									  <input type="text" id="title2" name="city_code" class="validate[required] ">
									</span> 
									<div class="field"></div>
								</div>
								<div class="field-group">
									<label for="required">Description:</label>
									<div class="field">
										<textarea name="city_description" id="title" rows="5" cols="50"></textarea>	
									</div>
								</div> <!-- .field-group -->
								
											
							<div class="field-group">
              <label for="required">Status: </label>
              <div class="field">
              <select  name="city_status" class="validate[required]" >
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