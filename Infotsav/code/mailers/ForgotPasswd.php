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
  		 
  		  <div id="node-369">
  		    <div>
  		      <div>
  		        <h1 class="title">Forgot Password
                </h1>
  		      </div>
  		      <div> <br />
 		        
				<?php
				if(isset($_REQUEST['submit']))
				{
					if(strstr($_REQUEST['email'],"@"))
					{
						$eid=explode("@", $_REQUEST['email']);
				 		if($eid[1]=="gmail.com")
			 	  		{
							$email=str_replace(".", "", $eid[0]);
							$_REQUEST['email']=$email."@gmail.com";
 			  			}
					}
					else if(strlen($_REQUEST['email'])<6)
			  		{
			  			echo '<br><br><div class="info_box"><center>I guess your Username would contains more than or equal to 6 characters.</center></div>';
			  		}
			  		else if($_REQUEST['captcha']!=$_SESSION['captcha'])
			  		{	
				    	echo '<br><br><div class="info_box"><center>Sorry you have very bad Mathematics. You filled wrong captcha... [:(]</center></div>';
			  		}
			  		else
					{
			  			$query="select * from users where username='".$_REQUEST['email']."' OR email='".$_REQUEST['email']."'";
						if($rs=mysql_query($query))
						{
							$row=mysql_fetch_row($rs);
							
							 //error_reporting(E_STRICT);
 
 
 
 				$to = $row[10] ;
				//$to = "rockingsanjay90@gmail.com" ;
				$subject = "New Password for Infotsav 2010";
				
				$email = "contact@infotsav.org" ;
				$body             = '

Dear '.$row[1].',
			
You are avatar\'s username: '.$row[5].'
You are avatar\'s new password: '.substr($row[6], 0, 8).'
				
To participate in any event you can visit MyInfotsav page (http://www.infotsav.org/MyInfotsav.php)
				
				
--Team Infotsav 2010
http://www.infotsav.org/
ABV-Indian Institute of Information Technology & Management Gwailor (http://www.iiitm.ac.in/)
';

				$headers = "From: $email";
				
				$sent = mail($to, $subject, $body, $headers) ;
				if($sent)
				{
					$q="update users set password = '".md5(substr($row[6], 0, 8))."' where id=".$row[0];
					if(mysql_query($q))
					{
						echo '<br><br><div class="note_box"><center> Your new password is sent to your E-mail id. So, please check your email inbox.</center></div>';
					}
				}
				else
				{echo "We encountered an error sending your mail"; }
 
 
 


						
							
							
							
				}
						else
						{
							echo '<br><br><div class="info_box"><center>'.mysql_error().'Sorry this Username or Email had yet not registered.</center></div>';
						}
					}
				}
				else
				{
				?>
				<form action=""  method="post" id="forgot_form" class="form_validate">
  				<ul>
					<div align="center">
					<label>Avatar's Username/E-Mail<font color="red">*</font></label>
  					<li class="one_col">
  						<input class="big_input" name="email" type="text"  required="required"/>
  					</li><br />
					<?php $a=rand(1,10);$b=rand(1,10);
					$_SESSION['captcha']=$a+$b;
					?>
					<label>What is <?php echo $a." + ".$b; ?>...??<font color="red">*</font></label>
					<li class="one_col">
											
  						<input class="single_input" name="captcha" id="captcha" type="text" required="required" maxlength="3" />
  					</li>
					</div>
  					<li class="one_col"><input type="submit" class="submit_form"  value="submit" name="submit"/></li>
  				</ul>
  			</form>
				
				<?php
				}
				?>			
				
	          </div>
	        </div>
	      </div>
     </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>
</html>
