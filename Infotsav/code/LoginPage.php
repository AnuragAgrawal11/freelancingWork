<?php session_start(); 
include "connect.php"; 
?>

	<link rel="stylesheet" type="text/css" href="skins/<?php echo $_SESSION['color'];?>/styles.css" media="all" />
	<!-- Style for the COLOR chosen -->
	<link rel="stylesheet" type="text/css" title="orange_color" href="colors/orange/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="black_color" href="colors/black/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="blue_color" href="colors/blue/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="brown_color" href="colors/brown/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="green_color" href="colors/green/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="lightgreen_color" href="colors/lightgreen/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="pink_color" href="colors/pink/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="red_color" href="colors/red/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="silver_color" href="colors/silver/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="violet_color" href="colors/violet/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="yellow_color" href="colors/yellow/color.css" media="all" />	
	<!-- Style used onl for the Online Demo -->
	<link rel="stylesheet" type="text/css" href="lib/css/demoskin.css" media="all" />
	
<div class="bg_two_third last" style="width:92%; height:91%; margin-left:2% ">  		      
  		      
<div class="bg_two_third last" style="height:90%; width:96%;" align="center">
<?php 
		if(isset($_SESSION['uid']) || isset($_SESSION['user']))
		{
			echo '<br><br><div class="info_box"><center>Dear '.$_SESSION['user'].', Thanks for login to Infotsav 2010.</center></div><br><br><br><div class="note_box"><center>Click <a href="MyInfotsav.php"  target="_parent">here</a> for jump to <b>My Infotsav</b>.</center></div>';
		}
		else if(isset($_REQUEST['submit']))
		{
			$mail=mysql_real_escape_string(stripslashes($_REQUEST['username']));
			
			if(strstr($mail,'@'))
			{
			  $eid=explode("@", $mail);
			  if($eid[1]=="gmail.com")
		 	  {
				$email=str_replace(".", "", $eid[0]);
				$mail=$email."@gmail.com";
 			  }
			} 	  
			  $query= "SELECT * FROM users WHERE (username='".$mail."' OR email='".$mail."') AND password='".md5(mysql_real_escape_string(stripslashes($_REQUEST['password'])))."'";
			  echo $query;
 
			if($row = mysql_fetch_row(mysql_query($query)))
			{
			 	if($row[12]==0)
				{
					echo '<br><br><div class="info_box"><center>Dear '.$row[1].' ('.$row[2].',) Please verify your email id. <br />Just login to your mail box and click on the link send by us.</center></div><br><br><br><div class="note_box"><center>Click <a href="MyInfotsav.php"  target="_parent">here</a> for jump to <b>My Infotsav</b>.</center></div>';
				}
				else
				{
					$_SESSION['uid']=$row[0];
					$_SESSION['user']=$row[5];
					echo '<br><br><div class="info_box"><center>Dear '.$row[1].' ('.$row[2].',) Thanks for login to Infotsav 2010.</center></div><br><br><br><div class="note_box"><center>Click <a href="MyInfotsav.php"  target="_parent">here</a> for jump to <b>My Infotsav</b>.</center></div>';
				}
			}
			else
			{
				echo '<br><br><div class="info_box"><center>Wrong Username or Password.</center></div><br><br><br><div class="note_box"><center>Click <a href="ForgotPasswd.php"  target="_parent">here</a> for jump to <b>Forgot Password</b>.</center></div>';
			}
			
		}
		else
		{
			  ?>
  			<div id="errors"> <!-- To display the errors form -->
  				<div id="success" class="download_box">Thank you! Your request has been send, we'll be get back to you soon.</div>
  			</div>

			<form action=""  method="post" id="contact_form" class="form_validate" ><br /><br />
			<h1 class="title" align="center">Login to Infotsav</h1><br /><br />
			<ul>
  					<li class="one_col">
  						<b>Avatar Name(Username)</b>
						<input class="single_input" name="username" type="username"  required="required" style="width:200px;"/><br /><br /><br /><br />
					</li>
  					<li class="one_col">
  						<b>Avatar Access Password</b>
						<input class="single_input" name="password" type="password" required="required" style="width:200px;"/><br /><br /><br /><br />
  					</li>
					<li class="one_col"><input type="submit"  name="submit" class="submit_form"  value="submit"/></li>
  				</ul>
				<center><h2 class="one_col"><a href="register.php" target="_parent" style="text-decoration:none;">Register Yourself...!!</a></h2>
				<h2 class="one_col"><a href="ForgotPasswd.php" target="_parent" style="text-decoration:none;">Forgot Avatar's Access Password...??</a></h2></center>
  			</form>
			<?php
			}
			?>
  		</div> 
		</div>
		<!-- bg_two_third -->