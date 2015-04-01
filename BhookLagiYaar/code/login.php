<?php

ini_set( "display_errors", 0);

?>
<!DOCTYPE html>

<html><head runat="server">
<link rel="stylesheet" href="autocomplete.css" type="text/css" media="screen">
<link rel="canonical" href="http://bhooklagiyaar.com" />
    <title>Bhooklagi Yaar</title>
    <link href="Css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
   
 <script src="Admin/jquery.js"></script>
	<link rel="stylesheet" href="Admin/stylesheets/reset.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="Admin/stylesheets/text.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="Admin/stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="Admin/stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="Admin/stylesheets/login.css" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="Admin/stylesheets/all.css" type="text/css" />
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#register').hide();

            $('a#showhidetrigger').click(function () {
                $('#register').toggle(400);
				 
            });
        });
    </script>
    
</head>
<body background="TemplateImages/nbg.jpg">
  
<div class="main">

<!-----------------------------------------header----------------------------------->
<div class="header">
<div style="width:85px; height:85px; float:left; margin:14px 0 0 30px;"><a href="Index.php"> <img src="TemplateImages/nlogo.png" /></a></div>
<div style="width: auto; height:30px; float: right; margin:5px 30px 0 0px;">
  <table width="auto" border="0" cellspacing="5">
  <tr>
    <td><img src="TemplateImages/ncall.png" /></td>
    <td style=" color:#FFFFFF; font-family:calibri; font-size:14px; font-weight:normal;">Call For Home Dilevery</td>
    <td style=" color:#f76139; font-family:calibri; font-size:14px; font-weight:normal;">08882478959</td>
    <td><a href="#" style=" text-decoration:none; color:#FFFFFF; font-family:calibri; font-size:14px; font-weight:normal;">All Resturants</a></td>
   
  </tr>
  <tr align="right"><td colspan=4 ><div class="popups"><p><a title="Register" href="Admin/register.php"><img src="TemplateImages/nlogin-reg-btn.png" width="130" /></a></p> </div></td></tr>
  
</table>

</div>
</div>
<!-----------------------------------------/header----------------------------------->

               


<!-----------------------------/strip------------------------------------->
<!--------------------------------------------main-content---------------------->
<div class="main-content">

<!--------------------------------------------content-left---------------------->
  <div class="content-left"><img src="TemplateImages/nrecipie.png" style="margin-top:30px;" /></div> 
<!--------------------------------------------/content-left---------------------->


  <!--------------------------------------------content-right---------------------->
  <div class="content-right">
  
  <div class="grid-16">
  
	
<div id="login"><h2>Login</h2>
	<h1 style="background:none">Login</h1>
	<div id="login_panel" style="margin-top:8%">
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
           <a href="#" id="showhidetrigger"><font color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;Not a member? Register Here</font></a>
		</form>
        
      
			
	</div> <!-- #login_panel -->		
</div>

<?php
				
					 if($_REQUEST['login']==2) {?>
                     <div class="notify notify-error">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Error</h3>
						
						<p><font color="#666666">Invaild Username or Password...</font></p>
					</div>
                     <?php } ?>
                    
                    
                     <?php  if($_REQUEST['login']==1){ ?>
					
                     <div class="notify notify-success" style="margin-top:30%;float:left;width:70%;margin-left:-50%">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p><font color="#666666">Logged in Successfully...</font></p>
                        <p><font color="#666666">Welcome <?php echo $_REQUEST['name'];?></font></p>
                        <script type="text/javascript">
       
           	 $('#register').hide();

			 $('#login').hide();
                  
    </script>
					</div>
					   <?php header( "refresh:1;url=index.php?user=".$_REQUEST['name'] ); } ?>
					 <?php  if($_REQUEST['log']==2){ ?>
					 <div class="notify notify-success">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p><font color="#666666">Logged Out Successfully...</font></p>
					</div>
                      <?php } ?>
					  <?php  if($_REQUEST['log']==3){ ?>
                      
					 <div class="notify notify-warning">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Warning</h3>
						
						<p><font color="#666666">You dont have permission to view this page..</font></p>
					</div>
					  
			 <?php } ?>
             
					


 <?php if($_GET['info']==1){ ?>
					 <div class="notify notify-success">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Succes</h3>
						
						<p><font color="#666666">Register Successfully</font></p>
					</div>
                    <?php } ?>
                


<div id="register" style="display:none">
				<h2>Register</h2>
                
                
                
                
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
        window.location="login.php?info=1";
        
        </script>
		<?php
	}
	else
	{
		echo mysql_error();
	}
	
}

?>
 
                
                
               	
					<div class="widget-content" style="margin-top:8%;width:60%"  id="login_panel" >
							
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

</div>
  
  </div>
 <!--------------------------------------------/content-right----------------------> 
  
</div>
<!--------------------------------------------/main-content---------------------->


<!--------------------------------------footer-main---------------------------------->

<!--------------------------------------/footer-main---------------------------------->

</div>
<div id="myModal" class="reveal-modal">
  <a class="close-reveal-modal">&#215;</a>

  
  </div>

 <script src="Admin/javascripts/all.js"></script>
   
</body>
</html>
