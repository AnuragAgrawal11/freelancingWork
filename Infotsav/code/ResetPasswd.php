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
		
		if(isset($_REQUEST['submit']))
		{
			$mail=mysql_real_escape_string(stripslashes($_SESSION['user']));
			
			if(strstr($mail,'@'))
			{
			  $eid=explode("@", $mail);
			  if($eid[1]=="gmail.com")
		 	  {
				$email=str_replace(".", "", $eid[0]);
				$mail=$email."@gmail.com";
 			  }
			} 	  
			  $query= "SELECT * FROM users WHERE (username='".$mail."' OR email='".$mail."') ";
			 
 
			if($row = mysql_fetch_row(mysql_query($query)))
			{
			 	if(md5(mysql_real_escape_string(stripslashes($_REQUEST['password'])))==$row[6])
				{
					$qry = "update users set password ='".md5(mysql_real_escape_string(stripslashes($_REQUEST['new_password'])))."' WHERE (username='".$mail."' OR email='".$mail."') ";
					$rs = mysql_query($qry) ;
					
					echo '<br><br><div class="note_box"><center>Dear '.$row[1].' ('.$row[2].',) <br/><br/>Your Password have been changed.<br><br/>
						Click <a href="MyInfotsav.php"  target="_parent">here</a> to jump to <b>My Infotsav</b>.</center></div>';
						
						
						
											if($rs)
								{
									//error_reporting(E_STRICT);
					date_default_timezone_set('Asia/Calcutta');
					require_once('PHPMailer/class.phpmailer.php');
					$mail             = new PHPMailer();
					$body             = '<body style="margin: 10px;">
					<div style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;" align="left">
					<div align="center"><img src="PHPMailer/images/logo.gif"></div><br>
					<br>
					Dear '.$_SESSION['user'].',<br>
					<br>
									
					<br><br>You are registered with <u>username</u>: <b>'.$_SESSION['user'].'</b>
					<br>Your New Password is '.$row[6].'
					<br><br>
					To participate in any event you can visit MyInfotsav page (http://www.infotsav.org/MyInfotsav.php)
					<br />
					<br />
					--Team Infotsav 2010<br>
					http://www.infotsav.org/<br>
					ABV-Indian Institute of Information Technology & Management Gwailor (http://www.iiitm.ac.in/)
					</div>
					</body>';
					$body             = eregi_replace("[\]",'',$body);
					
					$mail->IsSMTP(); // telling the class to use SMTP
					$mail->SMTPDebug  = 1;                     /* enables SMTP debug information, 1 = errors and messages, 2 = messages only*/
					$mail->SMTPAuth   = true;                  // enable SMTP authentication
					$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
					$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
					$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
					$mail->Username   = "infotsav2010@gmail.com";  // GMAIL username
					$mail->Password   = "mailinfotsav";            // GMAIL password
					
					$mail->SetFrom('contact@infotsav.org', 'Team Infotsav 2010');
					
					$mail->AddReplyTo("contact@infotsav.org","Team Infotsav 2010");
					
					$mail->Subject    = "Request for change of Password Infotsav 2010";
					
					$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
					
					$mail->MsgHTML($body);
					
					$address = $row[10];
					$mail->AddAddress($address, $_SESSION['user']);
					
					$mail->AddAttachment("PHPMailer/images/logo.gif");      // attachment
					
					if(!$mail->Send()) {
					  echo "Mailer Error: " . $mail->ErrorInfo;
					} else {
					  echo '<br><br><div class="note_box"><center> A mail is sent to your mail id for verification. So, please verify your email id.</center></div>';
					}
				}
						
						
					
				
				}
				else
				{
					echo '<br><br><div class="info_box"><center>Dear '.$row[1].' ('.$row[2].',) <br/><br/>Your Original Password dint match with our database.<br><br/>
						Click <a href="ForgotPasswd.php"  target="_parent">here</a> for jump to <b>Forgot Password</b>.</center></div>';
				
				}
				
			}
			
			
		}
		else
		{
			  ?>
  			<div id="errors"> <!-- To display the errors form -->
  				
  			</div>

			<form action=""  method="post" id="contact_form" class="form_validate" ><br /><br />
			<h1 class="title" align="center">Change Your Password</h1><br /><br />
			<ul>
  					<li class="one_col">
  						<b>Avatar Original Password</b>
						<input class="single_input" name="password" type="username"  required="required" style="width:200px;"/><br /><br /><br /><br />
					</li>
  					<li class="one_col">
  						<b>Avatar New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
						<input class="single_input" name="new_password" type="password" required="required" style="width:200px;"/><br /><br /><br /><br />
  					</li>
					<li class="one_col">
  						<b>Avatar  Re-Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
						<input class="single_input" name="repassword" type="password" required="required" style="width:200px;"/><br /><br /><br /><br />
  					</li>
					<li class="one_col"><input type="submit"  name="submit" class="submit_form"  value="submit"/></li>
  				</ul>
				<center>
				
  			</form>
			<?php
			}
			?>
  		</div> 
		</div>
		<!-- bg_two_third -->