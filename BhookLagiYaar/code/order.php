<?php
error_reporting(E_ERROR);
include "connect.php";
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLY</title>
<link href="css/screen.css" rel="stylesheet" />
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
 <script>
$(function() {
$( "#slider-range" ).slider({
range: true,
min: 0,
max: 500,
values: [ 75, 300 ],
slide: function( event, ui ) {
$( "#amount" ).val( "Rs" + ui.values[ 0 ] + ",Rs" + ui.values[ 1 ] );
}
});
$( "#amount" ).val( "Rs" + $( "#slider-range" ).slider( "values", 0 ) +
"-Rs" + $( "#slider-range" ).slider( "values", 1 ) );
});
</script>
 <style type="text/css">

table.tab {border:outset 0px; border-collapse:collapse}
td.tab {border-bottom:solid 1px;margin-top:5px}

</style>

    
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
	color: #333333;
}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #CC6600;
	color: #333333;
	background-color: #F1FFD6;
}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin-right: 2px;
	border: 1px solid #B2E05D;
	font-weight: bold;
	background-color: #333333;
	color: #FFF;
}
div.pagination span.disabled {
	padding: 2px 5px 2px 5px;
	margin-right: 2px;
	border: 1px solid #f3f3f3;
	color: #ccc;
}
        </style>
        
</head>

<body>
<!--Start wrapper-->
	<div class="wrapper">
    	<div class="top">
        	<div class="header">
            	<div class="logoholder"><a id="home" href="index.php"></a></div>
            </div>
        </div>
    	<!--Start main container-->
        	<div class="maincontainer">
            	<!--Start socialfeeds-->
                	<div style="float:left;"><img src="images/socialfeed.jpg"/></div>
              <!--End socialfeeds-->
              		<div class="clearfix"></div>
                <!--Start left panel-->
                	<div class="leftpanel">
                    
                    	<div class="filtermain_container">
                        
                        <!--Start Filter by Cuisine-->
                        	<h2 class="mainheading">Filter</h2>
                    		<div class="tagcloud">
                                <p>
                                	<span class="tag12"><a href="#">Rajma Rice</a></span>
                                    <span class="tag22"><a href="#">Palak Paneer</a></span>
                                    <span class="tag14"><a href="#">Chicken Korma</a></span>
                                    <span class="tag12"><a href="#">Tandori Murga</a></span>
                                    <span class="tag18"><a href="#">Subz E Hind</a></span>
                                </p>
                               
                        	</div>
                        <!--End Filter by tags--> 
                        
                        <form name="filter" action="" method="post" >
                    	<!--Start Filter by Cuisine-->
                        	<h2>Filter By Cuisine</h2>
                    		<div class="filterbycuisine">
                                <label><input name="cuisine[]" type="checkbox" value="1" />Chinese</label>
                                <label><input name="cuisine[]" type="checkbox" value="2" />Fast Food</label>
                        	</div>
                        <!--End Filter by Cuisine-->    
                        
                    	<!--Start filter by min order-->
                        	<h2>Filter by min order</h2>
                        	<div class="filterorder">
                            	<p><label for="amount"><font color="#FFFFFF">Minimum Amount</font></label>
									<input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold; background:transparent; width:110px; margin:0 auto;padding-left:10px;" name="amount" value=""/>
                                    
								</p>
								<div id="slider-range"></div><br />

