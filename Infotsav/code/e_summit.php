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
            <p align="center"><h1>Entrepreneur Summit</h1> </p>
            
  				<li><a class="title" >&#9679; Theme:</a>
  					<ul>
  						<p align="justify" style="padding-right:10px">Entrepreneurship is a word that merits no particular definition to describe it. World has known great entrepreneurs in fields be it Industry, consumer goods, retail, technology, franchising, hospitality, entertainment, finance, internet, media, transportation and fashion. Some of the famous entrepreneurs are Bill Gates, Larry Page and Sergey Brin, Levi Strauss, Dhirubhai Ambani and many many more.  It is said that the future world belongs to the entrepreneurs of the future. <br/><br/>
With this objective in mind of nurturing novelty, Infotsav 2010 brings with it yet another learning venture – The E-Summit. It envisages the active and full of flamboyance participation of leading entrepreneurs who come all the way to share their experiences and fill the heart of budding entrepreneurs with enthusiasm and determination. A hot question and answer round that widens your view about what you think about making a business and that also clears the doubts in your brains about the innovative venture. Much like the “Once upon a time stories” which not only interesting to hear but inspiring also. 
So, be a part of E-Summit and discover where the entrepreneur within you is. A highly learning event, sure to get your nerves right and bound to make you say, “Yeah, I have a solution”. 
 </p>
  						
  					</ul>
  				</li>
			  <li><a class="title" >&#9679; Dignitaries of the summit</a></li>
			   <li><a class="title"  name="e1">&#9679; Mr. Kalyan Manyam ( CEO , Indyarocks India Ltd. ) </a></li>
			 
			 <p align="justify" style="padding-right:10px"><img src="images/kalyan_manyam.jpg" align="left" style="padding:10 px;padding-right:15px;"> Kalyan is the CEO of Indyarocks.com - the leading entertainment based social network for India. Indyarocks today boasts of 5.5 million registered users and is amongst the most popular and fastest growing web properties from India.<br/>

Kalyan has significant experience in technology, marketing, sales and alliances. In 2001, Kalyan co-founded Innova Health Systems, a Telemedicine company, which was later acquired. Prior to Indyarocks, he was heading the APAC sales and alliances for a US based product company – Solix Technologies<br/>

Kalyan is an active TiE charter member and serves on committees of TiE-ISB Connect, Hyderabad 10k foundation and LetsVote organizations.<br/>

Kalyan earned his Masters in information systems from the Eastern Michigan University. During his Masters, he was the only student to serve on the University Technology Advisory committee. In India, he earned his Bachelors in International business from Nizam College. Kalyan is also a certified Business Analyst, Financial Advisor (insurance) and an Oracle Presales and Technology consultant.</p>
		</li>
		 
		 
		 <li><a class="title" name="e2" >&#9679; Mr. Paramjeet Sahai ( CEO , EPA Infrastructures Ltd. )</a></li>
			 
			 <p align="justify" style="padding-right:10px"><img src="images/paramjeet_sahai.jpg" align="left" style="padding:10 px;padding-right:15px;" width="160" height="200">A graduate in Civil Engineering from IIT Delhi, 1977 batch, Mr. Sahai has a vast experience of over three decades in the fields of design, planning, marketing, execution and project management of civil construction projects/turnkey chemical processes plants and waste water treatment plants. He has previously worked with renowned organizations including Engineers India Ltd., Era Constructions, Shriram Projects, and contributed in the establishment of major engineering projects, including the Mathura Oil Refinery, Malanjkhand Copper Project and Panipat Fertilizer Project. He was also involved as a founder member of a new company called WTD ERA Ltd., as a joint venture between Era constructions and an Italian firm WTD srl.<br/>
In April 2003, Mr. Sahai established his own firm, EPA Infrastructure, which performs various specialist construction services. Through EPA Infrastructures, Mr. Sahai is committed to provide low cost housing to millions of homeless people and there by add another feather in his cap and give a new dimension to the field of entrepreneurship.
</p>
		</li>
		
		 <li><a class="title" name="e3" >&#9679; Mr. Jatin  Chaudhary ( Co-Founder and CEO, Point10 - Solutions for Life ! )</a></li>
			 
			 <p align="justify" style="padding-right:10px">Jatin Chaudhary along with Hiren Panchasara, founded Point10 in April 2009. As CEO of Point10, Jatin Chaudhary is responsible for overseeing the company's strategic, direction, planning, and implementation. Jatin has over 4 years of combined wide-ranging work experience in: International Call center, Strategic Business development for Architectural products for US and European markets, International sales and business development, Strategic Business consulting to Microsoft Corporate Teams, IT solutions sales for HP, Distribution and Channel sales. <br/><br/><br/><br/><br/></p>
		</li>
		
		
		
		 <li><a class="title"  name="e4">&#9679; Mr. Ashish Kumar ( CEO , Techkriti Software Pvt. Ltd. )</a></li>
			 
			 <p align="justify" style="padding-right:10px"><img src="images/ashish_kumar.jpg" align="left" style="padding:10 px;padding-right:15px;"></p>
		</li>
		
  				
</div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>