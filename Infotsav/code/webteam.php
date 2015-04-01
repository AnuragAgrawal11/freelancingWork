<?php 
include "header.php"; 
?>
  		
  		<div id="sidebar">
  			<div class="bg_one_third">
  				<ul id="contact_btn">
  					<li class="page_title">Contact Details</li>
  					<li class="page_title" id="map"><a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=iiitm+gwalior&amp;sll=23.553917,77.744751&amp;sspn=2.885038,5.817261&amp;ie=UTF8&amp;hq=iiitm+gwalior&amp;hnear=&amp;cid=11945795191054203276&amp;ll=26.259937,78.177509&amp;spn=0.02694,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed?iframe=true" rel="prettyPhoto[iframes]">Check the Map</a></li>
  				</ul>
  				<div id="call_us">
  					<h1 class="title">Call Us</h1>
  					<span class="contact_icons"></span>
  					<table>
  						<tbody>
  							<tr>
  								<td>Tel</td>
  								<td>+91-751-2449837</td>
  							</tr>
  							<tr>
  								<td>E-mail</td>
  								<td><p><a href="mailto:contactus@infotsav.org">contact[at]infotsav[dot]org</a><br>
							    </p>
							    <p>(Avialable for Google chat)</p></td>
  							</tr>
  							<tr>
  								<td>Skype id</td>
  								<td><p>You may chat with us on skpe</p>
							    <p><a href="#">Infotsav[at]skype[dot]com</a></p></td>
  							</tr>
  						</tbody>
  					</table>
  				</div> <!-- call_us -->
  				<div id="find_us">
  					<h1 class="title">Find Us</h1>
  					<span class="contact_icons"></span>
  					<table>
  						<tbody>
  							<tr>
  								<td align="justify"><p>Infotsav Cell (A block-208)</p>
							    </td>
  							</tr>
  							<tr>
  								<td><p>ABV-Indian Institute of Information Technology and Management Gwalior,</p>
							    <p>Morena Link Road, Gwalior</p></td>
  							</tr>
  							<tr>
  								<td>Madhya Pradesh, INDIA - 474010.</td>
  							</tr>
  						</tbody>
  					</table>
  				</div> <!-- find_us -->
  				<div id="positions">
  					<h1 class="title">Visit Institute site</h1>
  					
  					<p><a href="http://iiitm.ac.in" target="_blank">http://iiitm.ac.in</a></p>
    				</div> <!-- positions -->
   			</div> <!-- bg_one_third -->
  		</div> <!-- sidebar -->
  		
  		<div class="bg_two_third last">
  			<h1 class="page_title">Get in touch!</h1>
		  <p>
  				<span class="dropcap">C</span>ome and be a part of Infotsav 10.0 ... Get in groove and let Infotsav '10 take your thinking and knowledge to new heights.
  			</p>
  			<h1 class="page_title">Web Team</h1>
  			<table width="200" border="0">
  <tr>
    <td width="50%"><p>
  				<span class="dropcap">A</span>nurag Agrawal<br>[+91-94257-87381]<br>anurag.agrawal[at]infotsav[dot]org<br>
</p></td>
    <td width="50%"><p>
  				<span class="dropcap">S</span>anjay Kumar<br>
  				[+91-90396-83778]<br>sanjay.kumar[at]infotsav[dot]org<br>
</p></td>
  </tr>
</table>

  			
  		</div> 
  		<!-- bg_two_third -->
  		
  		<div class="bg_two_third last">
  			<div id="errors"> <!-- To display the errors form -->
  				<div id="success" class="download_box">Thank you! for your feedback.</div>
  			</div> <!-- errors -->
			<h1>Send Your Feedback</h1>
  			<form action="web_mail.php"  method="post" id="contact_form" class="form_validate">
  			<input type="hidden" value="contact.html" name="redirect" />
  				<ul>
  					<li class="two_col">
  						<label>Name*</label>
  						<input class="single_input" name="name" type="text" required="required" />
  					</li>
  					<li class="two_col">
  						<label>E-mail*</label>
  						<input class="single_input" name="email" type="email" required="required" />
  					</li>
  					
  					
  					<li class="two_col">
  						<label>Telephone</label>
  						<input class="single_input" name="telephone" type="text" />
  					</li>
  					<li class="two_col">
  						<label>Institute</label>
  						<input class="single_input" name="company" type="text" />
  					</li>
  					
  					
  					<li class="one_col">
  						<label>Message</label>
  						<textarea name="message" id="message_form" cols="30" rows="10" required="required"></textarea>
  					</li>
  					<li class="one_col"><input type="submit" class="submit_form"  value="submit"/></li>
  				</ul>
  			</form>
  		</div> <!-- bg_two_third -->
  		  		  		
		<?php include"footer.php";?> <!-- footer -->
		
	</div> <!-- container -->
<script type="text/javascript"> Cufon.now(); </script>
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/contact.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:40:31 GMT -->
</html>