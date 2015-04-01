<?php

ini_set( "display_errors", 0);

?>

<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Register</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
<script src="jquery.js"></script>
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
<script type="text/javascript">
        $(document).ready(function () {
            $('#register').hide();

            $('a#showhidetrigger').click(function () {
                $('#register').toggle(400);
				 $('#login').hide();
            });
        });
    </script>
</head>

<body style="height:50%;width:480px;">

<div id="wrapper">
	
	
	 <!-- #search -->
	
	 <!-- #sidebar -->
	
	<div id="content" style="width:100%">		
		
		 <!-- #contentHeader -->	
		
		<div class="container">
			






				
			<div class="grid-16">
	<?php
				
					 if($_REQUEST['login']==2) {?>
                     <div class="notify notify-error">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Error</h3>
						
						<p>Invaild Username or Password...</p>
					</div>
                     <?php } ?>
                    
                    
                     <?php  if($_REQUEST['login']==1){ ?>
					<script type="text/javascript">
       
           	 $('#register').hide();

			 $('#login').hide();
           
        
    </script>
                     <div class="notify notify-success">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p>Logged in Successfully...</p>
                        <p>Welcome <?php echo $_REQUEST['name'];?></p>
					</div>
					   <?php } ?>
					 <?php  if($_REQUEST['log']==2){ ?>
					 <div class="notify notify-success">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p>Logged Out Successfully...</p>
					</div>
                      <?php } ?>
					  <?php  if($_REQUEST['log']==3){ ?>
                      
					 <div class="notify notify-warning">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Warning</h3>
						
						<p>You dont have permission to view this page..</p>
					</div>
					  
			 <?php } ?>
<div id="login">
	<h1 style="background:none">Login</h1>
	<div id="login_panel">
		<form action="chklogin1.php" method="post" accept-charset="utf-8">		
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
           <a href="#" id="showhidetrigger"><font color="#FF0000">Not a member? Register Here</font></a>
		</form>
        
      
			
	</div> <!-- #login_panel -->		
</div>


					





<div id="register" style="display:none">
				<h1>Register</h1>
                
                
                
                
              <?php 
			  
		 include "connect.php";ini_set( "display_errors", 0);

if(isset($_POST['Submit']))
{
	
	$date1 = date("d/m/y : H:i:s", time());
	//echo $date1;
	$query = "insert into customer (Username,mobile, email,password,address,landmark,pincode,created_date,last_login_date,status) values ('".mysql_real_escape_string(stripslashes($_POST['name']))."', '".mysql_real_escape_string(stripslashes($_POST['phone']))."' , '".mysql_real_escape_string(stripslashes($_POST['email']))."', '".mysql_real_escape_string(stripslashes($_POST['password']))."', '".mysql_real_escape_string(stripslashes($_POST['address']))."', '".mysql_real_escape_string(stripslashes($_POST['landmark']))."', '".mysql_real_escape_string(stripslashes($_POST['pincode']))."', '".mysql_real_escape_string(stripslashes($date1))."', '".mysql_real_escape_string(stripslashes($_POST['last_login']))."', '1') " ;	
	if($result = mysql_query($query))
	{
		?>
        <script>
        window.location="register.php?info=1";
        
        </script>
		<?php
	}
	else
	{
		echo mysql_error();
	}
	
}

?>
 
                
                
               	 <?php if($_GET['info']==1){ ?>
					 <div class="notify notify-success">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p>Register Successfully</p>
					</div>
                    <?php } ?>
                
					<div class="widget-content" style="margin-top:8%">
							
							<form class="form uniformForm validateForm" method="post" action="" enctype="multipart/form-data" name="testimonial">
                            <div class="field-group">
									<label for="required">Name</label>
									<div class="field">
										<input type="text" id="name" value="" name="name" class="validate[required]">
									</div>
								</div>
								
								<div class="field-group">
									<label for="required">Password</label>
									<div class="field">
										<input type="password" name="password"  value="" class="validate[required]" id="pass">	
									</div>
								</div> <!-- .field-group -->
								<div class="field-group">
									<label for="email">Email:</label>
									<div class="field">
										<input type="text" name="email" id="email" value="" size="32" class="validate[required,custom[email]" />	
									</div>
								</div>
                                <div class="field-group">
									<label for="required">Phone</label>
									<div class="field">
										<input type="text" id="phone" name="phone" value=""  class="validate[required]" >
									</div>
								</div>
                                <div class="field-group">
									<label for="required">Shipping Address</label>
									<div class="field">
										<textarea name="address" id="add" class="validate[required]"></textarea>
									</div>
								</div>
                               
                           <div class="field-group">
									<label for="required">Landmark</label>
									<div class="field">
										<input type="text" id="landmark" value="" name="landmark" class="validate[required]">
									</div>
								</div>
                                <div class="field-group">
									<label for="required">Pin Code</label>
									<div class="field">
										<input type="text" id="code" value="" name="pincode" class="validate[required]">
									</div>
								</div>
									<div class="login_actions">
				<input type="submit" value="Submit" name="Submit" class="btn btn-primary" tabindex="3">
			</div> <!-- .actions -->
								
							</form>
							
							
						</div>
				</div> <!-- .grid -->
			</div>
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->
	
	 <!-- #topNav -->
	
	 <!-- .quickNav -->
	
	
</div> <!-- #wrapper -->




<script src="javascripts/all.js"></script>


</body>
</html>
