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
            <p align="center"><h1>SatBotricks-A Workshop on Satellite Robotics</h1></p>

  				<li><a class="title" href="#">&#9679; Description</a>
  					<ul>
  						 <p align="justify">It deals with Satellite Communication with GPS module, designing, architecture, programming and application designing using ATMEL AVR microcontrollers.This Workshop also includes the concept of GPS, GSM, wireless Robot.
Now you just get ready to control your Robot using Satellite. 1st Time in India Robosapiens India comes up with Satellite Controlled Robot Workshop.After the end of this workshop, students will be able to develop a Satellite controlled robot by themselves.</p>
	              </ul>
  				</li>
				<li><a class="title" href="#">Registration Fees :</a>
  					<ul>
  						 <p align="justify">Rs.1350</p>
	              </ul>
  				</li>
			  <li><a class="title" href="#">Introduction to Basic Electronics</a>
				<ul>
				  <li class="bullet_circle"><a href="#">Electronics Components related to mobile robotics</a></li>
                  <li class="bullet_circle"><a href="#">How Transistors are used in practical Circuit?</a></li>
                  <li class="bullet_circle"><a href="#">How Capacitors are used in Filter circuits?</a></li>
                  <li class="bullet_circle"><a href="#">How can someone choose the value of Resistors and their practical use?</a></li>
                  <li class="bullet_circle"><a href="#">What are Integrated Circuits? Which ICs are commonly used and How?</a></li>
                  <li class="bullet_circle"><a href="#">What are Photo sensors? And more…</a></li>
                 
				  </ul>
  				</li>
  				<li><a class="title" href="#">Introduction to Atmel's ATmega 8/16/32 microcontroller</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">What is Microcontroller?</a></li>
                        <li class="bullet_circle"><a href="#">Difference between microcontroller and microprocessor?</a></li>
                        <li class="bullet_circle"><a href="#">Microcontroller Architecture and Interfacing</a></li>
                        <li class="bullet_circle"><a href="#">How can we use a microcontroller in our own circuits?</a></li>
                        <li class="bullet_circle"><a href="#">Microcontroller Programming in 'C'</a></li>
                        <li class="bullet_circle"><a href="#">Writing your First ‘C’ Program in AVR Studio</a></li>
						<li class="bullet_circle"><a href="#">Compilation and debugging</a></li>
                        <li class="bullet_circle"><a href="#">Loading Compiled ‘C’ Program on a Microcontroller using Robosapiens AVRDopper</a></li>
						
               		</ul>
  				</li>
  				<li><a class="title" href="#">Development of a Basic Robots i.e Pathfinder</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Understanding of Sensors i.e. IR Sensor</a></li>
                        <li class="bullet_circle"><a href="#">Pathfinder Robot algorithm</a></li>
                        <li class="bullet_circle"><a href="#">Programming in ‘C’</a></li>
                         <li class="bullet_circle"><a href="#">Test Run of Pathfinder</a></li>
                          
  					</ul>
  				</li>
  				<li><a class="title" href="#">Satellite Communication using GPS module</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">UART Communication between GPS Module and Microcontroller</a></li>
                        <li class="bullet_circle"><a href="#">Connecting GPS module with Computer</a></li>
                        <li class="bullet_circle"><a href="#">Communication between GOOGLE EARTH and GPS Module</a></li>
                         <li class="bullet_circle"><a href="#">USING NMEA Command for GPS operation</a></li>
  					</ul>
  				</li>
				<li><a class="title" href="#">Development of a Satellite Operated Robot with GSM wireless connectivity</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Assembling of Satellite Controlled Robotics kit</a></li>
                        <li class="bullet_circle"><a href="#">Programming of microcontroller for Satellite Operated Robot</a></li>
                        <li class="bullet_circle"><a href="#">Testing of Final Circuit</a></li>
                         <li class="bullet_circle"><a href="#">Test run of Satellite Operated Robot</a></li>
  					</ul>
  				</li>
				<li><a class="title" href="#">Certification</a>
  					<p align="justify">All the Participating students will get a ‘Certificate of Participation’ by Robosapiens India</p>
  				</li>
               
  			</ul>
  </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>