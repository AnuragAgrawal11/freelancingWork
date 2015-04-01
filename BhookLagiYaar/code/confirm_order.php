<?php
error_reporting(E_ERROR);
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLY</title>
<link href="css/screen.css" rel="stylesheet" />
<script src="js/yetii.js"></script>   
<script src="js/jquery-1.7.1.min.js"></script>

</head>

<body>
<!--Start wrapper-->
	<div class="wrapper">
    	<div class="top">
        	<div class="header">
            	<div class="logoholder"><a id="home" href="#"></a></div>
                <div class="hsearch">
                	<form action="" method="get">
                    	<input type="text" name="textfield" id="textfield" class="s_filed" onblur="if (value == '') {value = 'name, cusinie, location'};" onfocus="if (value == 'name, cusinie, location') {value =''};" value="name, cusinie, location" />
                        
                        <div class="category1">
                    	<select name="">
                    	  <option>All</option>
                          <option>By Category</option>
                    	  <option>Viewed</option>
                    	  <option>Not Viewed</option>
                    	  <option>Flagged</option>
                    	  <option>Blocked</option>
                    	  <option>Deleted</option>
                    	  <option>Edited</option>
                    	  <option>Archived</option>
                    	</select>
                    </div>
                    <input name="" type="button" class="sbutton" value="search" />
                    </form>
                </div>
            </div>
        </div>
    	<!--Start main container-->
        	<div class="maincontainer">
            	<!--Start socialfeeds-->
                	<div style="float:left;"><img src="images/socialfeed.jpg"/></div>
              <!--End socialfeeds-->
              		<div class="clearfix"></div>
                    <!--Start payment container-->
                    	<div class="paymentblock">
                        	<h2>Thank you!!</h2>
                            <div class="confirmorder_container">
                            <?php 
							 $gValues = $_REQUEST['aValues'];							
							?>
                            	<!--Start order detail block-->
                                
                            		<div class="corder_detailblock">
                                    	<h4>Thank you for your order</h4>
                                        <p><strong>Customer Details</strong></p>
                                        <ul>
                                        	<li><span class="label">Name</span> <span class="det"><?php echo $gValues[0];?></span></li>
                                            
                                            <li><span class="label">Mobile Number</span> <span class="det"><?php echo $gValues[1];?></span></li>
                                            
                                            <li><span class="label">Address </span> <span class="det"><?php echo $gValues[2];?></span></li>
                                            
                                            <li><span class="label">Store Name</span> <span class="det"><?php echo $gValues[3];?></span></li>
                                            
                                            <li><span class="label">Store Address</span> <span class="det"><?php echo $gValues[4];?></span></li>
                                            
                                            <li><span class="label">Order Date/Time</span> <span class="det"><?php echo $gValues[5];?></span></li>
                                            
                                            <li><span class="label">Form of Payment</span> <span class="det"><?php echo $gValues[6];?></span></li>
                                            
                                            <li><span class="label">Order No</span> <span class="det"><?php echo $gValues[7];?></span></li>
                                            
                                                                                        
                                            <li class="bdr">
                                            	<div><span class="label">Sub Total</span> <span class="det"><?php echo $gValues[8];?></span></div>
                                            	<div><span class="label">Tax(VAT + S.T + Shipping)</span> <span class="det"><?php echo ($gValues[9]+$gValues[10]+$gValues[11]);?></span></div>
                                            </li>
                                            
                                            <li  class="bdr">
                                            	<div><span class="label">Total</span> <span class="det"><?php echo $gValues[12];?></span></div>
                                            </li>    
                                            
                                        </ul>
                                      
                                      

                                    </div>
                                <!--End order details block-->
                                <!--Start right block-->
                                	<div class="rightblock">
                                    	<h2>Bhook Lagi Yaar Tracker</h2>
                                        	<!--Start Steep Nav-->
                                             <div class="wizard-steps">
                                                  <div><a href="#step-one" class="one">Order Received</a></div>
                                                  <div class="active-step"><a href="#step-two">Pizza Prepared</a></div>
                                                  <div><a href="#">Pizza Baked</a></div>
                                                  <div><a href="#">Pizza Packed</a></div>
                                                  <div class="completed-step"><a href="#" class="fifth">Dispatched</a></div>
                                                </div>
                                    		<!--End Steep Nav-->
                                            
                                            <!--Stat Thanx Message Block-->
                                            	<div class="thanxmsgblock">
                                                	<p>Thank you for ordering with BLY</p>
                                                    <p><strong>Thanks for letting us know want, we are on it!</strong></p>
                                                </div>
                                            <!--End Thanx Message Block-->
                                            
                                            <!--Start form-->
                                            	<div class="feedbackform">
                                                	<dl>
                                                    	<dt>We would love to hear about your experience. Please specify what kind of feedback would you like to send us.</dt>
                                                        <dd>
                                                        	<label><input name="" type="radio" value="" />Appreciation</label>
                                                            <label><input name="" type="radio" value="" />Concern</label>
                                                            <label><input name="" type="radio" value="" />Suggestion</label>
                                                            <label><input name="" type="radio" value="" />Query</label>
                                                        </dd>
                                                        
                                                        <dt>What is your comment related to?</dt>
                                                        <dd>
                                                        	<label><input name="" type="radio" value="" />Product Related</label>
                                                            <label><input name="" type="radio" value="" />Service Related</label>
                                                        	<label><input name="" type="radio" value="" />Products &amp; Service Related</label>
                                                            <label><input name="" type="radio" value="" />Other</label>
                                                        </dd>
                                                        
                                                        <dt>May we have your comment please</dt>
                                                        <dd><textarea name="" cols="" rows=""></textarea></dd>
                                                        
                                                        <dd>Please put the captcha here</dd>
                                                        
                                                        <dd><input name="" type="text" class="ftextfiled" /></dd>
                                                        
                                                        <dd><input name="" type="submit" value="Submit" class="submitbtn" /></dd>
                                                        
                                                    </dl>
                                                </div>
                                            <!--End form-->
                                    </div>
                                <!--End right block-->
                            </div>
                        </div>
                    <!--End payment container-->
                <div class="clearfix"></div>
            </div>
        <!--End main container-->
        <!--Start Footer-->
        	<div class="footer">
            	<div class="finnercontainer">
           	  <div class="fblock1">
                    	<ul>
                        	<li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    
			  <div class="fblock2">
                    	<h4>Payment Through:</h4>
                        <div>
                        	<a href="#"><img src="images/nUntitled-15.png" /></a>
                            <a href="#"><img src="images/npaypal.png" /></a>
                            <a href="#"><img src="images/nUntitled-15.png" /></a>
						</div>
                    </div>
                    
              <div class="fblock3">
                    	<h4>About BhookLagiYaar</h4>
                        <p>Bhooklagi yaar is a virtual restaurant.It helps users to order food online from the list of restaurants and corresponding menu's. The Bhooklagiyaar yaar website module is sophisticated at the backend ,yet very simple at the front.This funda gives user a faster,reliable ordering experience. The name was chosen cause its the most used word when people are hungry.Imagine you sitting with the friends and are hungry. So just Bhook lagao and khana mangwao. </p>
                    </div>
                    
                     <div class="fblock4">
                    	<a href="#"><img src="images/ico-facebook.png"/></a>
                        <a href="#"><img src="images/ico-twitter.png"/></a>
                    </div>
                    
                </div>
            </div>
        <!--End Footer-->
    </div>
<!--End wrapper-->

</body>
</html>
