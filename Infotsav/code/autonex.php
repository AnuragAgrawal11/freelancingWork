<?php 
include "header.php"; 
?>
  		
  		<div id="sidebar">
  			 <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Easy Links</h1>
  				<ul class="links">
  					<li><a href="index.php">Home</a></li><li><a href="about_iiitm.php">About IIITM</a></li>
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
            <p align="center"><h1>AutoNEX</h1></p>
<h3> A Two days workshop on Automobile Mechanics & Engine Design.</h3>
  				<li><a class="title" href="#">&#9679; Description</a>
  					<ul>
  						 <p align="justify"><strong>Emanagineer India </strong>aims to give India's most reputed workshop in the field of Automotive Mechanics and Engine Design. It aims to train participants and produce skilled technocrat and equips them with all the tools, techniques and methods needed for automobile industry. Emanagineer India had trained more than 3,000 participants across India in various workshop fields. These Workshops are intended to produce technocrats for the next generation. The live interactive sessions, and real life examples will take participants inside the minds of a technocrats.
				      </p>
  						 <p align="justify"><strong>Key Benefits</strong><br />
 <strong>1.</strong> We will be providing the students knowledge in the field of Automotive Mechanics and Engine Design by giving them knowledge of all the automotive systems and introducing them to the needs of the current automotive sector.<br />

  						   
  						   <strong>2.</strong> Trainings will be provided by core professionals in their fields. </p>
			      </ul>
  				</li>
			  <li><a class="title" href="#">Course Duration</a>
				<ul>
				  <li class="bullet_circle"><a href="#">16 hours (To be covered in 2 days) </a></li>
                  				  </ul>
  				</li>
  				<li><a class="title" href="#">Eligibilty Criteria</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">All students/professionals having an interest in automobile sector are eligible to attend this workshop. The Prerequisite for joining this workshop is zero and it is a basic level workshop. </a></li>
                       </ul>
  				</li>
  				<li><a class="title" href="#">Fees</a>
  					<ul>
  						<li class="bullet_circle"><a href="#">Rs. 1100 INR per participant.</a></li>
                        <li class="bullet_circle"><a href="#">The fees include study material, Certification, human resources and other charges. </a></li>
                         					</ul>
  				</li>
  				
                
                
                <li style="text-align:right"><a class="title" href="http://www.emanagineer.com/workshopregistration.htm" target="_blank">To register for the workshop click here.</a></li>
  			</ul>
	 </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>