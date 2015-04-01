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
            <p align="center"><h1>A Workshop on Mobi-Tronic Robotics</h1></p>

  				<li><a class="title" href="#">&#9679; Description</a>
  					<ul>
  						 <p align="justify">This workshop aims to provide a technical platform for the young technical minds so as to smoothen
their technical journey in the field of robotics. It basically consists of basic fundamentals and
practical concepts of basic electronics, robotics and its various applications.</p>
	              </ul>
  				</li>
				<li><a class="title" href="#">Duration</a>
  					<ul>
  						 <p align="justify">2 days each day 8 hour. A total of 16 hours.</p>
	              </ul>
  				</li>
				<li><a class="title" href="#">Registration Fees :</a>
  					<ul>
  						 <p align="justify">Rs.1300</p>
	              </ul>
  				</li>
				<h2>Detailed Course Content :</h2>
			  <li><a class="title" href="#">Basics : An introduction to active and passive components</a>
				<ul>
				  <li class="bullet_circle"><a href="#">Resistors,Capacitors,Diodes,LEDs,</a></li>
                  <li class="bullet_circle"><a href="#">Relays,Transistors</a></li>
                  
				  </ul>
  				</li>
  				<li><a class="title" href="#">An introduction to basic integrated circuits</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Definition</a></li>
                        <li class="bullet_circle"><a href="#">Types</a></li>
                        <li class="bullet_circle"><a href="#">Identification</a></li>
                        <li class="bullet_circle"><a href="#">Field of application</a></li>
                        <li class="bullet_circle"><a href="#">Study of some basic integrated circuits</a></li>
                        <li class="bullet_circle"><a href="#">Working principle of op-amps and comparators</a></li>
               		</ul>
  				</li>
  				<li><a class="title" href="#">Study of basic logic gates</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Types</a></li>
                        <li class="bullet_circle"><a href="#">Identification of ICs used for logic gates</a></li>
                        <li class="bullet_circle"><a href="#">Different techniques of solving problems using logic gate</a></li>
                         <li class="bullet_circle"><a href="#">Real life application of logic gates</a></li>
                         
  					</ul>
  				</li>
  				<li><a class="title" href="#">Control Systems</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Controlling a robot via wired and wireless medium</a></li>
                        <li class="bullet_circle"><a href="#">Controlling a robot with its own brain</a></li>
                        <li class="bullet_circle"><a href="#">Designing of logic circuits</a></li>
                         <li class="bullet_circle"><a href="#">How to implement logic using electronic hardware</a></li>
                          <li class="bullet_circle"><a href="#">Practical implementation of digital logics using a trainer kit.</a></li>
                           
  					</ul>
  				</li>
                <li><a class="title" href="#">Sensors</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Study of different types of sensors</a></li>
                        <li class="bullet_circle"><a href="#">Touch sensors</a></li>
                        <li class="bullet_circle"><a href="#">Light sensor using LDR, photo transistor and photo diode.</a></li>
                         <li class="bullet_circle"><a href="#">Infrared sensor using IR diode, and IR detectors</a></li>
                          <li class="bullet_circle"><a href="#">Obstacle detectors</a></li>
						   <li class="bullet_circle"><a href="#">Fire sensor</a></li>
                           
  					</ul>
  				</li>
                
                <li><a class="title" href="#">Actuator</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Types of actuators used in robotics</a></li>
                        <li class="bullet_circle"><a href="#">DC motors (geared and non geared)</a></li>
                          
  					</ul>
  				</li>
				<li><a class="title" href="#">Motor driver</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Motor driver using relay</a></li>
                        <li class="bullet_circle"><a href="#">Motor driver using transistor and IC's</a></li>
                          
  					</ul>
  				</li>
				<li><a class="title" href="#">DTMF decoder ICs</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">What is DTMF?</a></li>
                        <li class="bullet_circle"><a href="#">Interfacing of DTMF ICs</a></li>
						<li class="bullet_circle"><a href="#">Testing of a DTMF Circuits</a></li>
                          
  					</ul>
  				</li>
				<li><a class="title" href="#">Development of a Mobile phone Controlled Robot</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Assembling</a></li>
                        <li class="bullet_circle"><a href="#">Testing of Final Circuit</a></li>
						<li class="bullet_circle"><a href="#">Test run of Mobile Controlled Robot</a></li>
                          
  					</ul>
  				</li>
                
  			</ul>
  </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>