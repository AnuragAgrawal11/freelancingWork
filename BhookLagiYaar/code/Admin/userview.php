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

	<title>Cpanel</title>

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
		
		 <!-- #contentHeader -->	
		
		<div class="container">
			
				
			<div class="grid-16">
					

				<h1>Welcome Admin</h1>
                
                
					<table class="list-table" width="700px;">
            	<thead>
                	<tr>
                    	<th>Order Id</th>
                        <th>Name</th>
                        <th>Restuarant</th>
                        <th>Bill</th>
                        <th>TotalPay</th>
                       <th>Date</th>
                        
                        
                    </tr>
                </thead>
                  <?php 
							
			
					$queryStr = "SELECT * FROM order";	
	
		//echo $queryStr;
		$_SESSION['query_session'] = $queryStr ;
	 		
		$display = 0 ;
		
		/*
		Place code to connect to your DB here.
		*/
		//include('connect.php');	// include your code to connect to DB.
	
		$tbl_name="order";		//your table name
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
		$targetpage = "orderview.php"; 	//your file name  (the name of this file)
		$limit = 20; 								//how many items to show per page
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

                <tbody>
                	<tr>
                    
                     	<td align="center"><b><?php echo $table[0] ; ?></b></td>
                        
                        
                       <td align="center"><?php echo $table[1] ; ?></td>
                        	<td align="center"><?php echo $table[2] ; ?></td>
                   <td align="center"><?php echo $table[3] ; ?></td>
                   <td align="center"><?php echo $table[4] ; ?></td>
                   <td align="center"><?php if($table[5]==1) echo 'Yes'; else echo 'No'; ?></td>
                    <td align="center"><a href="delete.php?uid=<?php echo $table[0];?>">Delete</a></td>
                       
                        
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