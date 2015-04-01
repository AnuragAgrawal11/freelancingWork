
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

	<title>Canvas Admin - Invoice</title>

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
	<link rel="stylesheet" href="stylesheets/sample_pages/invoice.css" type="text/css" />	

</head>

<body>

<div id="wrapper">
	
	<div id="header">
		<h1><a href="dashboard.html">Canvas Admin</a></h1>		
		<a href="javascript:;" id="reveal-nav">
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
		</a>
	</div> <!-- #header -->
	
	<div id="search">
		<form>
			<input type="text" name="search" placeholder="Search..." id="searchField" />
		</form>		
	</div> <!-- #search -->
	
	<div id="sidebar">		
		
		<ul id="mainNav">			
			<li id="navDashboard" class="nav">
				<span class="icon-home"></span>
				<a href="dashboard.html">Dashboard</a>				
			</li>
						
			<li id="navPages" class="nav active">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Sample Pages</a>				
				
				<ul class="subNav">
					<li><a href="invoice.html">Invoice</a></li>
					<li><a href="support.html">Support</a></li>
					<li><a href="people.html">People Directory</a></li>
					<li><a href="calendar.html">Calendar</a></li>
					<li><a href="stream.html">Stream</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="reports.html">Reports</a></li>
				</ul>						
			</li>	
			
			<li id="navForms" class="nav">
				<span class="icon-article"></span>
				<a href="javascript:;">Form Elements</a>
				
				<ul class="subNav">
					<li><a href="forms.html">Layouts & Elements</a></li>
					<li><a href="forms-validations.html">Validations</a></li>					
				</ul>	
			</li>
			
			<li id="navType" class="nav">
				<span class="icon-info"></span>
				<a href="typography.html">Typography</a>	
			</li>
			
			<li id="navGrid" class="nav">
				<span class="icon-layers"></span>
				<a href="grids.html">Grid Layout</a>	
			</li>
			
			<li id="navTables" class="nav">
				<span class="icon-list"></span>
				<a href="tables.html">Tables</a>	
			</li>
			
			<li id="navButtons" class="nav">
				<span class="icon-compass"></span>
				<a href="buttons.html">Buttons & Icons</a>	
			</li>
			
			<li id="navInterface" class="nav">
				<span class="icon-equalizer"></span>
				<a href="interface.html">Interface Elements</a>	
			</li>
			
			<li id="navCharts" class="nav">
				<span class="icon-chart"></span>
				<a href="charts.html">Charts & Graphs</a>
			</li>
			
			<li id="navMaps" class="nav">
				<span class="icon-map-pin-fill"></span>
				<a href="maps.html">Map Elements</a>
			</li>
			
			<li class="nav">
				<span class="icon-denied"></span>
				<a href="javascript:;">Error Pages</a>
				
				<ul class="subNav">
					<li><a href="error-401.html">401 Page</a></li>
					<li><a href="error-403.html">403 Page</a></li>
					<li><a href="error-404.html">404 Page</a></li>	
					<li><a href="error-500.html">500 Page</a></li>	
					<li><a href="error-503.html">503 Page</a></li>					
				</ul>	
			</li>
		</ul>
				
	</div> <!-- #sidebar -->
	
	<div id="content">		
		
		<div id="contentHeader">
			<h1>Invoice</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
				
				<div class="grid-17">				
					<div id="invoice" class="widget widget-plain">			
						
						<div class="widget-header">
							<h3>Invoice</h3>
						</div>
						
						<div class="widget-content">
			
				<ul class="client_details">
					<li><strong class="name">John Doe Inc.</strong></li>
					<li>15 Doe Way</li>
					<li>Doe City, MI 49000</li>
					<li>United States</li>
					<li>Phone: 269-555-5555</li>
					<li>Faxe: 269-777-7777</li>
				</ul>
				
				<ul class="invoice_details">
					<li>Status: <span class="ticket ticket-info">Open</span></li>
					<li>Invoice Number: 1001</li>
					<li>Invoice Date: 10/25/2010</li>
					<li>Job Number: WEB-2345</li>
				</ul>
				
				
				<div class="clear"></div>
			
				<table class="table table-striped">
					
					<thead>
						<tr>
							<th>Qty</th>
							<th>Unit</th>
							<th>Description</th>
							<th class="price">Price</th>
							<th class="total">Total</th>
						</tr>
					</thead>	
					
					<tbody>
						<tr>
							<td>23.5</td>			
							<td>Hours</td>
							<td>Custom Web Design</td>
							<td class="price">100.00</td>
							<td class="total">$2350.00</td>
						</tr>
						<tr>
							<td>10</td>			
							<td>Hours</td>
							<td>Graphic Design</td>
							<td class="price">75.00</td>
							<td class="total">$750.00</td>
						</tr>
						<tr>
							<td>1</td>			
							<td>Product</td>
							<td>CMS Install/Setup</td>
							<td class="price">1000.00</td>
							<td class="total">$1000.00</td>
						</tr>
						<tr>
							<td class="sub_total" colspan="3"></td>
							<td class="sub_total">Subtotal:</td>
							<td class="sub_total">$4100.00</td>
						</tr>
						<tr class="total_bar">
							<td class="grand_total" colspan="3"></td>
							<td class="grand_total">Total:</td>
							<td class="grand_total">$4100.00</td>
						</tr>
					</tbody>
				</table>
				
				<hr>
				
				<h3>Invoice Notes</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>
						</div>
										
				</div> <!-- .grid -->
				
				
				
				
				
		<div class="grid-7">
			
			<div class="box">
				
				
				<div id="invoice_total">$4100.00</div>
				
				<br />
				
				<h3>Invoice Actions</h3>
								
				<ul id="invoice_actions" class="">
					<li class="send"><a href="javascript:;">Send Invoice</a></li>
					<li class="edit"><a href="javascript:;">Edit Invoice</a></li>
					<li class="print"><a href="javascript:;">Print Invoice</a></li>
					<li class="duplicate"><a href="javascript:;">Duplicate Invoice</a></li>
					<li class="delete"><a href="javascript:;">Delete Invoice</a></li>
					<li class="change"><a href="javascript:;">Change Status</a></li>
				</ul>
				
			</div> <!-- .box -->		
			
		</div> <!-- .grid -->
								
				
				
				
			
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->
	
	<div id="topNav">
		 <ul>
		 	<li>
		 		<a href="#menuProfile" class="menu">John Doe</a>
		 		
		 		<div id="menuProfile" class="menu-container menu-dropdown">
					<div class="menu-content">
						<ul class="">
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;">Edit Settings</a></li>
							<li><a href="javascript:;">Suspend Account</a></li>
						</ul>
					</div>
				</div>
	 		</li>
		 	<li><a href="javascript:;">Upgrade</a></li>
		 	<li><a href="index-2.html">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->
	
	<div id="quickNav">
		<ul>
			<li class="quickNavMail">
				<a href="#menuAmpersand" class="menu"><span class="icon-book"></span></a>		
				
						

				<div id="menuAmpersand" class="menu-container quickNavConfirm">
					<div class="menu-content cf">							
						
						<div class="qnc qnc_confirm">
							
							<h3>Confirm</h3>
					
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #1</span>
									<span class="qnc_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #2</span>
									<span class="qnc_preview">Duis aute irure dolor in henderit in voluptate velit esse cillum dolore.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #3</span>
									<span class="qnc_preview">Duis aute irure dolor in henderit in voluptate velit esse cillum dolore.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<a href="javascript:;" class="qnc_more">View all Confirmations</a>
															
						</div> <!-- .qnc -->	
					</div>
				</div>
			</li>
			<li class="quickNavNotification">
				<a href="#menuPie" class="menu"><span class="icon-chat"></span></a>
				
				<div id="menuPie" class="menu-container">
					<div class="menu-content cf">					
						
						<div class="qnc">
							
							<h3>Notifications</h3>
					
							<a href="javascript:;" class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Notification #1</span>
									<span class="qnc_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
							</a>
							
							<a href="javascript:;" class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Notification #2</span>
									<span class="qnc_preview">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
							</a>
							
							<a href="javascript:;" class="qnc_more">View all Confirmations</a>
							
						</div> <!-- .qnc -->
					</div>
				</div>				
			</li>
		</ul>		
	</div> <!-- .quickNav -->
	
	
</div> <!-- #wrapper -->

<div id="footer">
	Copyright &copy; 2012, MadeByAmp Themes.
</div>


<script src="javascripts/all.js"></script>

</body>

</html>
<?php } 
else header("Location:index.php?log=3");
?>