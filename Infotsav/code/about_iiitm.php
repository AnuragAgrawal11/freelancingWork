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
		  <h1 class="title">ABV-Indian Institute of Information Technology & Management Gwalior</h1>
  			<p align="justify">Atal Bihari Vajpayee – Indian Institute of Information  Technology &amp; Management Gwalior (ABV-IIITM Gwalior), a deemed university,  is an apex Institute established by the ministry of HRD, Government of India.  ABV-IIITM Gwalior strives to become the world-class institution, thereby  contribute towards research and education producing technology and business  leaders. It integrates management as a concept with technology as a platform to  create a synergic approach for solving emerging industry problems.</p>
  			<p align="justify">
  			  The institute has been accorded the statues of autonomous  university and conducts its own examinations awards degrees at masters and  doctorate levels. The institute is built on a 160-acre campus on the foothills  of Gwalior Fort. The networked smart campus is self contained with all basic  facilities for all round development of students’ personality.</p>
  			<p align="justify">
  			  The institute is a dynamic source of intellectual energy  with strong connection to the business world, its focus being on collaborative  efforts like flexible curriculum design, curriculum delivery, mentoring of  students by professionals from the corporate world, summer internship projects  and final placements.</p>
  			<p align="justify">
  			  The Institute’s core faculty consists of well-known, diverse  and talented professionals. In addition, adjunct and visiting faculty, from the  industry and from other top academic institutions and research organizations,  contribute to keep course delivery abreast with the latest developments keeping  in view the requirements of the professional world.</p>
<p align="justify">
	  </p><p>Visit our institute site
        <p align="justify">  <a href="http://www.iiitm.ac.in/" target="_blank">http://www.iiitm.ac.in/</a></p>
            <p>&nbsp;</p>
    
  			
  		
  		
  			
  		</div> <!-- full_page -->
  		  		  		
		<?php include"footer.php";?> <!-- footer -->
		
	</div> <!-- container -->
</body>


</html>
