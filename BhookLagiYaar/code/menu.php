<?php
error_reporting(E_ERROR);
include "connect.php";
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLY</title>
<link href="css/menu.css" rel="stylesheet" />
<script type="text/javascript" language="javascript" src="jquery_1.5.2.js"></script>
<script type="text/javascript" language="javascript" src="vasplus_programming_blog_shopping_cart_v4.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="vasplus_programming_blog_shopping_cart_v4.css" />
<style>
     
div.pagination {
	padding:3px;
	margin:3px;
	text-align:right;
}

div.pagination a {
	padding: 2px 5px 2px 5px;
	margin-right: 2px;
	border: 1px solid #ddd;
	
	text-decoration: none; 
	color: #88AF3F;
}
div.pagination a:hover, div.pagination a:active {
	border:1px solid #85BD1E;
	color: #638425;
	background-color: #F1FFD6;
}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin-right: 2px;
	border: 1px solid #B2E05D;
	font-weight: bold;
	background-color: #B2E05D;
	color: #FFF;
}
div.pagination span.disabled {
	padding: 2px 5px 2px 5px;
	margin-right: 2px;
	border: 1px solid #f3f3f3;
	color: #ccc;
}
        </style>
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked 
	$("#firstpane p.menu_head").click(function()
    {
		$(this).css({backgroundImage:"url(down.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
       	$(this).siblings().css({backgroundImage:"url(left.png)"});
	});
	
});
</script>
<script language="javascript">
	function addtocart(pid,bid){
		
		//alert("hello");
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.resId.value='<?php echo $_REQUEST['resId'];?>';
		var qant = document.getElementById("textb"+bid).value;
		document.form1.quantity.value=qant;
		document.form1.submit();
	}
</script>   

</head>

<body>
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
    <input type="hidden" name="resId" />
     <input type="hidden" name="quantity" />
</form>
<!--Start wrapper-->
	<div class="wrapper">
    	<div class="top">
        	<div class="header">
            	<div class="logoholder"><a id="home" href="index.php"></a></div>
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
                    <!--Start Steep Nav-->
                     <div class="wizard-steps">
                          <div><a href="javascript:history.back()" class="one">1 Begin Search</a></div>
                          <div class="active-step"><a href="#step-two">2 Select Restaurant </a></div>
                          <div><a href="#">3  Create Order</a></div>
                          <div><a href="#">4 Enter Details</a></div>
                          <div class="completed-step"><a href="#" class="fifth">5 Enjoy Your Food</a></div>
                        </div>
            <!--End Steep Nav-->
            <div class="clearfix"></div>
                <!--Start left panel-->
                	<div class="leftpanel" style="width:217px;">
                    
                    	<div class="filtermain_container">
                        
                        	<h2 class="mainheading" style="width:217px;">Select Category</h2>
                            
                            <div class="selct_categories">
                            	<a href="#" class="select_veg">veg</a>
                                <a href="#" class="select_nonveg">veg</a>
                            </div>
                    		
                            <ul class="categories_veg">
                            	<li><a href="#">Beverages</a></li>
                                <li><a href="#">Breads</a></li>
                                <li><a href="#">Chinese Gravies</a></li>
                                <li><a href="#">Chinese Starters</a></li>
                                <li><a href="#">Desserts</a></li>
                                <li><a href="#">Dimsums</a></li>
                                <li><a href="#">Extras</a></li>
                                <li><a href="#">Raitha</a></li>
                                <li><a href="#">Rice</a></li>
                                <li><a href="#">Rice/Noodles</a></li>
                                <li><a href="#">Salads</a></li>
                                <li><a href="#">Soup</a></li>
                                <li><a href="#">Starters</a></li>
                                <li><a href="#">Veg Gravies </a></li>
                            </ul>
                       
                        </div>
                    </div>
                <!--End left panel-->
                <?php
				$resId = $_REQUEST["resId"];
                $query1 = "SELECT * FROM restaurant WHERE restaurant_id = '".$resId."'";
		//echo $query1; 
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		//$res_name = $rows1['name'];
				//echo $res_name;
				?>
                
                <!--Start right panel-->
                	<div class="rightpanel">
                    	<!--Start-->
                        	<div class="createorder_container">
                            	<div class="mainitem_block">
                                	<div class="leftblock">
                                    	<div class="imgblock"><img src="<?php echo $rows1['logo'];?>" /></div>
                                        <div class="menuicon">
                                        	<ul>
                                            	<li><a href="#"><img src="images/ico_airconditioning.png" title="Airconditioning" /></a></li>
                                                <li><a href="#"><img src="images/ico_smoking.png" title="Smoking" /></a></li>
                                                <li><a href="#"><img src="images/ico_tablebooking.png" title="table booking" /></a></li>
                                                <li><a href="#"><img src="images/ico_drink.png" title="serves alcohol" /></a></li>
                                                <li><a href="#"><img src="images/ico_wifi.png" title="Wifi" /></a></li>
                                                <li><a href="#"><img src="images/ico_homedelivery.png" title="Home Delivery" /></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="itemdetails">
                                    	<h2><?php echo $rows1['name'];?></h2>
                                        <p>A Multi Cuisine Family Restaurant<br />
