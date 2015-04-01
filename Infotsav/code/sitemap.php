<?php 
include "header.php"; 
?>
  		
  		<div id="sidebar">
  			<div class="bg_one_third">
  				<h1 class="title">About Infotsav 2010</h1>
  				<p align="justify"><span class="dropcap">I</span>nfotsav is an annual technical fest of ABV Indian Institute of Information Technology, Gwalior. </p>
			  <p align="justify"><span class="dropcap">I</span>t is the largest Techno-Management fest of central India.<br />
			</p>
  			</div> <!-- bg_one_third -->
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
					<input type="hidden" value="sitemap.php" name="page">
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
<li><a class="title" href="index.html">Home</a>
  					<ul>
  						<li class="bullet_circle"><a href="index.php">About Infotsav</a></li>
  						<li class="bullet_circle"><a href="sponsors.php">Sponsors</a></li>
  						<li class="bullet_circle"><a href="http://iiitm.ac.in/" target="_blank">About IIITM</a></li>
  						
  					</ul>
  				</li>
  				<li><a class="title" href="#">Events</a>
  					<ul>
  						<li class="bullet_circle"><a href="#"><strong>Technical Events</strong></a>
                        <ul>
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Akraman" ; ?>">Akraman</a></li>
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Code Wars" ; ?>">Code Wars</a></li>
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Code Weavers" ; ?>">Code Weavers</a></li>
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Enigma" ; ?>">Enigma</a></li>
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "La Ingenious" ; ?>">La Ingenious</a></li>
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Web Mania" ; ?>">Web Mania</a></li>
                        <li class="bullet_circle"><a href="events.php?id=<?php echo "Witch Hunt" ; ?>">Witch Hunt</a></li>
                        
  					</ul>
                    </li>
                   						<li class="bullet_circle"><a href="#"><strong>Management Events</strong></a>
                        <ul>
  						
  						
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Analyst" ; ?>">Analyst</a></li>
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Brouhaha" ; ?>">Brouhaha</a></li>
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Pinnacle" ; ?>">Pinnacle</a></li>
                        <li class="bullet_circle"><a href="events.php?id=<?php echo "Tycoon" ; ?>">Tycoon</a></li>
                        </ul>
  					
                      </li>
                        <li class="bullet_circle"><a href="#"><strong>Simulation Events</strong></a>
                        <ul>
  						
  						<li class="bullet_circle"><a href="events.php?id=<?php echo "Stock Sutra" ; ?>">Stock Sutra</a></li>
                              	<li class="bullet_circle"><a href="events.php?id=<?php echo "Bull Fight" ; ?>">Bull Fight</a></li>
								<li class="bullet_circle"><a href="events.php?id=<?php echo "Forex" ; ?>">Forex</a></li>
                               
                                <li class="bullet_circle"><a href="events.php?id=<?php echo "Job Bureau" ; ?>Job Bureau</a></li>
                                <li class="bullet_circle"><a href="events.php?id=<?php echo "Trove Trace" ; ?>">Trovetrace</a></li>
                        </ul>
  					
                      </li>
                      <li class="bullet_circle"><a href="events.php?id=<?php echo "Sameeksha" ; ?>">Sameeksha</a></li>
                    <li class="bullet_circle"><a href="events.php?id=<?php echo "Chakravyuh" ; ?>">Chakravyuh</a></li>
                    <li class="bullet_circle"><a href="events.php?id=<?php echo "Gamiacs" ; ?>">Gamiacs</a></li>
  					</ul>
                    <li><a class="title" href="#">Workshops</a>
  					  <ul>
  						<li class="bullet_circle"><a href="workshop.php">A 2 days workshop on Automobile Mechanics &amp; Engine Design by Emanagineer India.
  						</a></li>
                        <li class="bullet_circle"><a href="workshop2.php">A 16 hr Ethical Hacking Workshop on 29th-30th Oct, by Kyrion Technologies.

  						</a></li>
  					</ul>
  				</li>
  				<li><a class="title" href="lectures.php">Lectures</a>
  					<ul>
  						<li class="bullet_circle"><a href="lectures.php">A session by Yashavant Kanetkar, the renowned author of "Let Us C" and more.
</a></li>
  						
  					</ul>
  				</li>
  				<li><a class="title" href="exhibition.php">Exhibition</a>
                <ul>
  						<li class="bullet_circle"><a href="exhibition.php">Science Exhibition
</a></li>
  						
  					</ul></li>
                    <li><a class="title" href="#">Sponsorship and Media</a>
                      <ul>
  						<li class="bullet_circle"><a href="sponsors.php">Infotsav 10.0 sponsors.</a></li>
                        <li class="bullet_circle"><a href="previous_sponsors.php">Infotsav 09 sponsors.</a></li>
  						
  					</ul></li>
  				<li><a class="title" href="#">Contact</a>
                <ul>
  		<li class="bullet_circle"><a href="contact.php">Organizing Team</a></li>
		<li class="bullet_circle"><a href="core_committee.php">Core Committee</a></li>
        <li class="bullet_circle"><a href="web_team.php">Web Team</a></li>
  						
  					</ul>
                </li>
                <li><a class="title" href="#">Hospitality</a>
                <ul>
  		<li class="bullet_circle"><a href="hospitality.php">How to reach us?</a></li>
		<li class="bullet_circle"><a href="hospitality.php">What ater reaching IIITM?</a></li>
  						
  					</ul>
                </li>
                <li><a class="title" href="#">Events Chart</a>
                <ul>
  		<li class="bullet_circle"><a href="event_chart.phpl">Infotsav's Events Chart</a></li>
		 					</ul>
                </li>
                <li><a class="title" href="#">About IIITM</a>
                <ul>
  		<li class="bullet_circle"><a href="about_iiitm.php">About IIITM</a></li>
        <li class="bullet_circle"><a href="http://iiitm.ac.in" target="_blank">Visit website</a></li>
		 					</ul>
                </li>
  			</ul>
  		</div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

</html>