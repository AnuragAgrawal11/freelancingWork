<?php 
include "header.php"; 
?>
<style type="text/css">
<!--
.style1 {color: #990000}
-->
</style>

  		
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
		 <p align="center"><h1>Infotsav 2010 : Media Coverage</h1> </p>
		 <li><a class="title">Infotsav 2010 In Patrika (Dated 17th October 2010)</a></li>
  			<p><center><img src="images/patrika.jpg" width="95%" height="476"></center></p>
			 
  				
</div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>