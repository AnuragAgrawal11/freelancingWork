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
<title>Recipe Upload</title>
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
    <h1><a href="dashboard.html">Admin</a></h1>
    <a href="javascript:;" id="reveal-nav"> <span class="reveal-bar"></span> <span class="reveal-bar"></span> <span class="reveal-bar"></span> </a> </div>
  <!-- #header -->
  
  
  <!-- #search -->
  
  <div id="sidebar">
    <ul id="mainNav">
      <li id="navPages" class="nav"> <span class="icon-document-alt-stroke"></span> <a href="javascript:;">News Section</a>
        <ul class="subNav">
          <li><a href="newsview.php">View News</a></li>
          <li><a href="newsup.php">Upload New News</a></li>
        </ul>
      </li>
      <li id="navPages" class="nav"> <span class="icon-document-alt-stroke"></span> <a href="javascript:;">Testimonial Section</a>
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
  </div>
  <!-- #sidebar -->
  
  <div id="content">
    <div id="contentHeader">
      <h1>CONTROL PANEL</h1>
    </div>
    <!-- #contentHeader -->
    
    <div class="container">
      <div class="grid-16">
        <h1>Upload a Recipe</h1>
        <?php
include "connect.php";ini_set( "display_errors", 0);

if(isset($_POST['Submit']))
{
	 include('SimpleImage.php');
      $image = new SimpleImage();
      $image->load($_FILES['image']['tmp_name']);
      $image->resizeToWidth(586);
      $image->resizeToHeight(420);
	  $filename = stripslashes($_FILES['image']['name']);
	  $name = time().'_'.$filename;
	  
	  
      $image->save('recipe_up/'.$name);
      //$image->output();
		
		$image = new SimpleImage();
		  $image->load($_FILES['image']['tmp_name']);
		  $image->resizeToWidth(100);
		  $image->resizeToHeight(96);
		  $filename1 = stripslashes($_FILES['image']['name']);
		  $name = time().'_'.$filename;
		  
		  $image->save('recipe_up/thumb/'.$name);
		  
		  
	$query = "insert into recipe (title, ingredients, prep_time, level, course, directions, image1) values ('".mysql_real_escape_string(stripslashes($_POST['title']))."', '".mysql_real_escape_string(stripslashes($_POST['ingredients']))."' ,'".mysql_real_escape_string(stripslashes($_POST['prep_time']))."' ,'".mysql_real_escape_string(stripslashes($_POST['level']))."', '".mysql_real_escape_string(stripslashes($_POST['course']))."', '".mysql_real_escape_string(stripslashes($_POST['directions']))."', '".mysql_real_escape_string($name)."') " ;	
	if($result = mysql_query($query))
	{
		$location = "recipeup.php?info=1"	;
	header("Location:".$location);
	}
	else
	{
		echo mysql_error();
	}
	
	
}

