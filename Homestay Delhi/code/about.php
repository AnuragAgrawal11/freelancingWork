<?php session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
.style4 {color: #33394d; font-weight: bold; }
-->
    </style>
</head>
<body>
	<div id="header">
   	  <a href="#"><img src="images/logo.png" title="Affiliate Promo logo" id="logo" alt="Logo" /></a>
        <ul id="navBar">
        	<li ><a href="index.php">Home</a></li>
            <li><a href="news.php">News & Events</a></li>
			<li><a href="ViewProfiles.php">Search Homestay</a></li>
            <li class="current"><a href="about.php">About us</a></li>
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
            	  <h3 id="why"><b>About Us...</b></h3>
                    <ul id="maincon">
                   
                    <p><font size="3">Homestay.in is an initiative taken by The <u>PLANET HELP SOCIETY</u>, which is a registered voluntary organization with diversified interests in the service of the society.<br /><br /> Homestay is a form of tourism and or study abroad program that allows the visitor to rent a room from a local family to better learn the local lifestyle as well as improve their language ability.<br /><br />Home Stay, that provides visitors to India with carefully selected bed and breakfast accommodation  in India.Special  care is taken in carefully inspecting accommodation,and to help you decide on  that something special. We select very special accommodations to offer a real  Indian experience.<br /><br />So come  with us to the history and culture of this majestic place. Come walk through  the streets of historic India,or let us  assist you plan special itineraries. Your hosts will be happy to share Indian  hospitality and local knowledge . Whether you travel for pleasure, medical or business reasons we can  provide you with a choice of comfortable accommodation to make your stay more  enjoyable. (For families with children, we offer kid-friendly, family-friendly  affordable accommodations.)<br/><br/><br/><br/><br/></font></p>
                    <li class="clearfix last"></li>
                    </ul>

              </div>
              <div id="secCol">
              		<fieldset id="login">
					<?php 
					session_start();
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
			  else
			  {?>
                    	<h4>Members login</h4>
               			
						
               			<form action="chklogin.php" method="post">
                        	<p class="clearfix"><label for="username">Username</label>
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
					
					
					
					
                    <h3 id="test">Chat with Online House Owners</h3>
                  <ul>
                    <li class="clearfix">
					<!-- BEGIN CBOX - www.cbox.ws - v001 -->
<div id="cboxdiv" style="text-align: center; line-height: 0">
<div><iframe frameborder="0" width="260" height="270" src="http://www7.cbox.ws/box/?boxid=247473&amp;boxtag=5xsz5l&amp;sec=main" marginheight="2" marginwidth="2" scrolling="auto" allowtransparency="yes" name="cboxmain" style="border:#DBE2ED 1px solid;" id="cboxmain"></iframe></div>
<div><iframe frameborder="0" width="260" height="75" src="http://www7.cbox.ws/box/?boxid=247473&amp;boxtag=5xsz5l&amp;sec=form" marginheight="2" marginwidth="2" scrolling="no" allowtransparency="yes" name="cboxform" style="border:#DBE2ED 1px solid;border-top:0px" id="cboxform"></iframe></div>
</div>
<!-- END CBOX -->
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
		<br/>
		A Planet Global Network :&nbsp&nbsp;<a href="http://planethelpsociety.org/" target="_blank">www.planethelpsoceity.org</a><a href="www.homestay.org">&nbsp;&nbsp;www.myhomestay.in</a> <a href="http://www.wirenetindia.com/" target="_blank">&nbsp;&nbsp;www.wirenetindia.com</a><br/>
		Copyrights &copy; 2010 Planet Help Society, All Rights Reserved<br/>
		Designed & Maintained By :<span class="style1"><font color="#FFFFFF">IIITM-G Students</font></span>
		
</div>


</body>
</html>
