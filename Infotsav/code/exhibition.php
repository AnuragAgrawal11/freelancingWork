<?php 
include "header.php"; 
?>
  		
  		<div id="sidebar">
  			<div class="bg_one_third" style="height:300px;">
  				<h1 class="title">Social Science Exhibition</h1>
				<div id="EventLinks">
  				<a href="javascript:void(0);" onclick="getExhibition('exhibition', 'Description')"><img src="img/description.png" /></a><br />
				<a href="javascript:void(0);" onclick="getExhibition('exhibition', 'Rules')"><img src="img/rules.png" /></a><br />
				<a href="javascript:void(0);" onclick="getExhibition('exhibition', 'Timelines')"><img src="img/timelines.png" /></a><br />
				<a href="javascript:void(0);" onclick="getExhibition('exhibition', 'Contacts')"><img src="img/contacts.png" /></a><br />
				<a href="javascript:void(0);" onclick="getExhibition('exhibition', 'Downloads')"><img src="img/downloads.png" /></a><br />
				</div>
  				<!--<ul class="tabContainer">
 The jQuery generated tabs go here 
</ul>-->
  			</div> <!-- bg_one_third -->
  			 <!-- bg_one_third -->
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
					<input type="hidden" value="workshop.php" name="page">
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
  			<h1 class="page_title"> Exhibition</h1>
  			<div id="ExhibitionData">
			<?php
include "connect.php";
$EventId='Science Exhibition';
$q = mysql_query("SELECT * FROM  events WHERE event_name ='".$EventId."'");
$rs = mysql_fetch_array($q);
echo $rs[2];
?>
</div>
  			
  		</div> <!-- bg_two_third -->
		<div class="bg_two_third last" style="height:170px"> 
						<h1>Recent Updates :</h1>
						<marquee direction="up" scrollamount="2" scrolldelay="2">
						<h4>&#9679 A 2 days workshop on Automobile Mechanics & Engine Design by <strong>Emanagineer India</strong>.</h4>
						<h4>&#9679 A session by <strong>Yashwant Kanetkar</strong> , the renowed author of "Let Us C" and more.A pioneer in IT Education in India</h4>
						<h4>&#9679 A 16 hr <strong>Ethical Hacking & Information Security</strong> Workshop on 29th - 30th October during Infotsav by Kyrion Technologies.</h4>
						<h4>&#9679 A <strong>National Level</strong> Social Science Exhibition for school students and hence Infotsav 2010 implementing its theme of Infotsav Nurturing Novelty.</h4></marquee>
						
  			
  			
  			
  		</div>
  		  		  		
		<?php include"footer.php";?> <!-- footer -->
		
	</div> <!-- container -->
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>