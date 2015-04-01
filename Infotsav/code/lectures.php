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
  		 
  		  <div id="node-369">
  		    <div>
  		      <div>
  		        <h1 class="title">A session by Yashavant Kanetkar, the renowned author of "Let Us C" and more.
                </h1>
  		      </div>
  		      <div> <br />

  		        <h2><strong>YASHAVANT KANETKAR</strong></h2>
  		        <p><img src="images/yk.jpg" alt="" width="156" align="left" height="201" style="padding-right:20px"; /></p>
  		        <p><strong><u>Yashavant Kanetkar, Computer Science Author &amp; Director, KICIT</u></strong><br />
	            </p>
  		        <p><strong>Yashavant Kanetkar</strong> is a pioneer in IT Education in India. A   true entrepreneur, he has single-handedly set benchmarks for IT   education and has played a major role in taking IT learning to every   nook and corner of this country. He has authored several bestsellers and   helped shape careers of millions of programmers throughout Asia. Most   recently, he has created several interactive training titles for KSET&rsquo;s   flagship &ldquo;Quest&rdquo; Content Delivery Platform which have become a stellar   success. </p>
  		        <p>In recognition of his immense contribution to IT education in India,   he has been most recently awarded the &quot;Distinguished Alumnus Award&quot; by   IIT Kanpur and &quot;Best .NET Technical Contributor&quot; and &quot;Most Valuable   Professional&quot; awards by Microsoft. His current passion is Device Drivers   and Embedded Systems. Yashavant holds a B.E. from VJTI Mumbai and an M.   Tech. from IIT Kanpur.</p>
  		        <p>Almost all of the software developers and programmers in India are   bound to have come across his famous book, 'Let Us C' published in   several languages and countries. Besides this book, he has authored many   other titles on C, C++, VC++, C#, .NET, Direct X and Embedded Systems.</p>
  		        <p>Yashavant's current affiliations include being a Director of KICIT, company engaged in IT Training and Content Development.</p>
	          </div>
	        </div>
	      </div>
     </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>