<?php echo $rows1['address'];?><br />
<strong>Phone:</strong>&nbsp;<?php echo $rows1['phone_1'];?> <?php echo $rows1['phone_1'];?></p>
<p><a href="#" class="check_location"><?php echo $rows1['name'];?> on Map</a></p>
<p><a href="#" class="add">Add this restaurant to favorites </a></p>
                                    </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                <!--Start search menu order-->
                                	<div class="searchordermenu">
                                    	
                                        
                                       
                                    </div>
                                <!--End search menu order-->
                                
                                <!--Start order list container-->
                                	
                                 <div class="orderlistcontainer">
                                    
                                    	      
                                        
                            <?php 
	
		$queryStr = "SELECT * FROM item WHERE ref_restaurant_id= '".$resId."'";
		//echo $queryStr;
		$_SESSION['query_session'] = $queryStr ;
	 		
		$display = 0 ;
		
		/*
		Place code to connect to your DB here.
		*/
		//include('connect.php');	// include your code to connect to DB.
	
		$tbl_name="item";		//your table name
		// How many adjacent pages should be shown on each side?
		$adjacents = 1;
		
		/* 
		   First get total number of rows in data table. 
		   If you have a WHERE clause in your query, make sure you mirror it here.
		*/
		$query = "SELECT * FROM item WHERE ref_restaurant_id= '".$resId."'";
		//echo $query;
		$total_pages = mysql_num_rows(mysql_query($query));
		if($total_pages!=0){
		//echo $total_pages;
		//mysql_fetch_array(mysql_query($query));	
		//$total_pages = $total_pages['num'];	
		//echo $query;
		//echo $total_pages;		/* Setup vars for query. */
		$targetpage = "menu.php"; 	//your file name  (the name of this file)
		$limit = 8; 								//how many items to show per page
		$page = $_GET['page'];
		if($page) 
			$start = ($page - 1) * $limit; 			//first item to display on this page
		else
			$start = 0;								//if no page var is given, set start to 0
		
		/* Get data. */
		$sql = $_SESSION['query_session'];
		$sql .= " LIMIT $start, $limit";
		
		$result = mysql_query($sql);
		
		/* Setup page vars for display. */
		if ($page == 0) $page = 1;					//if no page var is given, default to 1.
		$prev = $page - 1;							//previous page is page - 1
		$next = $page + 1;							//next page is page + 1
		$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
		$lpm1 = $lastpage - 1;						//last page minus 1
		
		/* 
			Now we apply our rules and draw the pagination object. 
			We're actually saving the code to a variable in case we want to draw it more than once.
		*/
	
	
	
	$pagination = "";
	if($lastpage > 1)
	{	
		 
		$pagination .= "<div class='pagination'>";		
		
		
		//previous button
		if ($page > 1) 
			{
				$pagination.= "<a href=\"$targetpage?page=$prev&searchField=$search_area\">&laquo previous </a>";
				
			}
		else
		{
			$pagination.= "<span class=\"disabled\">&laquo previous</span>";	
			
		}		
			
			
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
				{
					$pagination.= "<span class=\"current\">$counter</span>";
				 	
				}					
				else
				{
					$pagination.= "<a href=\"$targetpage?page=$counter&searchField=$search_area\">$counter</a>";					
					
				}
					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
					{											
						$pagination.= "<span class=\"current\">$counter</span>";
									
					}						
					else
					{						
						$pagination.= "<a href=\"$targetpage?page=$counter&searchField=$search_area\">$counter</a>";					
										
					}
				}
				$pagination.= "...";
				
				$pagination.= "<a href=\"$targetpage?page=$lpm1&searchField=$search_area\">$lpm1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=$lastpage&searchField=$search_area\">$lastpage</a>";		
				
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1&searchField=$search_area\">1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=2&searchField=$search_area\">2</a>";
				
				$pagination.= "...";
				
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
					{
						$pagination.= "<span class=\"current\">$counter</span>";
						
					}	
					else
					{
						$pagination.= "<a href=\"$targetpage?page=$counter&searchField=$search_area\">$counter</a>";					
						
					}
						
				}
				$pagination.= "...";
				
				$pagination.= "<a href=\"$targetpage?page=$lpm1&searchField=$search_area\">$lpm1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=$lastpage&searchField=$search_area\">$lastpage</a>";		
				
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1&searchField=$search_area\">1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=2&searchField=$search_area\">2</a>";
				echo $pagination;
				$pagination.= "...";
				
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
					{
						$pagination.= "<span class=\"current\">$counter</span>";
						
					}						
					else
					{
						$pagination.= "<a href=\"$targetpage?page=$counter&searchField=$search_area\">$counter</a>";					
						
					}
						
				}
			}
		}
		
		//next button
		if ($page < $counter - 1)
		{
			$pagination.= "<a href=\"$targetpage?page=$next&searchField=$search_area\">next &raquo;</a>";
			
		} 

		else
		{
			$pagination.= "<span class=\"disabled\">next &raquo;</span>";
			
		}
			
		$pagination.= "</div>\n";		
		
	} 
		
		?>
        <br />

        <p style="font-size:20px;" align="center"><strong>You are ordering from <font color="#666666"><?php echo $rows1['name'];?></font> menu</strong></p>
        <ul> 
		<?php
		$i = 0;
		while($table = mysql_fetch_array($result))
		{ 		
		$i++;
		?>
                                     
                                        
                                        	<li>
                                            	<div class="itemname"><strong><?php echo $table['item_name'];?></strong></div>
                                                <div class="itemprice">Rs <?php echo $table['price'];?></div>
                                                <table style="width:54%" border="1">
                                                  <tr>
                                                    <td><div class="item_quantity" style="margin-right:-235%"><input type="text" id="textb<?php echo $i;?>" class="iqty" value="0">
                                                </div></td>
                                                    <td>  <div class="item_add" style="margin-left:5%;"><a class="iadd" onClick="textb<?php echo $i;?>.value= (+textb<?php echo $i;?>.value+1)">+</a></div></td>
                                                    <td style="float:right"><input type="button"  value="Add to cart" onclick="addtocart(<?php echo $table['item_id'];?>,<?php echo $i;?>);" /></td>
                                                  </tr>
                                                </table>

                                                
                                                
                                              
                                                
                                            </li>
                                            <?php
		}}
		
		echo $pagination;	
		if($total_pages==0){
		?>
        <h3 align="center"><font color="#FF0000">Search again no data has been found</font></h3>
        <?php 
		}
	
