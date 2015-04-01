<?php 
include "header.php"; 
?>
  		
  		<div id="sidebar">
  			 <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Easy Links</h1>
  				<ul class="links">
  					<li><a href="index.php">Home</a></li>
  					
  					<li><a href="about_iiitm.php">About IIITM</a></li>
  					<li><a href="sitemap.php">Site Map</a></li>
  					
  					<li><a href="contact.php">Contact</a></li>
  				</ul>
  			</div> <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Quickform</h1>
				<div id="errors"> <!-- To display the errors form -->
  				
  			</div>
			<?php 
			if($_GET['thanq']==1)
			{
			?>
			<h3>Thank You for your mail...we will get back to you soon.</h3>
			<h4>Team Infotsav</h4>
			<?php 
			
			}
			else
			{
			?>
  				<form action="quick_mail.php" class="quickform" method="post">
  					<ul>
					<input type="hidden" value="lectures.php" name="page">
  						<li><label>Name:</label><input class="single_input" type="text"  name="name"/></li>
  						<li><label>E-mail:</label><input class="single_input" type="text" name="email" /></li>
  						<li><label>Message:</label><textarea name="message" class="message" cols="30" rows="10"></textarea></li>
  						<li><input type="submit" class="submit_form" name="Submit" value="Submit" /></li>
  					</ul>
  				</form>
				<?php } ?>
  			</div> <!-- bg_one_third -->
  		</div> <!-- sidebar -->
  		
  		<div class="bg_two_third last">
  			<ul id="sitemap">
            <p align="center"><h1>A Two days workshop on Ethical Hacking & Information Security</h1> by Kyrion Technologies Pvt. Ltd.</p>
<h3>Course Duration – 16 hours (Will be covered in 2 days, 8 hours)</h3>
  				<li><a class="title" href="#">&#9679; Concept of Ethical Hacking</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Reading the Hacker's mind and Understanding the hacking psychology and methodology</a></li>
  						<li class="bullet_circle"><a href="#">Ethical Hacking and Penetration Testing</a>
                        </li>
  						
  					</ul>
  				</li>
			  <li><a class="title" href="#">Email Hacking</a>
				<ul>
				  <li class="bullet_circle"><a href="#">Email Servers</a></li>
                  <li class="bullet_circle"><a href="#">Email Forgery and Spamming</a></li>
                  <li class="bullet_circle"><a href="#">Email Password Attacks</a></li>
                  <li class="bullet_circle"><a href="#">Email Account Security</a></li>
				  </ul>
  				</li>
  				<li><a class="title" href="#">Windows Hacking and Security</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Windows System Architecture</a></li>
                        <li class="bullet_circle"><a href="#">Targeting a Windows System</a></li>
                        <li class="bullet_circle"><a href="#">Windows System Security</a></li>
               		</ul>
  				</li>
  				<li><a class="title" href="#">Trojans</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Concept of Trojan</a></li>
                        <li class="bullet_circle"><a href="#">Controlling Trojans</a></li>
                        <li class="bullet_circle"><a href="#">Trojan Evading and Countermeasures</a></li>
  					</ul>
  				</li>
  				<li><a class="title" href="#">Web Server as a Target</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Web Technologies</a></li>
                        <li class="bullet_circle"><a href="#">Web Application Attacks: Live Demonstrations</a></li>
                        <li class="bullet_circle"><a href="#">Putting breaks on Web Application attacks</a></li>
  					</ul>
  				</li>
                <li><a class="title" href="#">Wireless Hacking</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Wireless Network Concepts</a></li>
                        <li class="bullet_circle"><a href="#">Wireless Attacks</a></li>
                        <li class="bullet_circle"><a href="#">Wireless Security Measures</a></li>
  					</ul>
  				</li>
                <li><a class="title" href="#">Software Cracking and Patching</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Software Cracking and Serial Key Phishing</a></li>
                        <li class="bullet_circle"><a href="#">Software Patching</a></li>
                        <li class="bullet_circle"><a href="#">Applying Application Security</a></li>
  					</ul>
  				</li>
                <li style="text-align:right"><a class="title" href="http://kyrion.in/security/workshop/register.php" target="_blank">To register for the workshop click here.</a></li>
  			</ul>
	 </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>