?>
        <?php if($_GET['info']==1){ ?>
        <div class="notify notify-success"> <a href="javascript:;" class="close">&times;</a>
          <h3>Succes</h3>
          <p>DATA INSERTED SUCCESSFULLY</p>
        </div>
        <?php } ?>
        <div class="widget-content">
          <form class="form uniformForm validateForm" method="post" action="" enctype="multipart/form-data" name="recipe">
            <div class="field-group">
              <label for="required">Recipe Title:</label>
              <div class="field">
                <input type="text" id="title" name="title" class="validate[required] cols="50" ">
              </div>
            </div>
            <div class="field-group">
              <label for="required">Ingredients: </label>
              <div class="field">
                <textarea  name="ingredients"  id="about" rows="10" cols="100" class="validate[required]"></textarea>
              </div>
            </div>
            
            <div class="field-group">
              <label for="required">Prepration Time: </label>
              <div class="field">
                <select id="ddlPreparation" name="prep_time" class="validate[required]">
              <option value="0-5 minutes">0-5 minutes</option>
              <option value="1 hour">1 hour</option>
              <option value="1- 2  hours">1- 2  hours</option>
              <option value="1-2 days">1-2 days</option>
           
              <option value="10 minutes">10 minutes</option>
              <option value="10-12 days">10-12 days</option>
              <option value="10-12 hours">10-12 hours</option>
              <option value="10-12 minutes">10-12 days</option>
             
              <option value="10-15 miniutes">10-15 miniutes</option>
             
         
        
              <option value="10-20 minutes">10-20 minutes</option>
              <option value="12 hours">12 hours</option>
              <option value="12-13 hours">12-13 hours</option>
             
              <option value="15- 20 minutes">15- 20 minutes</option>
              <option value="15-20 hours">15-20 hours</option>
              <option value="2-3 days">2-3 days</option>
              <option value="2-3 hours">2-3 hours</option>
            
              <option value="2-4 hours">2-4 hours</option>
              <option value="20-25 minutes">20 - 25 minutes</option>
              <option value="20 minutes">20 minutes</option>
             
            
           
              <option value="20-30 minutes">20-30 minutes</option>
         
       
              <option value="24 hours">24 hours</option>
         
              <option value="25 minutes">25 minutes</option>
              <option value="25-30 minutes">25-30 minutes</option>
              <option value="3-4 days">3-4 days</option>
              <option value="3-4 hours">3-4 hours</option>
             
              <option value="30-35 minutes">30-35 minutes</option>
              <option value="30-40 mins">30-40 mins</option>
             
              <option value="30-45 minutes">30-45 minutes</option>
              <option value="35-40 minutes">35-40 minutes</option>
              <option value="4-6 hours">4-6 hours</option>
              <option value="40 - 45 minutes">40 - 45 minutes</option>
              <option value="40 - 50 minutes">40 - 50 minutes</option>
       
           
              <option value="40-60 minutes">40-60 minutes</option>
              <option value="45 minutes">45 minutes</option>
              <option value="45-50 minutes">45-50 minutes</option>
              <option value="45-60 minutes">45-60 minutes</option>
         
              <option value="5 minutes">5 minutes</option>
              <option value="5- 10 minutes">5- 10 minutes</option>
            
              <option value="5-6 hours">5-6 hours</option>
              <option value="50-60 minutes">50-60 minutes</option>
              <option value="6-8 days">6-8 days</option>
              <option value="6-8 hours">6-8 hours</option>
              <option value="7-8 hours">7-8 hours</option>
              <option value="8- 10 hours">8- 10 hours</option>
      
              <option value="8-10 days">8-10 days</option>
             
            </select>
              </div>
            </div>
            
            <div class="field-group">
              <label for="required">Level of Cooking: </label>
              <div class="field">
                <select name="level" class="validate[required]">
                  <option value="Very Difficult">Very Difficult</option>
                  <option value="Difficult">Difficult</option>
                  <option value="Normal">Normal</option>
                  <option value="Easy">Easy</option>
                  <option value="Very Easy">Very Easy</option>
                </select>
              </div>
            </div>
            <div class="field-group">
              <label for="required">Course: </label>
              <div class="field">
              <select  name="course" class="validate[required]" >
              <option value="Breakfast">Breakfast</option>
              <option value="Lunch">Lunch</option>
              <option value="Dinner">Dinner</option>
              <option value="Tea Time">Tea Time</option>
              <option value="Supper">Supper</option>
            </select>
              
              </div>
            </div>
            
            <!-- .field-group -->
            <div class="field-group">
              <label for="image">Recipe Image:</label>
              <div class="field">
                <input type="file" name="image"  class="text-input">
              </div>
            </div>
            <div class="field-group">
              <label for="message">Directions</label>
              <div class="field">
                <textarea name="directions" id="about" rows="10" cols="100" class="validate[required]"></textarea>
              </div>
            </div>
            <div class="login_actions">
              <input type="submit" value="Submit" name="Submit" class="btn btn-primary" tabindex="3">
            </div>
            <!-- .actions -->
            
          </form>
        </div>
      </div>
      <!-- .grid --> 
      
    </div>
    <!-- .container --> 
    
  </div>
  <!-- #content -->
  
  <div id="topNav">
    <ul>
      
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  <!-- #topNav --> 
  
  <!-- .quickNav --> 
  
</div>
<!-- #wrapper -->

<div id="footer"> Made By Anurag Agrawal </div>
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
</html><?php } 
else header("Location:index.php?log=3");
?>