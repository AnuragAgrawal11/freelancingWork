<?php
error_reporting(E_ERROR);
	include("connect.php");
	include("includes/functions.php");
	
	$customerid=$_SESSION['user_id'];
		if($_REQUEST['command']=='update'){
		$name=$_REQUEST['name'];
		//echo $name."<br>";
		$email=$_REQUEST['email'];
		//echo $email."<br>";
		$address=$_REQUEST['address'];
		//echo $address;
		$phone=$_REQUEST['phone'];
		//echo $phone."<br>";
		$resturantid=$_REQUEST['resId'];
		//echo $resturantid."<br>";
		if($_SESSION['istrue']==1)
		{
				$customerid=$_SESSION['user_id'];	
		}
		else{
		$query = "insert into customer (Username,mobile,email,address) values ('".mysql_real_escape_string(stripslashes($name))."', '".mysql_real_escape_string(stripslashes($email))."' , '".mysql_real_escape_string(stripslashes($phone))."', '".mysql_real_escape_string(stripslashes($address))."') " ;	
	if($result = mysql_query($query))
	{
		
	}
	else
	{
		echo mysql_error();
	}

	$customerid=mysql_insert_id();
}
	$query1 = "SELECT * FROM restaurant WHERE restaurant_id= '".$_REQUEST['resId']."'";
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		$shipping = $rows1['shipping_charges'];	
		$service  = $rows1['service_charges'];
		$rsname  = $rows1['name'];
		$raddress = $rows1['address'];
		$bt = get_order_total();
		$vat1 = .125*($bt);
		$tt= get_order_total(); 
		$tt=($tt*0.125)+$tt+$shipping+$service;
		
		
		$date=date('Y-m-d');
		$qt=0;
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			$qt = $qt+$q;
			
		}
		//echo $qt;
		
		$query1 = "insert into orders (ref_customer_id, ref_restaurant_id, amount,vat_tax,shipping_charges,service_charges,total_pay_amount,no_of_itmes,order_date) values ('".mysql_real_escape_string(stripslashes($customerid))."', '".mysql_real_escape_string(stripslashes($_REQUEST['resId']))."' , '".mysql_real_escape_string(stripslashes($bt))."', '".mysql_real_escape_string(stripslashes($vat1))."', '".mysql_real_escape_string(stripslashes($shipping))."', '".mysql_real_escape_string(stripslashes($service))."', '".mysql_real_escape_string(stripslashes($tt))."', '".mysql_real_escape_string(stripslashes($qt))."', '".mysql_real_escape_string(stripslashes($date))."') " ;	
	if($result1 = mysql_query($query1))
	{
		
	}
	else
	{
		echo mysql_error();
	}
		$orderid=mysql_insert_id();
		
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			mysql_query("insert into order_items values ($orderid,$pid,$q,$price)");
		}
		$aValues = array($name,$phone,$address,$rsname,$raddress,$date,"Cash on Delivery",$orderid,$bt,$vat1,$service,$shipping,$tt);
	$url = 'confirm_order.php?';
		$first = true;
		foreach($aValues as $key => $value) {
		  if(!$first) $url .= '&';
		  else $first = false;
		  $url .= 'aValues['.urlencode($key).']='.urlencode($value);
		}
	
	
	header( 'Location:'.$url ) ;
       
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLY</title>
<link href="css/screen.css" rel="stylesheet" />
<script src="js/yetii.js"></script>   
<script src="js/jquery-1.7.1.min.js"></script>

<script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
	}
</script>
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
                        	<h2>Choose Payment Method</h2>
                            <!-- Start tabs -->

							<div id="demo" class="demolayout">

                            <ul id="demo-nav" class="demolayout">
                                <li><a href="#tab1">Cash On Delivery</a></li>
                                <li><a href="#tab2">Credit Card</a></li>
                                <li><a href="#tab3">Debit Card</a></li>
                                <li><a href="#tab4">Net Banking</a></li>
                                <li><a href="#tab5">Cash Cards</a></li>
                            </ul>
    
							<div class="tabs-container">
                                
                                <!--Start Cash/Sodexo--->
                                <div class="tab" id="tab1">
                                	<dl>
                                     	<form name="form1" onsubmit="return validate();">
                           <?php echo $resturantid;?>             
    <input type="hidden" name="command" />
    <input type="hidden" name="resId" value="<?php echo $_REQUEST['resId'];?>"		 />
     <font size="+2">Billing Info</font><br />
<br />
	
										<dt><font size="4">Order Total:</font></dt>
										<?php 
										$query1 = "SELECT * FROM restaurant WHERE restaurant_id= '".$_REQUEST['resId']."'";
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		$shipping = $rows1['shipping_charges'];	
		$service  = $rows1['service_charges'];	
		$tt= get_order_total(); $tt=($tt*0.125)+$tt+$shipping+$service;
										?>
                                        <dd><font size="4">Rs. <?php echo $tt;?></font></dd>
                                       
                                       <dt><font size="4">Name :</font></dt>
                                       <dd><input name="name" type="text" class="inputfiled" /></dd> 
                                       <dt><font size="4">Mobile No :</font></dt>
                                       <dd><input type="text" disabled="disabled" readonly="readonly" class="countrycode" value="+91"><input name="phone" type="text"  class="inputfiled mobileno" /></dd> 
                             <dt><font size="4">Address :</font></dt>
                                       <dd><input type="text" name="address" class="inputfiled" /></dd>           
                                      <dt><font size="4">Email :</font></dt>
                                       <dd><input name="email" type="text"  class="inputfiled" /></dd>
                                       
                                       <dd style="margin-left:30%"><input type="submit" value="Place Order" style="padding:5px" /></dd>   
                                     </form>   
									</dl>
                                    
                                    
                                </div>	
                                <!--End Cash/Sodexo--->
                                
                                <!--Start Credit Card--->
                                <div class="tab" id="tab2">
                                    <dl>
                                     				
										
	

									</dl>
                                </div>	
                                <!--End Credit Card--->
                                
                                <!--Start Debit Card--->
                                <div class="tab" id="tab3">
                                    <h2>Tab 3</h2>
                                </div>	
                                
                                <!--End Debit Card-->
                                <!--Start Net Banking--->
                                <div class="tab" id="tab4">
                                                    
                                   <h2>Net Banking</h2>
                                                        
                                 </div>
                                <!--End Net Banking--> 
                                
                                <!--Start Cash Cards--->
                                <div class="tab" id="tab5">
                                                    
                                   <h2>Cash Cards</h2>
                                                        
                                 </div>
                                <!--End Cash Cards-->                    

							</div>
						
                        </div>

						<script type="text/javascript">
                        
                        function customfunction(tabnumber) {
                        <!--if (tabnumber==3) alert('You clicked tab number 3!');-->
                        }
                        
                        var tabber1 = new Yetii({
                        id: 'demo',
                        callback: customfunction,
                        persist: true
                        });
                        
                        </script>

						<!--End tabs -->
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