<div class="searchbolck">
 
                                <input name="Submit" type="Submit" class="searchbtn" value="Submit" style="width:97%"/></div>
                            </div>
                        <!--End filter by min order-->
                        </div>
                 
        
                        <!--Start search block-->
                        	<div class="searchbolck">
                           
                            	<input name="" type="text" class="searchfiled"  onBlur="if (value == '') {value = 'Search anyrhing'};" onFocus="if (value == 'Search anyrhing') {value =''};" value="Search anyrhing" /><input name="" type="submit" class="searchbtn" value="Search"/>
                                
                            </div>
                            
                        <!--End search block-->
                    </div>
                <!--End left panel-->
                <!--Start right panel-->
                	<div class="rightpanel">
                    	<div class="shorter">
                        	<div class="restroheading"><a href="#">Restaurant name <img src="images/arrow-up.png" /> <img src="images/arrow-down.png" /></a></div>
                            
                            <div class="minorderheading"><a href="#">Min Order <img src="images/arrow-up.png" /> <img src="images/arrow-down.png" /></a></div>
                            
                            <div class="deliverytimeheading"><a href="#">Delivery Time <img src="images/arrow-up.png" /> <img src="images/arrow-down.png" /></a></div>
                            
                            <div class="ratingheading"><a href="#">Rating <img src="images/arrow-up.png" /> <img src="images/arrow-down.png" /></a></div>
                      </div>
                        <!--Start order list-->
                            <div class="orderlist">
                          
                          
                                   
                   
                            
                            <?php 
							
							if(isset($_REQUEST['Submit']))
	 {
					
					
					//echo "inside submit";
		foreach ($_REQUEST['cuisine'] as $selectedOption)
		{	$d[] = $selectedOption ;
	//echo $selectedOption.'<br>';

   
		}
$cs = join(",",$d);
//echo $cs;
if($_REQUEST["amount"]=='')
{
	$f_amount[0] = 0;
	}
	else{
$amount = explode(",", $_REQUEST["amount"]);
$min_amount = filter_var($amount[0],FILTER_SANITIZE_NUMBER_INT)
;
$f_amount = explode("-", $min_amount);
//echo $f_amount[0];
//$max_amount = $amount[1];
  // echo $min_amount;
	}
	$search_area = $_REQUEST["searchField"];
	$location = explode(",", $search_area);
	$location_area =  trim($location[0]); // piece1
	
	$location_city = trim($location[1]);
	 
		
		$query1 = "SELECT * FROM m_city WHERE city_name= '".$location_city."'";
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		$city_id = $rows1['city_id'];
		//echo $query;
		$query2 = "SELECT * FROM m_area WHERE area_name= '".$location_area."' && ref_city_id = '".$city_id."'";
		//echo $query1; 
		$rsd2 = mysql_query($query2);
		$rows2 = mysql_fetch_assoc($rsd2);
		$area_id = $rows2['area_id'];
		//echo $area_id;
		
		if($_REQUEST['cuisine']==0 || $_REQUEST['cuisine']=='')				{
					$queryStr = "SELECT * FROM restaurant WHERE type IN (1,2) && ref_m_area = $area_id && ref_m_city = $city_id AND min_order_amount >= $f_amount[0]";	
						}
					
						
				else{
			$queryStr = "SELECT * FROM restaurant WHERE type IN ($cs) && ref_m_area = $area_id && ref_m_city = $city_id AND min_order_amount >= $f_amount[0]";
						}
		
		
		
		
		//echo $queryStr;
		$_SESSION['query_session'] = $queryStr ;
	 		
		$display = 0 ;
		
		/*
		Place code to connect to your DB here.
		*/
		//include('connect.php');	// include your code to connect to DB.
	
		$tbl_name="restaurant";		//your table name
		// How many adjacent pages should be shown on each side?
		$adjacents = 1;
		
		/* 
		   First get total number of rows in data table. 
		   If you have a WHERE clause in your query, make sure you mirror it here.
		*/
		$query = $_SESSION['query_session'];
		//echo $query;
		$total_pages = mysql_num_rows(mysql_query($query));
			
			if($total_pages==0){
		?>
        <h1 align="center" style="background-color:#CCC;min-height:300px;padding-top:220px;"><font color="#FF0000" size="+2">Search again no data has been found</font></h1>
        <?php } 
		
		else{
		
		//echo $total_pages;
		//mysql_fetch_array(mysql_query($query));	
		//$total_pages = $total_pages['num'];	
		//echo $query;
		//echo $total_pages;		/* Setup vars for query. */
		$targetpage = "order.php"; 	//your file name  (the name of this file)
		$limit = 3; 								//how many items to show per page
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
				$pagination.= "<a href=\"$targetpage?page=$prev&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">&laquo previous </a>";
				
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
					$pagination.= "<a href=\"$targetpage?page=$counter&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">$counter</a>";					
					
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
						$pagination.= "<a href=\"$targetpage?page=$counter&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">$counter</a>";					
										
					}
				}
				$pagination.= "...";
				
				$pagination.= "<a href=\"$targetpage?page=$lpm1&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">$lpm1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=$lastpage&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\]\">$lastpage</a>";		
				
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=2&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">2</a>";
				
				$pagination.= "...";
				
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
					{
						$pagination.= "<span class=\"current\">$counter</span>";
						
					}	
					else
					{
						$pagination.= "<a href=\"$targetpage?page=$counter&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">$counter</a>";					
						
					}
						
				}
				$pagination.= "...";
				
				$pagination.= "<a href=\"$targetpage?page=$lpm1&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">$lpm1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=$lastpage&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">$lastpage</a>";		
				
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=2&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">2</a>";
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
						$pagination.= "<a href=\"$targetpage?page=$counter&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">$counter</a>";					
						
					}
						
				}
			}
		}
		
		//next button
		if ($page < $counter - 1)
		{
			$pagination.= "<a href=\"$targetpage?page=$next&searchField=$search_area&amount=$f_amount[0]&cuisine=$d[0]&cuisine=$d[1]&Submit=Submit\">next &raquo;</a>";
			
		} 

		else
		{
			$pagination.= "<span class=\"disabled\">next &raquo;</span>";
			
		}
			
		$pagination.= "</div>\n";		
		
	} 
		
		
		while($table = mysql_fetch_array($result))
		{
		?>
                            	<div class="o_list">
                                    <div class="restroimg"><a href="#"><img src="<?php echo $table['logo'];?>" /></a></div>
                                    <div class="restrodetail"><h4><?php echo $table['name'];?></h4>
    <?php echo $table['address'];?></div>
                                    <div class="minorderblock">
                                        <div><a href="#" class="minorder"><?php echo $table['min_order_amount'];?></a></div>
                                        <div><a href="menu.php?resId=<?php echo $table['restaurant_id'];?>"  class="browsemenubtn">Browse menu</a></div>
                                    </div>
                                    <div class="deliverytime">
                                        <span>180 min.</span>
                                        <div><a href="#" class="voucherbtn">Voucher</a></div>
                                    </div>
                                    <div class="rating">
                                        <div class="starratingblock">
                                        <img src="images/rating_star.png" /><img src="images/rating_star.png" /><img src="images/rating_star.png" /><img src="images/rating_star.png" /><img src="images/rating_star.png" />
                                        <div>
                                    </div>
                                </div>
                            </div>
                        		</div>
                                
                                 <?php
		}
		
		echo $pagination;	
	
      
		
	 }
	 }
?>
 
 
 <input type="hidden" name="searchField" value=" <?php echo $location_area; ?>,<?php echo $location_city; ?>"  />
</form>
 
                        <!--End order list-->
                    </div>
                   
                <!--End right panel-->
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
