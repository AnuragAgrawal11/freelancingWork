<?php 
include "header.php"; 
?>

<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js"></script>
<script type="text/javascript" src="js/effects.js"></script>
<script type="text/javascript" src="js/dragdrop.js"></script>
<script type="text/javascript" src="js/portal.js"></script>

<script type="text/javascript">
	var settings 	= {'column-1' : ['block-1','block-2'], 'column-2' : ['block-3'], 'column-3' : ['block-4']};
	var options 	= { portal : 'columns', editorEnabled 	: true};
	var  data= {};
	var portal;
	Event.observe(window, 'load', function() 
	{
		portal = new Portal(settings, options, data);
	});
</script>

<link rel="stylesheet" href="css/event_registration.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/portal.css" type="text/css" media="screen">
        
        
        
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
  					<li><a href="./MyInfotsav.php?id=My Profile">My Profile</a></li>
  					<li><a href="./MyInfotsav.php">Event Registration</a></li>
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
  		        <h1 class="title">My Infotsav</h1>
  		      </div>
  		      <div> 
             
				  
 		        <div id="wrapper">

			<div id="columns">

				<div style="position: relative;" id="column-1" class="column menu"><div style="position: relative;" class="block" id="block-1">
						<h1 class="draghandle">Block 1</h1>
						<p>Block 1 data</p>
					</div><div style="position: relative;" class="block" id="block-2">
						<h1 class="draghandle">Block 2</h1>
						<p>Block 2 data</p>
					</div></div>

				<div style="position: relative;" id="column-2" class="column blocks"><div style="position: relative;" class="block" id="block-3">
						<h1 class="draghandle">Block 3</h1>
						<p>Block 3 data</p>
					</div></div>

				<div style="position: relative;" id="column-3" class="column sidebar"><div style="position: relative;" class="block" id="block-4">
						<h1 class="draghandle">Block 4</h1>
						<p>Block 4 data</p>
					</div></div>

				<div class="portal-column" id="portal-column-block-list" style="display: none;">
					
					
				</div>

			</div>



			
			<div style="clear: both;"></div>

			
				
			
	        </div>
	      </div>
     </div> <!-- bg_two_third -->
	 </div>
	 
	 
  		  		  		
		
		<!-- footer --><?php include"footer.php";?>
	</div> <!-- container -->
	 
</body>

</html>