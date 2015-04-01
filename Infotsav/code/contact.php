<?php 
include "header.php"; 
?>
  		
  		<div id="sidebar">
  			<div class="bg_one_third">
  				<ul id="contact_btn">
  					<li class="page_title">Contact Details</li>
  					<li class="page_title" id="map"><a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=iiitm+gwalior&amp;sll=23.553917,77.744751&amp;sspn=2.885038,5.817261&amp;ie=UTF8&amp;hq=iiitm+gwalior&amp;hnear=&amp;cid=11945795191054203276&amp;ll=26.259937,78.177509&amp;spn=0.02694,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed?iframe=true" rel="prettyPhoto[iframes]">Map</a></li>
  				</ul>
  				<div id="call_us">
  					<h1 class="title">Call Us</h1>
  					<span class="contact_icons"></span>
  					<table>
  						<tbody>
  							<tr>
  								<td>+91-751-2449837</td>
  								<td></td>
  							</tr>
  							<tr>
  								<td><p><a href="#">contact[at]infotsav[dot]org</a><br>
							    </p>
							    <p>(Avialable for Google chat)</p></td>
  								<td></td>
  							</tr>
  							<tr>
  								<td><p>You may chat with us on skpe</p>
							    <p><a href="#">Infotsav[at]skype[dot]com</a></p></td>
  								<td></td>
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
  					
  					<p><a href="http://iiitm.ac.in" target="_blank">http://www.iiitm.ac.in</a></p>
    				</div> <!-- positions -->
   			</div> <!-- bg_one_third -->
  		</div> <!-- sidebar -->
  		
  		<div class="bg_two_third last">
  			<h1 class="page_title">Get in touch!</h1>
		  <p>
  				<span class="dropcap">C</span>ome and be a part of Infotsav 10.0 ... Get in groove and let Infotsav '10 take your thinking and knowledge to new heights.
  			</p>
  			<h1 class="page_title">Faculty Coordinators</h1>
  			<table width="200" border="0">
  <tr>
    <td width="50%"><p>
  				<span class="dropcap">D</span>r. Ajay Kumar<br>[+91-91799-79918]
</p></td>
    <td width="50%"><p>
  				<span class="dropcap">D</span>r. Manoj Kumar Dash<br>
  				[+91-99813-80256]
</p></td>
  </tr>
</table>
<h1 class="page_title">Student Coordinators</h1>
  			<table width="200" border="0">
  <tr>
    <td width="50%"><p>
  				<span class="dropcap">M</span>r. Ronak Dhoot<br>rdhoot[at]infotsav[dot]org<br>
[+91-94065-76092] </p></td>
    <td width="50%"><p>
  				<span class="dropcap">M</span>r. Udit Khandelwal<br>udit[at]infotsav[dot]org<br>

  				[+91-99777-24141]
</p></td>
  </tr>
</table>
<h1 class="page_title">Treasurer</h1>
  			<table width="200" border="0">
  <tr>
    <td width="50%"><p>
  				<span class="dropcap">M</span>r. P Satyanarayana Swaroop<br>
  				p.swaroop[at]infotsav[dot]org<br>
[+91-99779-02722] </p></td>
    <td width="50%"><p>
  				
</p></td>
  </tr>
</table>
  			
  		</div> 
  		<!-- bg_two_third -->
  		
  		<div class="bg_two_third last">
  			<div id="errors"> <!-- To display the errors form -->
  				<div id="success" class="download_box">Thank you! Your request has been send, we'll be get back to you soon.</div>
  			</div> <!-- errors -->
  			<form action="contact_mail.php"  method="post" id="contact_form" class="form_validate">
  			<input type="hidden" value="contact.html" name="redirect" />
  				<ul>
  					<li class="two_col">
  						<label>First name*</label>
  						<input class="single_input" name="fname" type="text" required="required" />
  					</li>
					<li class="two_col">
  						<label>Last name</label>
  						<input class="single_input" name="lname" type="text"  />
  					</li>
  					<li class="two_col">
  						<label>E-mail*</label>
  						<input class="single_input" name="email" type="email" required="required" />
  					</li>
  					
  					
  					<li class="two_col">
  						<label>Mobile Nu.</label>
  						<input class="single_input" name="telephone" type="text" />
  					</li>
  					<li class="one_col">
  						<label>Institute</label>
  						<input class="big_input" name="company" type="text" />
  					</li>
  					
  					<li class="one_col">
  						<label>Subject</label>
  						<input class="big_input" name="subject" type="text" />
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


</html>