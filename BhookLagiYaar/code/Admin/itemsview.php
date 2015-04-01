<?php
ini_set( "display_errors", 0);
session_start();
include "connect.php";
if($_SESSION['istrue']==1)
{

?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Control Panel</title>

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
					

				<h1>Welcome Admin</h1>
                 <?php if($_GET['uinfo']==1){ ?>
					 <div class="notify notify-success">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p>DATA Upadted SUCCESSFULLY</p>
					</div>
                    <?php } ?>
                
						
						<?php if($_GET['dinfo']==1){ ?>
        <div class="notify notify-success"> <a href="javascript:;" class="close">&times;</a>
          <h3>Succes</h3>
          <p>DATA DELETED SUCCESSFULLY</p>
        </div>
        <?php } ?>
					
					 <table style="padding:10px;border:dashed" class="table table-striped" width="90%">
                     
            	<thead>
                	<tr height="60px">
                    	<th>Restaurant Name</th>
                        <th>Cusine</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Type</th>
                       <th>Ad Ons</th>
                       <th>Status</th>
                       <th>Edit</th>
                       <th>Delete</th>
                     
                    </tr>
                </thead>
                
                  <tbody>
                <?php 
						
					
					$queryStr = "SELECT * FROM item";	
	
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
		$query = $_SESSION['query_session'];
		//echo $query;
		$total_pages = mysql_num_rows(mysql_query($query));
	
		//echo $total_pages;
		//mysql_fetch_array(mysql_query($query));	
		//$total_pages = $total_pages['num'];	
		//echo $query;
		//echo $total_pages;		/* Setup vars for query. */
		$targetpage = "itemsview.php"; 	//your file name  (the name of this file)
		$limit = 10; 								//how many items to show per page
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
				$pagination.= "<a href=\"$targetpage?page=$prev\">&laquo previous </a>";
				
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
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
					
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
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
										
					}
				}
				$pagination.= "...";
				
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=$lastpage\]\">$lastpage</a>";		
				
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				
				$pagination.= "...";
				
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
					{
						$pagination.= "<span class=\"current\">$counter</span>";
						
					}	
					else
					{
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
						
					}
						
				}
				$pagination.= "...";
				
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
				
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
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
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
						
					}
						
				}
			}
		}
		
		//next button
		if ($page < $counter - 1)
		{
			$pagination.= "<a href=\"$targetpage?page=$next\">next &raquo;</a>";
			
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
                
				


              
                	<tr>
                    <?php    
                   $query1 = "SELECT name FROM restaurant WHERE restaurant_id= '".$table[1]."'";
				  // echo $query1;
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		
		
		 $query2 = "SELECT category_name FROM m_menu_category WHERE category_id= '".$table[2]."'";
				  // echo $query1;
		$rsd2 = mysql_query($query2);
		$rows2 = mysql_fetch_assoc($rsd2);
		
                   ?>
                     	<td align="left"><b><?php echo $rows1['name'] ; ?></b></td>
                       <td><?php echo $rows2['category_name'] ; ?></td>
                        	<td><?php echo $table[3] ; ?></td>
                            <td><?php echo $table['price'] ; ?></td>
                            <td><?php if($table['type']==1){ echo "Veg";} else echo "Non Veg" ; ?></td>
                            <td><?php if($table['is_ad_ons']==1){ echo "Yes";} else echo "No" ; ?></td>
                   <td><?php if($table[4]==1){ echo "Active";} else echo "Inactive" ; ?></td>
                 
                   <td><a href="itemsup.php?iid=<?php echo $table[0];?>"><img src="images/silk/pencil.png"></a></td>
                  
                       <td ><a href="delete_items.php?iid=<?php echo $table[0];?>"><img src="images/silk/cross.png"></a></td>
                       
                    </tr>
                    
                    
                    <?php
}
echo $pagination;
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