?>
                                          
                                   </ul>
                              </div>
                                <!--End order list container-->
                            </div>
                        <!--End-->
                        
                        <!--Start order detail-->
                   	  <div class="orderdetails">
                            	<h3>Your Order <span><a href="#">Ematy Cart</a></span></h3>
                                <div class="restro_detail">
                                    <div class="re_left">
                                        <div class="imgblock"><img src="images/res_sagrratna.jpg" /></div>
                                        <div class="cod">Cash On Delivery</div>
                                  </div>
                                      
                                     <div class="re_right">
                                     	<p><strong><?php echo $rows1['name'];?></strong></p>
                                        <p><?php echo $rows1['address'];?></p>
                                  </div> 
                                </div>
                                
                        <div class="cart_total">
                          <?php
									$re= $_REQUEST['resId'];
									//echo $re;
	include("connect.php");
	$re=$_REQUEST['resId'];
	include("includes/functions.php");
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		$qu=$_REQUEST['quantity'];
		addtocart($pid,$qu);
		?>
        <script>
        window.location="menu.php?resId=<?php echo $_REQUEST['resId']; ?>";
        </script>
		
		
		<?php
		exit();
	}
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}

?>

<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form2.pid.value=pid;
			document.form2.command.value='delete';
			document.form2.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form2.command.value='clear';
			document.form2.submit();
		}
	}
	function update_cart(){
		document.form2.command.value='update';
		document.form2.submit();
	}


