<?php //session_start(); 
include "header.php"; 
?>
	




	
		<div id="show" class="vertical_slideshow">
		
 			<div id="vertical_gallery"> </div>
</div> <!-- Vertical Slideshow -->
<script language="javascript">
function src(){
		if(screen.width<=1100)
		{
			//document.getElementById('show').style.margin="0 -6px 30px 0";
		}
		else
		{
			document.getElementById('show').style.margin="0 8% 30px 45%";
		}
		//alert(document.getElementById('show').style.margin);
		}
		</script>
<div class="full_page mb40">
<style type="text/css">

/*Example CSS for the two demo scrollers*/

#pscroller1{
width: 100%;
height: 60px;
border: 0px solid black;


}

.someclass{ //class to apply to your scroller(s) if desired
}

</style>

<script type="text/javascript">

/Example message arrays for the two demo scrollers/
var pausecontent=new Array()

pausecontent[0]='<h4>Updates :<br/><a href="register.php">Registration for Infotsav is open.</a></h4>'
pausecontent[1]='<h4>Updates :<br/><a href="#">Limited Seats for Workshops. Register yourself.</a></h4>'
pausecontent[2]='<h4>Updates :<br/><a href="http://infotsav.org/events.php?id=Analyst">Analyst- The Case Study Contest: Case for 1st round is uploaded.</a></h4>'
pausecontent[3]='<h4>Updates :<br/><a href="http://infotsav.org/events.php?id=Pinnacle">Pinnacle- The Business Plan competition, last date of submission of executive summary is 5th Ocotber.</a></h4>'
pausecontent[4]='<h4>Updates :<br/><a href="http://infotsav.org/events.php?id=Brouhaha">Brouhaha- The Advertisement Contest, case for the first and second phase is open.</a></h4>'
pausecontent[5]='<h4>Updates :<br/><a href="http://infotsav.org/events.php?id=La%20Ingenious">La-Ingenious- The Open Software Competition: submit your abstract of software.</a></h4>'
pausecontent[6]='<h4>Updates :<br/><a href="http://infotsav.org/events.php?id=Sameeksha">Sameeksha- The National Level Paper Presentation, invites abstracts of your papers. </a></h4>'
pausecontent[7]='<h4>Updates :<br/><a href="http://infotsav.org/events.php?id=Web%20Mania">Web-maina- The Website Designing Competition, themes and rules are uploaded. First round is open.</a></h4>'
pausecontent[8]='<h4>Updates :<br/><a href="#">Infotsav 2010 launches category of Robotics events for the first time.</a></h4>'
pausecontent[9]='<h4>Updates :<br/><a href="#">Entrepreneur summit in Infotsav 2010. Opportunity to interact with some renowned and successful entrepreneurs.</a></h4>'
pausecontent[10]='<h4>Updates :<br/><a href="http://infotsav.org/events.php?id=Pinnacle">Pinnacle- The B-plan Competition, in collaboration with Incubation centre, will mentor and sponsor the winning B-plan and help to establish your own venture.</a></h4>'
pausecontent[11]='<h4>Updates :<br/><a href="#">Infotsav 2010 launches category of Robotics events for the first time.</a></h4>'

</script>
  			<script type="text/javascript">

//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

new pausescroller(pausecontent, "pscroller1", "someclass", 3000)
</script>
  		</div> <!-- full_page -->

  		<div id="equalize"> <!-- used to equalize all box at the same height -->
  			<div class="bg_one_third">
  				<h1>Infotsav  29th-31st October 2010</h1>
  				
  				<p align="justify"><span class="dropcap">I</span>n the midst of anticipation and enthusiasm, Infotsav is already making its presence felt. As the expectations are increasing, so is the competition. Its canvas now holds even more exciting events, potential of giving your grey matter a healthy stir. So ensure you have enough zeal and passion to accomplish the quest. </p>
				<p align="justify"><span class="dropcap">I</span>nfotsav is the perfect blend of aptitude, imagination, variety and vision. Intelligent is not the one who knows a lot, but the one who applies it all  and Infotsav 2010 is just the precise place to be in. So dump your inhibitions and grab all that you got, to make sure you do not leave your canvas blank.</p><a href="about_infotsav.php" class="more">More<span></span></a>
          </div> <!-- bg_one_third -->
  			<div class="bg_one_third"/>
            <h1>Our Sponsors</h1><center><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
 codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0"
 width="278" height="210" id="CC718287" align="middle">
<param name="movie" value="pre_sponsers.swf"/>
<param name="quality" value="high" />
<param name="FlashVars" VALUE="xmlfile=pre_sponsers.xml"/>
<param name="scale" value="noscale" />
<param name="salign" value="lt" />
<param name="bgcolor" value="#ffffff" />
<embed src="pre_sponsers.swf" quality="high" bgcolor="#ffffff" width="278" height="210"
 name="CC718287"  scale="noscale" salign="lt" align="middle" type="application/x-shockwave-flash"
 pluginspage="http://www.macromedia.com/go/getflashplayer" /></object></center>
<p align="justify"><span class="dropcap">W</span>ith an impressive plethora of events lined up in Infotsav 2010, we provide our sponsors a great platform to brand itself in ABV-IIITM Gwalior as well as the entire student fraternity of India. </p>
  						<a href="sponsors.php" class="more">More<span></span></a>
  			</div> <!-- bg_one_third -->
  			<div class="bg_one_third last">
  				<h1>Nurturing Novelty...</h1>
  				
  				<p align="justify"><span class="dropcap">W</span>hen an individual dreams and contemplates simultaneously, an idea is born. This idea can become a reality only in an atmosphere conducive to the human development. And after all the required efforts made, what the world sees is a phenomenal marvel.</p>
				<p align="justify"><span class="dropcap">I</span>t depends on you to follow someone else's footsteps or make the world follow yours. The world will lead to nowhere without innovation and originality. Fostering them is the greatest responsibility of humankind. And this is what we do in Infotsav- we inspire and encourage the generation to find the best plausible way to do a particular thing, to imagine and to create something never created before. We call it NURTURING NOVELTY.</p>
  						
						


  			</div> <!-- bg_one_third last -->
  		</div>
	 <!-- equalize -->
		<?php include"footer.php";?>		
	   <!-- footer -->
		
	</div> <!-- container -->
    
<script type="text/javascript"> Cufon.now();src(); </script>
</body>


</html>