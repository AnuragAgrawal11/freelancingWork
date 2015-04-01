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
            <p align="center"><h1>RoboTech Junior</h1></p>

  				<li><a class="title" href="#">&#9679; Description</a>
  					<ul>
  						 <p align="justify">RoboTech is the basic robotic course which helps students to apply electrical and mechanical concepts
					     learnt in detail in the robotics class and successfully build robots.<br />This course mainly concentrates on helping students to understand the dynamics of electricity and mechanics and how they become interdependent in making an advanced level of Robot.</p>
	              </ul>
  				</li>
				<li><a class="title" href="#">Registration Fees :</a>
  					<ul>
  						 <p align="justify">Rs.400</p>
	              </ul>
  				</li>
			  <li><a class="title" href="#">11Robots can be made using the RoboTech Kit provided by Technophilia:</a>
				<ul>
				  <li class="bullet_circle"><a href="#">Line following robot</a></li>
                  <li class="bullet_circle"><a href="#">Fire detecting/fighting robot</a></li>
                  <li class="bullet_circle"><a href="#">Photo-Phobic robot</a></li>
                  <li class="bullet_circle"><a href="#">Mobile phone controlled robot</a></li>
                  <li class="bullet_circle"><a href="#">Sound controlled robot</a></li>
                  <li class="bullet_circle"><a href="#">Dancing Robot</a></li>
                  <li class="bullet_circle"><a href="#">Wall following robot</a></li>
                  <li class="bullet_circle"><a href="#">Obstacle avoider robot</a></li>
                  <li class="bullet_circle"><a href="#">Obstacle follower robot</a></li>
                  <li class="bullet_circle"><a href="#">Boomerang robot</a></li>
				  </ul>
  				</li>
  				<li><a class="title" href="#">Concepts will be covered in the Robotics Curriculum provided by Technophilia:</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Speed</a></li>
                        <li class="bullet_circle"><a href="#">Gravity</a></li>
                        <li class="bullet_circle"><a href="#">Force</a></li>
                        <li class="bullet_circle"><a href="#">Torque</a></li>
                        <li class="bullet_circle"><a href="#">Acceleration</a></li>
                        <li class="bullet_circle"><a href="#">Friction</a></li>
               		</ul>
  				</li>
  				<li><a class="title" href="#">Electrical-</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Atom</a></li>
                        <li class="bullet_circle"><a href="#">Battery</a></li>
                        <li class="bullet_circle"><a href="#">Electrical Components</a></li>
                         <li class="bullet_circle"><a href="#">Electricity</a></li>
                          <li class="bullet_circle"><a href="#">Magnetism</a></li>
                           <li class="bullet_circle"><a href="#">Circuits</a></li>
                            <li class="bullet_circle"><a href="#">Power Supply System</a></li>
  					</ul>
  				</li>
  				<li><a class="title" href="#">Mechanical-</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Actuators</a></li>
                        <li class="bullet_circle"><a href="#">Motors</a></li>
                        <li class="bullet_circle"><a href="#">Controllers</a></li>
                         <li class="bullet_circle"><a href="#">Transmission System – Gears, Belt Pulley, Belt Drive, Rack and Pinion</a></li>
                          <li class="bullet_circle"><a href="#">Screw and Nut Arrangement</a></li>
                           <li class="bullet_circle"><a href="#">Drives</a></li>
                            <li class="bullet_circle"><a href="#">Mechanical System</a></li>
  					</ul>
  				</li>
                <li><a class="title" href="#">Sensors</a></li>
                <li><a class="title" href="#">Basics of Robotics</a></li>
                <li><a class="title" href="#">Construction of Robots</a></li>
                
  			</ul>
  </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>