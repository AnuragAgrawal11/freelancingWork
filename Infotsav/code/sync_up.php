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
            <p align="center"><h1>Sync-Up...Sense The Business</h1></p>
			
			<li><a class="title" href="#">Date :</a>
  					<ul>
  						 <p align="justify">23rd October 2010</p>
	              </ul>
  				</li>

  				<li><a class="title" href="#"> Description</a>
  					<ul>
  						 <p align="justify" > 'Sync-up'10: Sense the Business' is a Knowledge conclave instituted on the theme 'Entrepreneurship: exploring dimensions'. We seek to invite Stalwarts from various fields to discuss their views, contributions towards entrepreneurship. The attendees will be mostly esteemed representatives from universities and student organizations, scholars, pioneers, and different segments of private industry. </p>
	              </ul>
				  
				  
				  
				  <ul>
  						 <p align="justify" >The fiber of Entrepreneurship is like the strings on a Guitar, talent of artist exposes hidden and unexplored rhythms. The more one is devoted to his own beat the better he seems to outperform his counterparts. Entrepreneurship is the light that can be kindled by a thought but only sustained by a dedicated soul who is prepared to be consumed in pursuit of success. Some come for money, others for glory while there are still the ones who chase entrepreneurship for the thrill, adventure and surreal promises it holds in its bosom. Thus we argue to define Entrepreneurship not just as a mode of moving economy, communicating ideas but as a more realistic, totalistic outline that comes from all possible dimensions as one can imagine. Be it a scholar, academician, artist, leader or be it you, me, a companion, idea can come from anywhere in any-form but the skill to exercise needs to be harbored and nurtured to take our nation where it belongs. Therefore we seek to bring together brethren of delegates, pioneers, gurus, to share their first hand experience impart on us the flame they have enjoyed for a long time and shared among their peers. The professions namely academia, arts, entrepreneurs, industrialists, journalists, social leaders, sports persons, and word smiths have been trenchantly chosen as they shape the future and influence the talent the most. Through the channel of Sync-Up'10 we would like to conjure the feel and kindle the fire of entrepreneurship.</p>
	              </ul>
  				</li>
				<li><a class="title" href="#">Speakers :</a>
  					<ul>
  						 <p align="justify"><strong>Mr.Ashish</strong> : He has established Divya Prem Sewa mission in Haridwar. It is a foundation which is helping leper patients to live through their lives happily.

</p>
						 <p align="justify"><strong>Prof. Harish Chandra Verma</strong> : He is an Indian nuclear experimental physicist and educationist .He is famous for his book, Concepts of Physics,  a general reading Physics textbook. </p>
						 <p align="justify"><strong>Mr. Manoj Srivastava</strong> : Currently designated as Secretary to Public Relation Department of MP Govt. An eloquent speaker and great visionary.
</p>
						 <p align="justify"><strong>Mr.Shyamlal Yadav</strong> : India Today Special Correspondent Shyamlal Yadav has won the National RTI award given by PCRF-NDTV</p>
	              </ul>
  				</li>
				<li><a class="title" href="#">Event Managers :</a>
  					<ul>
  						 <p align="justify">Ishan Agarwal</p>
						 <p align="justify">Bhuvnesh Baberwal</p>
	              </ul>
  				</li>
				
				
                
  			</ul>
  </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>