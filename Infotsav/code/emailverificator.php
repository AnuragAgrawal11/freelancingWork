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
  		</div> <!-- sidebar -->
  		
  		<div class="bg_two_third last">
  		 
  		  <div id="node-369">
  		    <div>
  		      <div>
  		        <h1 class="title">Email Verification for <?php echo $_REQUEST['user']; ?>
                </h1>
  		      </div>
  		      <div> <br />
			  
			  
			  
			  <?php

$row=mysql_fetch_row(mysql_query("SELECT mobile, name, institute, email_flag FROM users where username='".$_REQUEST['user']."'"));
if($row[3]!=0)
{
	echo '<p class="info_box"><br />Dear '.$row[1].' ('.$row[2].').<br /> Your email id is already verified. To register yourself for any event and participate into the event you need to visit this page <a href="MyInfotsav.php">My Infotsav</a></p>';
}
else if($_REQUEST['code']==md5($row[0]))
{
	if(mysql_query("UPDATE users set email_flag=1 where username='".$_REQUEST['user']."'"))
	echo '<p class="info_box"><br />Dear '.$row[1].' ('.$row[2].'), Thanks for resgistering to Infotsav 10.0. To register yourself for any event and participate into the event you need to visit this page <a href="MyInfotsav.php">My Infotsav</a></p>';
	
}
else{
	echo '<p class="info_box"><br />Dear '.$_REQUEST['user'].', We are sorry to say that some error has been error occurred. Please email your problem to us to contact@infotsav.org</p>';
}
?>
  		        
  		        
	          </div>
	        </div>
	      </div>
     </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>
</html>