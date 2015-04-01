<?php 
include "header.php"; 
?>
	
	<div id="container">
		<a href="#" id="demoskin">Choose Color</a>
		<div id="header">
			<a href="index.html" id="logo">Orizon</a> <!-- Add a image to the style or remove the text-indent to display the text -->
			<ul id="nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li class="active"><a href="about.html">About</a>
					<ul>
						<li><a href="#">Home</a>
							<ul>
								<li><a href="index.html">Home - Vertical Gallery</a></li>
								<li><a href="index_horizon.html">Home - Horizontal Gallery</a></li>
								<li><a href="index_slider.html">Home - Simple Slider</a></li>
								<li><a href="index_slider_text.html">Home - Slider &amp; Text</a></li>
								<li><a href="index_wave.html">Home - Wave Slider</a></li>
								<li><a href="index_3d.html">Home - Cu3er 3D Slider</a></li>
								<li><a href="index_noslider.html">Home - No Slider</a></li>
							</ul>
						</li>
						<li><a href="#">Blog</a>
							<ul>
								<li><a href="blog.html">Blog Page</a></li>
								<li><a href="blog_post.html">Single Post</a></li>
							</ul>
						</li>
						<li><a href="#">Portfolio</a>
							<ul>
								<li><a href="portfolio.html">Overview Page</a></li>
								<li><a href="portfolio_page.html">Single Page</a></li>
							</ul>
						</li>
						<li><a href="#">About</a>
							<ul>
								<li><a href="about.html">Page with Sidebar</a></li>
								<li><a href="about_full.html">Page Fullwidth</a></li>
								<li><a href="about_mix.html">Page Mixed</a></li>
								<li><a href="about_col.html">Page Style Column</a></li>
							</ul>
						</li>
						<li><a href="404.html">404</a></li>
						<li><a href="sitemap.html">Sitemap</a></li>
						<li><a href="style.html">Styles</a></li>
					</ul>
				</li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul> <!-- nav -->
		
			<div id="header_bar">
				<h1>Generic Page with Sidebar</h1>
				<form id="searchbox" action="#">
	    			<ul>
	    				<li><input id="input_search" type="text" value="" /></li>
	    				<li><input id="submit_search" type="submit" value="" /></li>
	    			</ul>
	    		</form>
			</div> <!-- header_bar -->
		</div> <!-- header -->
  		
  		<div id="sidebar">
  			<div class="bg_one_third">
  				<h1 class="title">This is the sidebar</h1>
  				<p>You can add this box as many as you want just in wrap your content inbetween the	code below:</p>
  				<table class="code">
  					<tbody>
  						<tr>
  							<td>&lt;div class="bg_one_third”&gt;</td>
  						</tr>
  						<tr>
  							<td><p>Your content here...</p></td>
  						</tr>
  						<tr>
  							<td>&lt;/div&gt;</td>
  						</tr>
  					</tbody>
  				</table>
  			</div> <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Easy Links</h1>
  				<ul class="links">
  					<li><a href="index.html">Home</a></li>
  					<li><a href="blog.html">Blog</a></li>
  					<li><a href="portfolio.html">Portfolio</a></li>
  					<li><a href="about_mix.html">About</a></li>
  					<li><a href="gallery.html">Gallery</a></li>
  					<li><a href="contact.html">Contact</a></li>
  				</ul>
  			</div> <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Quickform</h1>
  				<form action="#" class="quickform">
  					<ul>
  						<li><label>Name:</label><input class="single_input" type="text" /></li>
  						<li><label>E-mail:</label><input class="single_input" type="text" /></li>
  						<li><label>Message:</label><textarea name="message" class="message" cols="30" rows="10"></textarea></li>
  						<li><input type="button" class="submit_form" /></li>
  					</ul>
  				</form>
  			</div> <!-- bg_one_third -->
  		</div> <!-- sidebar -->
  		
  		<div class="bg_two_third last">
  			<h1 class="page_title">This is an example of a Sidebar Page</h1>
  			<p>
  				<span class="dropcap">M</span>aecenas vel mauris non ipsum consectetur euismod vitae vel eros. Aliquam variturpis. 
  				Donec ultricies magna a mi condimentum fringilla. Vivamus at augue tortor, suscipit 
  				molestie magna. Nulla scelerisque dolor ac metus vehicula ac pharetra odio pellentesque. 
  			</p>
  			<p>
  				Mauris sodales aliquet placerat. Pellentesque ut justo erat, volutpat pellentesque enim. 
  				Nulla facilisi. Aenean neque sapien, gravida ac pretium ac, molestie a augue.
  			</p>
  			<div class="img_wrap img_one_third">
  				<a href="pictures/1.jpg" rel="prettyPhoto[pp_gal]">
  					<img src="pictures/1.jpg" alt="" />
  				</a>
  			</div> <!-- img_wrap -->
  			<div class="img_wrap img_one_third">
  				<a href="pictures/2.jpg" rel="prettyPhoto[pp_gal]">
  					<img src="pictures/2.jpg" alt="" />
  				</a>
  			</div> <!-- img_wrap -->
  			<div class="img_wrap img_one_third">
  				<a href="pictures/3.jpg" rel="prettyPhoto[pp_gal]">
  					<img src="pictures/3.jpg" alt="" />
  				</a>
  			</div> <!-- img_wrap -->
  			<p>
  				Ut nec dui leo. In hac habitasse platea dictumst. Pellentesque facilisis sollicitudin fringilla. 
  				Suspendisse viverra dolor sed lorem porttitor nec malesuada nibh pulvinar. Duis lobortis 
  				placerat consectetur. Nulla cursus sodales magna vel feugiat. Aliquam lacinia semper nibh. 
  			</p>
  			<p>
  				Nullam ornare sem sed nunc accumsan non ornare ligula congue. Duis neque lectus, 
  				suscipit non volutpat vel, ultrices a augue. In sit amet dui nec ligula placerat pretium. 
  				Integer pellentesque laoreet tortor, ac fringilla risus facilisis vitae. In sed et dui mattis 
  				semper. Aliquam venenatis porta iaculis. Aliquam sit amet urna quis felis sollicitudin 
  				pharetra. Cras et tincidunt ipsum:   
  			</p>
  			<ul>
  				<li class="bullet_circle">Sed ligula neque, tristique vitae euismod ac, tortor volutpat vehicula a ac enim.</li>
  				<li class="bullet_circle">Maecenas luctus convallis tincidunt nam ornare , sollicitudin laoreet varius diam. </li>
  				<li class="bullet_circle">Nulla facilisi fusce vel tellus hendrerit sed pretium commodo venenatis. </li>
  				<li class="bullet_circle">Suspendisse tincidunt mattis ultrices. Ut luctus neque vel mi posuere vulputate.</li>
  			</ul>
  			<img src="pictures/4.jpg" alt="" class="img_full_page" />
  		</div> <!-- bg_two_third -->
  		  		  		
		<div id="footer">
			<p>&copy; 2010 <a href="http://www.zemotion.co.uk/">Zemotion</a> - All rights reserved. Conforms to W3C Standard <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.zemotion.co.uk%2Fdemo%2FOrizon%2Fblog.html">XHTML</a> | 
				<a class="nocolor" href="sitemap.html">Site Map</a> | 
				<a class="nocolor" href="about.html">About Us</a> | 
				<a class="nocolor" href="contact.html">Contact</a>
			</p>
			<div id="rss_form">
				<form id="rss" action="http://www.zemotion.co.uk/demo/Orizon/post">
					<fieldset>
						<input type="text" name="input_rss" id="input_rss" value="Enter your Email" onfocus="prefillClear(this);" onblur="prefillClear(this);" />
						<input type="submit" id="submit_rss" value="" />
					</fieldset>
				</form>
			</div> <!-- rss_form -->
			<ul id="sociable">
				<li><a id="facebook" href="#"></a></li>
				<li><a id="twitter" href="#"></a></li>
				<li><a id="myspace" href="#"></a></li>
			</ul>
		</div> <!-- footer -->
		
	</div> <!-- container -->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>