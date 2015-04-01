<?php 
include "header.php"; 
?>
  		  		<div id="sidebar">
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
		  <h1 class="title">Infotsav 2010 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>nurturing novelty....</em></h1>
  			<p align="justify">Infotsav is the annual technology and management festival of ABV-IIITM Gwalior. This unique confluence of IT and Management aims to put to the test of mental acumen and alacrity of the students, helping them to gear up for future corporate battles. Infotsav provides an excellent opportunity for students to interact with their peers and the best minds from the Indian Business and Technical community. The focus of Infotsav is on providing a competitive atmosphere and bringing out the best in students by giving them an incentive for excellence.</p>
  			<p align="justify">
  			  Infotsav intends to provide a conductive platform for students from various technical and management institutes across India to compete among themselves on the myriad of technical as well as management events.</p>
  			<p align="justify">
  			  In this event the students become aware of new emerging fields of researches going on in academia and industry, thus encouraging them to find relevant areas of research and to apply their expertise trough the medium of various relevant competitions held during Infotsav.</p>
  			<p align="justify">
  			  Infotsav will comprise of technical and management events which will be of both competitive and challenging in nature. Infotsav expect increased participation from engineering colleges and B-schools. In addition to having separate events for technical and management fields, there will also be some challenging and noble events that will test both the technical and management prowess of the participants simultaneously.</p>
<p align="justify">
	  </p>
            <p>&nbsp;</p>
    
  			
  		
  		
  			
  		</div> <!-- full_page -->
  		  		  		
		<?php include"footer.php";?> <!-- footer -->
		
	</div> <!-- container -->
</body>


</html>
