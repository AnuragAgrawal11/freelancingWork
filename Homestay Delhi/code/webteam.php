<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="SHORTCUT ICON" href="images/logo2
.png"/>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MyBusiness - Home</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	
	
    <style type="text/css">
<!--
.style1 {
	color: #FF9900;
	font-weight: bold;
}
.style2 {color: #FF9900}
.style3 {
	color: #CC6600;
	font-weight: bold;
	font-size: medium;
}
.style4 {font-size: small}
-->
    </style>
</head>
<body>
	<div id="header">
    	<a href="#"><img src="images/logo.png" title="Affiliate Promo logo" id="logo" alt="Logo" /></a>
        <ul id="navBar">
        	<li class="current"><a href="index.php">Home</a></li>
            <li><a href="news.php">News & Events</a></li>
			<li><a href="ViewProfiles.php">Search Homestay</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="faq.php">FAQ</a></li>
			<li><a href="cont.php">Contact us</a></li>            
        </ul>
    </div>
    <div id="welcomeMessage">
    	
    </div>
    <div id="wrapper">
    	<div id="secWrapper">
        	<div id="container" class="clearfix">
        	  <div id="mainCol" class="clearfix">
            	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="644" height="194">
                    <param name="movie" value="mainhead3.swf" />
                    <param name="quality" value="high" />
                    <embed src="mainhead3.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="644" height="194"></embed>
          	    </object>
               	  
                    <h3 id="why">Web Team Members</h3>
                    <ul id="maincon">
                    <li class="clearfix"><img src="images/ashu.jpg" alt="" width="180" height="147" />
                      <h2>Ashutosh Gautam aka (Ashu)</h2>
                    <p>2nd Year(IT) IIITM-G</font><br/>
					E-Mail :ashutosh.iiitm19@gmail.com<br/>
					Main Armoury :C, PHP<br/>
					Side Armoury :MY SQL, C #<br/>
					Primary Operation :Application Development<br/>
                    </li>
                    <li class="clearfix"><img src="images/anu.jpg" alt="" width="143" height="131" />
                      <h2>Anurag Agrawal aka (Player)</h2>
                    <p>2nd Year(IT) IIITM-G</font><br/>
					E-Mail :agrawal.anu90@gmail.com<br/>
					Main Armoury :JAVA, MY SQL <br/>
					Side Armoury :PHP, C #, Flash <br/>
					Primary Operation :Application Development <br/>
                    </li>
                    <li class="clearfix"><img src="images/nitin.jpg" alt="" width="180" height="135" />
                      <h2>Nitin Deshdeep aka (Pids)</h2>
                    <p>2nd Year(IT) IIITM-G</font><br/>
					E-Mail :lovinsolitude@gmail.com<br/>
					Main Armoury :PHP, C<br/>
					Side Armoury :MY SQL, C # <br/>
					Primary Operation :Designing                    </li>
					
					<li class="clearfix"><img src="images/baba.jpg" alt="" width="180" height="135" />
					  <h2>Sanjay Kumar aka ($yst3m 32)</h2>
                    <p>2nd Year(IT) IIITM-G</font><br/>
					E-Mail :rockingsanjay90@gmail.com<br/>
					Main Armoury :C #, PHP <br/>
					Side Armoury :JAVA, MY SQL, Flash <br/>
					Primary Operation :Application Development <br/>
                    </li>
                    <li class="clearfix last"><span class="style3"><img src="images/ronak.jpg" alt="" width="107" height="89" /></span>
                      <div align="center" class="style3">Very Special Thanx to Mr. Ronak Dhoot<span class="clearfix last style4">for his guidence and kind help in completing this project. </span></div>
                    </li>
					<div align="center" class="style3">Thanx to the <span class="clearfix last style4">Planet Help Soceity</span> for taking such a nice initiative for the welfare of mankind and making us a part of this small step. </div>
                    <li class="clearfix last">
                      <div align="center" class="style3"></div>
                    </li>
                    <li class="clearfix last style4"></li>
                    <li class="clearfix last"></li>
                    <li class="clearfix last"></li>
                    </ul>

              </div>
              <div id="secCol">
              		<fieldset id="login">
					<?php session_start(); 
					
			 if($_SESSION['login']==1)
			  {
			    
			  	if($_SESSION['login']==1)
			  {
			  	echo "<br/>";
				echo "<a href='logout.php'><img src='images/logout.png' border='0'></a>";
				echo "<br/>";
				echo "<a href='MyAccount.php'><img src='images/my Account.png' border='0'></a>";
				echo "<br/>";
				if($_SESSION['level']!="Client")
				echo "<a href='MyAccount2.php'><img src='images/my profile.png' border='0'></a>";
			  }
			  }
			  else
			  {?>
                    	<h4>Members login</h4>
						
               			<form action="chklogin.php" method="post">
						
                        	<p class="clearfix">
							
							<label for="username">Username</label>
                            <input name="username" id="username" type="text" value="" /></p>
                            <p class="clearfix"><label for="password">Password</label>
							<input name="password" id="password" type="password" value="" /></p>
                            <p class="clearfix check"><input type="checkbox" id="remember" name="remember" />
                            <label for="remember" id="remlabel">Remember me</label>
                        <input name="submit" id="submit" type="submit" value="" /></p>
                    	</form>
                        <p class="member">Not a member yet? <a href="signup.php">Register now!</a></p>
                    <?php
					 if($_REQUEST['log']==1)
					  echo "<font color='#FF0000'>Invaild Username or Password...</font>";
					 if($_REQUEST['log']==2)
					  echo "<font color='#FF0000'>Logged Out Successfully...</font>";
					 
					  
			 } ?>
					</fieldset>
					
                    <h3 id="news">News</h3>
                    <ul>
                    	<li class="clearfix">
                        <h4><a href="#">News title goes here</a></h4>
                       
                        <p><marquee direction="up" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()" >>>Delhi-- a window to the kaleidoscope that is India.

 The charm of Delhi has attracted Emperors, Conquerors and poor in equally. It is correctly said that Delhi is a land of 'Dilwalas' or for people with heart. Delhi is an excellent destination to spend your break or holidays. There are many attractions in Delhi that you will not like to miss. So when you are visiting Delhi, make sure you do not leave out the important places to see in Delhi. Delhi will make you fall in love with the place. Right from historical monuments to gardens to museums to religious places, Delhi is a treat for you.

						<br/><br/>>>Rajasthan is a fusion of rich heritage and culture. Whenever we talk of this state, images of mighty forts and palaces, colourful festivities and camel safari on the desert conjure up in our mind to create a wonderful visual or rather virtual tapestry, and a heady feel of a royal aura permeates our being. There are many tourist attractions in Rajasthan which are visited by domestic and inbound tourists year round.
						<br/><br/>>>Udaipur is famous for its placid lakes, mighty palaces and forts, and majestic havelis. Untouched by the Mughal rule, Udaipur stands as an exemplification of Rajputna's architectural excellence at its peak. Its most beautiful lakes like the Fateh Sagar and Lake Pichola are great spots for young lovers to unwind. Some of the important tourist attractions in and around Udaipur are City Palace Museum, Jag Mandir, Eklingji, Kumbhalgarh Fort, Jagmandir Palace, Arsi Vilas, Shilpgram among others.
						<br/><br/>>>Mumbai is well known as the 'pot pourri' of varied cultures. Because of its vivid facets the city is no less than a travelers paradise for you get to see striking contrasts of varied natural beauty, not to forget its people who make the place more friendly for the tourists who come in large numbers all through the year to explore the vast natural beauty of the place. Be it the grand edifice of Gateway of India or the well designed natural parks like the Kamala Nehru Park the city has lot to offer to the visitors.
						<br/><br/>>>Uttar Pradesh is a well known city located in the northern zones of India. The state gives a great opportunity to the tourists to get a glimpse of the vivid traditional, cultural as well as religious heritage of the country. The enchanting cities of the state offer numerous tourist attractions in Uttar Pradesh. 
Agra in Uttar Pradesh is one of the most famous tourist destinations in the world. The city holds the architectural wonder of the world called Taj Mahal. The marvelous sculpture was erected by Shah Jahan in loving memory of his beloved wife Mumtaj Mahal and hence is called as the symbol of Love. The fort of Fatehpur Sikri near Agra and the magnificent tomb of Akbar situated at Sinkandara are worth paying a visit.
<br/><br/> >>Bangalore is known as the city of gardens, but its historic and cultural importance too can't be undermined. There are numerous tourist attractions in and around Bangalore, which makes it one of the famous tourist spots of India that attract visitors from all over the world. 
<br/><br/>>>The royal city of India, Jaipur is famed for its rich cultural heritage, glimpses of which can still be witnessed in and around the place, drawing tourists from all over the world. The Hawa Mahal, which in earlier times was meant to be a window for royal ladies to take a peek at the daily life and processions in the town, is now a major tourist attraction of the place.
<br/><br/>>>There are many places to see in Gujarat, which throws up a surprise at every turn. There are plenty of places to visit in Gujarat such as the Sabarmati Ashram, Lalbhai Dalpatbhai Indology Museum and the Calico Museum of Textiles. These are among the major museums in Gujarat. The various festivals and fairs are among the major Gujarat tourist attractions. Some of them are Modhera Dance Festival, Rann Utsav and International Kite Festival.


 </marquee></p>
                        
                        </li>
                        
                    </ul>
					
                    <h3 id="test">Calender</h3>
                    <ul>
                    <li class="clearfix"><a href="#">
                      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="200" height="220">
                        <param name="movie" value="mycalendar.swf" />
                        <param name="quality" value="high" />
                        <embed src="mycalendar.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="220"></embed>
                      </object>
                    </a>
                    <p align="center">&nbsp;</p>
                    </li>
                  </ul>
              </div>
          </div>
        </div>
    </div>
<div id="footer">
    	<ul>
	        <li><a href="advertise.php">Advertise</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
  	        <li><a href="#">Terms and Conditions</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
			<li><a href="privacy.html">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
 			<li><a href="#">Career</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
  	        <li><a href="#">Collaboration</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
			<li><a href="webteam.php">Web Team</a></li>
        </ul>
		<p>A Planet Global Network :&nbsp&nbsp;<a href="http://planethelpsociety.org/" target="_blank">www.planethelpsoceity.org</a><a href="www.homestay.org">&nbsp;&nbsp;www.myhomestay.in</a> <a href="http://www.wirenetindia.com/" target="_blank">&nbsp;&nbsp;www.wirenetindia.com</a><br/>
		Copyrights &copy; 2010 Planet Help Society, All Rights Reserved</p>
Designed & Maintained By :<span class="style1">IIITM-G Students</span>    </div>
</body>
</html>