</script>



<form name="form2" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="left"><strong>Your Shopping Cart</strong></h1>
    
    </div>
    	<div style="color:#F00"><?php echo $msg?></div>
    	<ul>
    	<?php
			if(is_array($_SESSION['cart'])){
            	
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<li>
                                        	<div class="finalitemlist">
                                            	<div class="order_qty">
                                        <a class="add"><img  src="images/plus.png" class="cart_plus"></a>
                                        <a class="minus"><img src="images/minus.png" class="cart_minus" ></a>
                                        <input type="text" name="product<?php echo $pid?>" value="<?php echo $q;?>" maxlength="3" size="2"  class="showQtyInputBox">
                                    </div>
                                            	<div class="fitemname"><?php echo $pname;?></div>
                                               
                                                 <div class="fprice">Rs <?php echo get_price($pid)*$q;?></div>
                                                <a href="javascript:del(<?php echo $pid?>)" class="remove"></a>
                                            </div>
                                        </li>
                    
                   
                  
                   
                    
            <?php					
				}
			?>
				
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
       
    </div>
</form>
                                	
                                    	
                                        
                                        
                                        
                                        
                                        <li>
                                        	<div class="vat">+ Including 12.50% VAT <span><?php echo get_order_total()?></span></div>
                                            <?php 
											$query1 = "SELECT * FROM restaurant WHERE restaurant_id= '".$_REQUEST['resId']."'";
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		$shipping = $rows1['shipping_charges'];	
		$service  = $rows1['service_charges'];
											
											?>
                                            <div class="vat">+ Shipping Charges Rs. <span><?php echo $shipping; ?></span></div>
                                             <div class="vat">+ Service Charges Rs. <span><?php echo $service; ?></span></div>
                                            <div class="total">Total <span><?php $tt= get_order_total(); $tt=($tt*0.125)+$tt+$shipping+$service; echo $tt;?></span></div>
                                        </li>
                                        
                                       <li><input type="button" value="Clear Cart" onclick="clear_cart()"><input type="button" value="Update Cart" onclick="update_cart()"></li>
                                       
                                    </ul>
                          </div>
                        	<div><a href="payment.php?resId=<?php echo $_REQUEST['resId'];?>"><img src="images/confirnorderbtn.png" /></a></div>
                        </div>
                        <!--End order detail-->
                        
                    </div>
                <!--End right panel-->
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
