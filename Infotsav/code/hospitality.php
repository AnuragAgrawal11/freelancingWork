<?php 
include "header.php"; 
?>
  		  		
  		<div class="full_page">
  			<h1 class="page_title">We look forward to have a great time with you...</h1>
  			<p> <span class="dropcap2">W</span>e would like to inform you that the hospitality team will be there to help all participants of Infotsav round the clock.<br />
            <br />
          As soon as you reach Gwalior by any mode of conveyance, you can make a call to our hospitality   volunteer for any help. If the no.of participants are more than 10 from a single college then  infotsav arranges conveyance for them. As you reach the campus, our volunteers will guide you to  the help desk and a registration fee has to be paid at the counter. There on he/she'll be guided by   infotsav volunteer to his/her room in one of our hostels.</p>
		  <strong>
		  <h1>
		  <span class="dropcap">H</span>ospitality Details</h1>
		  </strong>
<p><strong>Accommodation and Food</strong></p>
          <ul>
            <li>1. There  will be various food options/stalls.</li><br />
            <li>2. Apart  from food stalls, mess facility can be availed on the payment basis. Mess will  provide morning breakfast, lunch and dinner on the given rates.</li><br />
            <li>3. Mess  coupon rates: (per person) </li><br />
            <li>4. Rs 60 per day (includes all three  meals)</li><br />
          </ul>
          <p><strong>Or</strong></p>
          <ul>
            <li>1. Rs 25 for per meal (includes only  one meal - breakfast/lunch/dinner)</li><br />
            <li>2. Accommodation  facility is available on payment basis. Any one registering for Infotsav or  workshops can avail this facility. Student will get </li><br />
            <li>3. 1 mattress</li><br />
            <li>4. 1 pillow (with cover)</li><br />
            <li>5. 2 bed sheets</li><br />
            <li>6. Buckets, mugs will be available in  the bathrooms. All other things required should be brought by your own.</li><br />
            <li>7. Charges  for accommodation (per person):</li><br />
            <li>8. Rs 100 (for 3 nights and 3 days -  28 October night to 31 October evening)</li><br />
            <li>9. Rs 30 extra per day</li><br />
            <li>10. Rs 100 caution money (refundable)</li><br />
          </ul>
          <p> <br />
            <strong>Registration Rules (for college students)</strong></p>
          <ul>
            <li>1. Infotsav  registration = Rs. 250 per person</li><br />
            <li>2. It  includes registration for all the events (excluding Gamiacs), seminars and  exhibitions of Infotsav. Every person registering for Infotsav will get:</li><br />
            <li>3. 1 Stationery kit</li><br />
            <li>4. 1 Exclusive Infotsav magazine</li><br />
            
            <li>5.Participation certificate of  Infotsav 2010</li><br />
            <li>6.Separate  registration for workshops.</li><br />
            <li>7.AutoNex workshop – Rs. 1100 (per  participant)</li><br />
            <li>8.3D Animation and Multimedia  Workshop – Rs. 600 (per participant)</li><br />
            <li>9.Ethical Hacking Workshop – Rs. 1100  (per participant)</li><br />
            <li>10.Sat-Botricks – Rs. 1350 (per  participant)</li><br />
            <li>11.Mobi-Tronix – Rs. 1300 (per  participant)</li><br />
            <li>12.Registration  for workshops includes participation only in that particular workshop. To  participate in an event, registration for Infotsav is required, though he/she  can attend the seminars and exhibitions without any extra registration.</li><br />
          </ul>
          <p><strong>Registration Rules (for school students and teachers)</strong></p>
          <ul>
            <li>1. Registration  fee (for 3 days) = Rs. 50 per student/teacher</li><br />
            <li>2. Every  person registering can participate in Science quiz, visit the exhibitions,  attend the seminars and participate in informal events.</li><br />
            <li>3. Only  registered students can participate in Roboticks Junior and Animation workshop,  after submitting the registration fee for the respective workshop.</li><br />
            <ul>
              <li>1. 3D Animation and Multimedia  Workshop – Rs. 600 (per participant)</li><br />
              <li>2. Roboticks Junior – Rs. 400 (per  participant) – only for school students</li><br />
            </ul>
            <li>To  participate in Science Project Exhibition cum Competition, registration fee =  Rs. 150 per group (maximum 3 students and 1 teacher). Infotsav 2010  participation certificate will be given to every student participating in  Science Project exhibition. This registration will also include: free  accommodation and food facility for 3 days.</li><br />
          </ul>
          <p><strong>Gamiacs</strong></p>
          <ul>
            <li>1. Any  student (school or college) can participate in Gamiacs.</li><br />
            <li>2. To  participate in Gamiacs, students have to submit separate fee. This fee is  neither included in Infotsav registration nor in Workshop registration.</li><br />
            <li>3. Gamicas  registration fee (separate) – </li><br />
            <li>4. Rs. 30 per participant for <strong>Need for Speed – Most Wanted</strong></li><br />
            <li>5. Rs. 30 per participant for <strong>FIFA 09</strong></li><br />
            <li>6. Rs. 30 per participant (Rs. 150 per  Clan) for <strong>Counter Strike 1.6</strong></li><br />
          </ul>
		  <center>
		  <?php
		  
		  
		  if(isset($_SESSION['uid']))
		  {
		  	echo '<h2><font color="#FF0000"><blink><a href="accomodation.php" >Click Here</a></blink></font> to Enter your Accomodation Details...!!!</h2>' ;
		  }
		  else
		  {
		  	echo '<h2> Please <font color="#FF0000"><blink><a href="LoginPage.php" class="bumpbox">Login first</a></blink></font> ....to enter your accomodation details.</h2>' ;
		  }
		  
		  ?>
		  </center>
		 
		  
          <p><strong>For more details, please contact for Hospitality  Managers:</strong><br />
           <table width="100%" border="1"> <br />
  <tr>
    <td width="25%">Mr. Manak Wadhwa</td>
    <td width="25%">+91-9589127957</td>
    <td width="25%">Mr. Shalabh Garg</td>
    <td width="25">+91-9039185717</td>
  </tr>
  <tr>
    <td width="25%">Mr. Anshul Tripathi</td>
    <td width="25%">+91-8109173820</td>
     <td width="25%">Mr. Anurag Agrawal</td>
    <td width="25%">+91-9425787381</td>
  </tr>
 
  <tr>
    <td width="25%">Mr. Sachin Tolay</td>
    <td width="25%">+91-7879338675</td>
  <td width="25%">&nbsp;</td>
    <td width="25%">&nbsp;</td></tr>
</table>
</p>
          <p><br />
            <br />
            For any other Queries mail to:<a href="mailto:hospitality@infotsav.org">hospitality@infotsav.org</a></p>
    
  			
  		
  		
  			
  		</div> <!-- full_page -->
  		  		  		<div class="full_page">
                        <img src="images/footer.png" />
                        </div>
		<?php include"footer.php";?> <!-- footer -->
		
	</div> <!-- container -->
</body>

</html>
