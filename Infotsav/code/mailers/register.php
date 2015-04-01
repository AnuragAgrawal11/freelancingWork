<?php 
include "header.php"; 
?>
  		
  		<div id="sidebar">
  			<div class="bg_one_third">
  				<h1 class="title">About Infotsav 2010</h1>
  				<p align="justify"><span class="dropcap">I</span>nfotsav is an annual technical fest of ABV Indian Institute of Information Technology, Gwalior. </p>
			  <p align="justify"><span class="dropcap">I</span>t is the largest Techno-Management fest of central India.<br />
			</p>
  			</div> <!-- bg_one_third -->
  			 <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Easy Links</h1>
  				<ul class="links">
  					<li><a href="index.php">Home</a></li>
  					<li><a href="#">Blog</a></li>
  					<li><a href="about_iiitm.php">About IIITM</a></li>
  					<li><a href="sitemap.php">Site Map</a></li>
  					<li><a href="#">Gallery</a></li>
  					<li><a href="contact.php">Contact</a></li>
  				</ul>
  			</div> <!-- bg_one_third -->
  		</div> <!-- sidebar -->
  		
  		<div class="bg_two_third last">
  		 
  		  
  		    <h1 class="title">Register Here</h1>
  		       <br />
			  
  			<div id="errors"> <!-- To display the errors form -->
  				
  			</div>
  		       <!-- errors -->
			  
			  
			  <?php 
			  if(isset($_REQUEST['submit']))
			  {
			  $dob=$_REQUEST['dob_yyyy']."-".$_REQUEST['dob_mm']."-".$_REQUEST['dob_dd'];
			  $eid=explode("@", $_REQUEST['email']);
			  //echo $_REQUEST['captcha']."  ".$_SESSION['captcha'];
			  if($eid[1]=="gmail.com")
		 	  {
				$email=str_replace(".", "", $eid[0]);
				$_REQUEST['email']=$email."@gmail.com";
 			  }
			  if(strlen($_REQUEST['username'])<6 || strlen($_REQUEST['password'])<6 )
			  {
			  		echo '<br><br><div class="info_box"><center>Please select Username and Password containing more than or equal to 6 characters.</center></div>';
			  }
			  
			  else{
			  $query= "INSERT INTO users VALUES (0, '".mysql_real_escape_string(stripslashes($_REQUEST['name']))."' , '".mysql_real_escape_string(stripslashes($_REQUEST['institute']))."' , '".mysql_real_escape_string(stripslashes($_REQUEST['branch']))."' , '".mysql_real_escape_string(stripslashes($_REQUEST['year']))."' , '".mysql_real_escape_string(stripslashes($_REQUEST['username']))."' , '".md5(mysql_real_escape_string(stripslashes($_REQUEST['password'])))."' , '".mysql_real_escape_string(stripslashes($_REQUEST['gender']))."', '".mysql_real_escape_string(stripslashes($dob))."', '".mysql_real_escape_string(stripslashes($_REQUEST['mobile']))."', '".mysql_real_escape_string(stripslashes($_REQUEST['email']))."', '".mysql_real_escape_string(stripslashes($_REQUEST['address']))."', 0, NOW(), '".$_SERVER['REMOTE_ADDR']."', '".getRealIpAddr()."')";
  //echo $query;
  //exit();
			  $result = mysql_query($query); 
			if($result)
			{
			 	
				
				$to = $_REQUEST['email'] ;
				$subject = "Registration for Infotsav 2010";
				
				$email = "contact@infotsav.org" ;
				$body             = '
Dear '.$_REQUEST['name'].',

				Thanks for registering on Infotsav 2010. Please click on the link below to verify your registration. http://www.infotsav.org/emailverificator.php?user='.$_REQUEST['username'].'&code='.md5($_REQUEST['mobile']).' 

You are registered with username: '.$_REQUEST['username'].'

To participate in any event you can visit MyInfotsav page (http://www.infotsav.org/MyInfotsav.php)

--Team Infotsav 2010
http://www.infotsav.org/
ABV-Indian Institute of Information Technology & Management Gwailor (http://www.iiitm.ac.in/)
';

				$headers = "From: $email";
				
				$sent = mail($to, $subject, $body, $headers) ;
				if($sent)
				{
					echo '<br><br><div class="note_box"><center> A mail is sent to your mail id for verification. So, please verify your email id.</center></div>'; 
				}
				else
				{print "We encountered an error sending your mail"; }

 
				echo '<script type="text/javascript">sendSMS("'.$_REQUEST['mobile'].'", "Hi '.$_REQUEST['username'].', \nThanx for registering to Infotsav 2010.\n\n\n\n\n\n\n\n");</script>';
				
				echo '<br><br><div class="note_box"><center> A Meassge is sent to your phone. So, please once check your inbox.</center></div>';
			}
			else
				echo '<br><br><div class="warning_box"><center>'.mysql_error().'</center></div><br><div class="note_box"><center>Click <a href="register.php">here</a> for register again.</center></div>';
			  
			  	}
			  }
			  else{
	 		  ?>	  

			
  			<form action=""  method="post" id="contact_form" class="form_validate">
  			
  				<ul>
  					<li class="two_col">
  						<label>Name<font color="red">*</font></label>
  						<input class="single_input" name="name" type="text" required="required" />
  					</li>
  					<li class="two_col">
  						<label>Institute<font color="red">*</font></label>
  						<input class="single_input" name="institute" id="institute" type="text" required="required" onkeyup="getCollege(this.value);" />
						<div id="institute_ladder" style="display:none;">&nbsp;</div>
  					</li>
					<li class="two_col">
  						<label>Year</label>
						<select class="list_input" name="year">
						<option value="1 Year" class="list_input">1 Year</option>
						<option value="2 Year" class="list_input">2 Year</option>
						<option value="3 Year" class="list_input">3 Year</option>
						<option value="4 Year" class="list_input">4 Year</option>
						<option value="5 Year" class="list_input">5 Year</option>
						</select>
  					</li>
  					<li class="two_col">
  						<label>Branch</label>
  						<input class="single_input" name="branch" id="branch" type="text" onkeyup="getBranch(this.value);"/>
						<div id="branch_ladder" style="display:none; margin-left:100px;">&nbsp;</div>
  					</li>  					
  					<li class="one_col">
  						<label>Username<font color="red">*</font></label>
  						<input class="single_input" name="username" id="username" type="text" required="required" onkeyup="getUsername(this.value);"/>						
  						<div id="username_ladder" style="display:none; margin-left:100px;">&nbsp;</div>
  					</li>
  					<li class="two_col">
  						<label>Password<font color="red">*</font></label>
 						&nbsp;<input class="single_input" name="password" id="password" type="password" required="required" onkeyup="getPassword(this.value);" />
						<div id="password_ladder" style="display:none; margin-left:100px;">&nbsp;</div>
  					</li>
					<li class="two_col">
  						<label>Re-Password<font color="red">*</font></label>
  						<input class="single_input" name="repassword" id="repassword" type="password" required="required" onkeyup="getRePassword(this.value);" />
						<div id="repassword_ladder" style="display:none; margin-left:100px;">&nbsp;</div>
  					</li>
  					<li class="one_col">
  						<label>Gender</label>
  						<input type="radio" name="gender" value="male" />Male
  						<input type="radio" name="gender" value="female" />Female  						
  					</li>
					<li class="two_col">
  						<label>Date of Birth</label>
						<select class="list_input" name="dob_dd">
						<?php for($i=1;$i<=31;$i++){?>
						<option value="<?php echo $i; ?>" class="list_input"><?php echo $i; ?></option>
						<?php }	?>
						</select>
						<select class="list_input" name="dob_mm">
						<option value="1" class="list_input">Jan</option>
						<option value="2" class="list_input">Feb</option>
						<option value="3" class="list_input">Mar</option>
						<option value="4" class="list_input">Apr</option>
						<option value="5" class="list_input">May</option>
						<option value="6" class="list_input">Jun</option>
						<option value="7" class="list_input">Jul</option>
						<option value="8" class="list_input">Aug</option>
						<option value="9" class="list_input">Sep</option>
						<option value="10" class="list_input">Oct</option>
						<option value="11" class="list_input">Nov</option>
						<option value="12" class="list_input">Dec</option>
						</select>
						<select class="list_input" name="dob_yyyy">
						<?php for($i=1975;$i<=2005;$i++){?>
						<option value="<?php echo $i; ?>" class="list_input"><?php echo $i; ?></option>
						<?php }	?>
						</select>
  					</li>
					<li class="two_col">
  						<label>Mobile(+91-)<font color="red">*</font></label>
  						<input class="single_input" name="mobile" id="mobile" type="text" required="required" maxlength="10" onkeyup="getMobile(this.value);" />
						<div id="mobile_ladder" style="display:none; margin-left:100px;">&nbsp;</div>
  					</li>
					
  					<li class="one_col">
  						<label>E-Mail<font color="red">*</font></label>
  						<input class="big_input" name="email" type="email"  required="required" onkeyup="getEmail(this.value);" />						<div id="email_ladder" style="display:none; margin-left:100px;">&nbsp;</div>
  					</li>
					<li class="one_col">
  						<label>Address</label>
  						<textarea name="address" id="message_form" cols="30" rows="10" ></textarea>
  					</li>
					
					</div>
  					<li class="one_col"><input type="submit" class="submit_form"  value="submit" name="submit"/></li>
  				</ul>
  			</form>
  		        <?php
				}
				?>
  		        
  		        
	          
     </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>
</html>