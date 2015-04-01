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
            <p align="center"><h1>Animation And Multimedia Workshop </h1></p>

  				<h3>12 hours workshop on Animation</h3>
  				<li><a class="title" href="#">About Arena</a>
  					<ul>
  						 <p align="justify">Arena Multimedia is Asia's leader in multimedia education, and is spread across 15 countries. It trains students as well as professionals in the latest industry relevant courses backed by alliances with world leaders, a world-class facultyand the latest technical education tools. Arena offers training in areas like multimedia, animation and Web engineering for opportunities in industries like advertising, entertainment, printing, designing and internet. For years, Arena has worked in close association with the leading professionals in the multimedia and animation industry. Understanding the industry requirement for well-trained animation professionals , with the knowledge of animation techniques to fit into world-class standards. 
				      </p>
  						 <p align="justify"> The academies offer courses in classical and cell animation. Maya, US animation, Amino, audio-visual editing and special effects.The Academy's focus has been to make its programs an exact and relevant match with the animation industry's demands. In sync with the evolving industry requirements, the Academy has inroduced a 2D and 3D animation training-Diploma in Animation Engineering. </p>
			      </ul>
  				</li>
			  <li><a class="title" href="#">Course Duration</a>
				<ul>
				  <li class="bullet_circle"><a href="#">12 hours (To be covered in 2 days) </a></li>
                  				  </ul>
  				</li>
				<li><a class="title" href="#">Course Content</a>
				<ul>
				  <li class="bullet_circle"><a href="#"> Interior and Exterior Designning (To be covered in 3 hours)</a> </li>
				  <li class="bullet_circle"><a href="#"> 3D Animation Movie Making (To be covered in 6 hours)</a></li>
				  <li class="bullet_circle"><a href="#"> Visual & Speacial Effects in Movie (To be covered in 3 hours)</a></li>
                  				  </ul>
  				</li>
				</ul>
	 </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>