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
            <p align="center"><h1>Zero  Contact</h1> 
            Powered by Technophillia systems.</p>
            
  				<li><a class="title" >&#9679; Theme:</a>
  					<ul>
  						<li class="bullet_circle" style="color:#333333">Construct An autonomous  Robot, which is capable of going from start to exit while avoiding the obstacles in its path. </a></li>
  						
  					</ul>
  				</li>
			  <li><a class="title" >&#9679; Outline of the Contest:</a>
				<ul>
				  <li class="bullet_circle" style="color:#333333">Make an obstacle avoider robot. Robot should travel from enter to exit avoiding the obstacles present in between. Each time a robot touches an obstacle is considered as a negative point. The fastest robot with least negative points will be the WINNER.</a></li>
                
				  </ul>
  				</li>
  				<li><a class="title" >&#9679; Specifications:</a>
  					<ul>
					<li class="bullet_circle" style="color:#333333"><img src="images/zero.jpg" /></li>
  						<li class="bullet_circle" style="color:#333333" >All dimensions in inches</a></li>
                        <li class="bullet_circle" style="color:#333333">Maximum ROBOT size 12 Inches X 12inches X 12 Inches</a></li>
                        <li class="bullet_circle" style="color:#333333">Windows System Security</a></li>
               		</ul>
  				</li>
  				<li><a class="title" >&#9679; Structure of Game</a>
  					<ul>
  						
                        <li class="bullet_circle" style="color:#333333">Only 1 team will perform the at one time on the game arena.  </a></li>
                        <li class="bullet_circle" style="color:#333333">Robot should start moving from entry pointand without touching any obstacles should pass through the exit point.</a></li>
  					</ul>
  				</li>
  				<li><a class="title" >&#9679; Game Rules</a>
  					<ul>
  						<li class="bullet_circle" style="color:#333333">Game Arena Background would be White in color.</a></li>
                        <li class="bullet_circle" style="color:#333333">All obstacles are white in color. </a></li>
                        <li class="bullet_circle" style="color:#333333">All dimensions are specified in the Arena image.</a></li>
						<li class="bullet_circle" style="color:#333333">Each team will have 2 attempts.</a></li>
						<li class="bullet_circle" style="color:#333333">Best of two will be counted.</a></li>
						<li class="bullet_circle" style="color:#333333">Only one person will control the robot.</a></li>
						<li class="bullet_circle" style="color:#333333">Touching an obstacle will result in a loss of 5 points.</a></li>
						<li class="bullet_circle" style="color:#333333">Touching a wall will result in a loss of 10 points</a></li>
  					</ul>
  				</li>
                <li><a class="title" >&#9679; General Rules </a>
  					<ul>
  						<li class="bullet_circle" style="color:#333333">A team can consist of a maximum of <strong>4-5 members</strong>. </a></li>
                        <li class="bullet_circle" style="color:#333333">Each team must declare a name for their machine at the time of competition. </a></li>
						<li class="bullet_circle" style="color:#333333">The machines you build will be first checked for size and safety</a></li>
						<li class="bullet_circle" style="color:#333333">The machine must not contain any combustible, corrosive, or otherwise dangerous materials for safety reasons. No explosive compression or decompression, either internal or external is permitted. </a></li>
						<li class="bullet_circle" style="color:#333333">Judges have the right to disqualify any machine whose working mechanism or game strategy is considered hazardous in any way. </a></li>
						<li class="bullet_circle" style="color:#333333">In case any kind of dispute arises <strong>the judges’ decision will be considered final and binding to all</strong> and <strong>no argument</strong> will be entertained</a></li>
						
  					</ul>
  				</li>
                <li><a class="title" >&#9679; Scoring formula:</a>
  					<ul>
  						<li class="bullet_circle" style="color:#333333"><a  class="style1">Team’s Final Score= 500 – (total of negative points achieved) – (time taken by the Robot in seconds)*2</a></li>
                      
  					</ul>
  				</li>
				<li><a class="title" >&#9679; Disqualification</a>
  					<ul>
  						<li class="bullet_circle" style="color:#333333">During the Game, the team members are not allowed to touch the machine or the arena. Failure to do so will lead to disqualification.</a></li>
                        <li class="bullet_circle" style="color:#333333">Any kind of assistance through edges for locomotion will lead to a disqualification.</a></li>
						<li class="bullet_circle" style="color:#333333">Any kind of damage to the arena will attract disqualification.</a></li>
						<li class="bullet_circle" style="color:#333333">The teams will be asked to get ready 5 minutes before the start of the match. If a team is not ready within the stipulated time, this will lead to disqualification.</a></li>
						<li class="bullet_circle" style="color:#333333">The teams will be asked to get ready 5 minutes before the start of the match. If a team is not ready within the stipulated time, this will lead to disqualification.</a></li>
						<li class="bullet_circle" style="color:#333333">Judges have the right to disqualify any team if they feel the team is not playing with fair interests. </a></li>
						
  					</ul>
  				</li>
                <li style="text-align:right"><a class="title"  target="_blank"></a></li>
  			</ul>
</div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>