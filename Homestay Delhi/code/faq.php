<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="staticlogo.js">


</script>


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
-->
    </style>
</head>
<body>
	<div id="header">
    	<a href="#"><img src="images/logo.png" title="Affiliate Promo logo" id="logo" alt="Logo" /></a>
        <ul id="navBar">
        	<li><a href="index.php">Home</a></li>
            
            <li><a href="news.php">News & Events</a></li>
			<li><a href="ViewProfiles.php">Search Homestay</a></li>
            <li><a href="about.php">About us</a></li>
            <li class="current"><a href="faq.php">FAQ</a></li>
			<li><a href="cont.php">Contact us</a></li>            
        </ul>
    </div>
    <div id="welcomeMessage">
    	
    </div>
    <div id="wrapper">
    	<div id="secWrapper">
        	<div id="container" class="clearfix">
            	<div id="mainCol" class="clearfix">
				<img src="images/FAQ.jpg" width="644" height="190">
            	  <h3 id="why">Frequently Asked Questions</h3>
                    <ul id="maincon">
                    
                    <p align="left"> <font size="2">
					
					<font color="#FF9900">Q What is a Homestay ? </font><br/>
					
					Homestay is where you stay with the family, as a member of the household.<br/><br/>


<font color="#FF9900">Q Who are my hosts?</font><br/>

Most often they are families who stay at the house, but they can be caretakers or other employees. But they all 
are small family owned places or guest houses. <br/><br/>


<span class="style2">Q Are all these listings homestays?</span><br/>
No, some are guest houses, eco lodges, camps and very special places different from the normal places that one 
stays on a holiday.<br/><br/>

<span class="style2">Q What kind of food is served at these places?</span><br/>
Food is by and large ethnic food. Most of the vegetables and fruits come from the small gardens surrounding these lodgings, ensuring healthy noursishing food.<br/><br/>

<span class="style2">Q What about the bath and toilets?</span><br/>
All places have en suite Western style toilets. The bath has running hot water and showers.<br/><br/>

<span class="style2">Q What about Laundry?</span><br/>
You can get your clothes washed and pressed at all these places if you are staying on for more than a day.<br/>
<br/>

<span class="style2">Q Do I get to use the internet?</span><br/>
Most places except remote areas, particularly Forest and Wilderness accommodation, do have telephones and internet connection, but still 'dial up' & slow.<br/><br/>

<span class="style2">Q What about TV's and DVD etc..?</span><br/>

TV's and DVD etc.. are not ususally available at many of these places.</font></p>


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
                    <h3 id="test">Calender</h3>
                  <ul>
                    <li class="clearfix">
                    <p align="center"><a href="advertise.php">
                      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="200" height="220">
                        <param name="movie" value="mycalendar.swf" />
                        <param name="quality" value="high" />
                        <embed src="mycalendar.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="220"></embed>
                      </object>
                    </a></p>
                    </li>
                  </ul>
              </div>
            </div>
        </div>
    </div>
<div id="footer">
    	<ul>
	        <li><a href="advertise.php">
            Advertise</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
  	        <li><a href="#">Terms and Conditions</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
			<li><a href="privacy.html">Privacy Policy</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
 			<li><a href="#">Career</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
  	        <li><a href="#">Collaboration</a>&nbsp;&nbsp;-&nbsp;&nbsp;</li>
			<li><a href="webteam.php">Web Team</a></li>
        </ul>
		<p>A Planet Global Network :&nbsp&nbsp;<a href="http://planethelpsociety.org/" target="_blank">www.planethelpsoceity.org</a><a href="www.homestay.org">&nbsp;&nbsp;www.myhomestay.in</a> <a href="http://www.wirenetindia.com/" target="_blank">&nbsp;&nbsp;www.wirenetindia.com</a><br/>
		Copyrights &copy; 2010 Planet Help Society, All Rights Reserved</p>
Designed & Maintained By :<span class="style1">IIITM-G Students</span>    </div>
</body>
</html>
