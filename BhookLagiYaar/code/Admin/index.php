
<?php
error_reporting(E_ERROR);
include "connect.php";
;?>
<!doctype html>

<html class="no-js" lang="en">
<head>

	<title>Control Panel</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<link rel="stylesheet" href="stylesheets/reset.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="stylesheets/text.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="stylesheets/login.css" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="stylesheets/all.css" type="text/css" />
	
	<!--[if gte IE 9]>
	<link rel="stylesheet" href="stylesheets/ie9.css" type="text/css" />
	<![endif]-->
	
	<!--[if gte IE 8]>
	<link rel="stylesheet" href="stylesheets/ie8.css" type="text/css" />
	<![endif]-->
	
	
</head>

<body background="">

<div id="login">
	<h1>Administration Login</h1>
	<div id="login_panel">
		<form action="chklogin.php" method="post" accept-charset="utf-8">		
			<div class="login_fields">
				<div class="field">
					<label for="email">Username</label>
					<input type="text" name="username" value="" id="username" tabindex="1" placeholder="Username" />		
				</div>
				
				<div class="field">
					<label for="password">Password <small><a href="javascript:;">Forgot Password?</a></small></label>
					<input type="password" name="password" value="" id="password" tabindex="2" placeholder="password" />			
				</div>
			</div> <!-- .login_fields -->
			
			<div class="login_actions">
				<input type="submit" value="Login" name="submit" class="btn btn-primary" tabindex="3">
			</div>
		</form>
      	<?php
				
					 if($_REQUEST['log']==1) {?>
                     <div class="notify notify-error">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Error</h3>
						
						<p>Invaild Username or Password...</p>
					</div>
					  
					 <?php } if($_REQUEST['log']==2){ ?>
					 <div class="notify notify-success">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p>Logged Out Successfully...</p>
					</div>
                     
					  <?php } if($_REQUEST['log']==3){ ?>
                      
					 <div class="notify notify-warning">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Warning</h3>
						
						<p>You dont have permission to view this page..</p>
					</div>
					  
			 <?php } ?>
			
	</div> <!-- #login_panel -->		
</div> <!-- #login -->

<script src="javascripts/all.js"></script>


</body>
</html>