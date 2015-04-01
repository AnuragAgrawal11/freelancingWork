<?php session_start(); ?>
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
-->
    </style>
</head>
<body>
	<div id="header">
    	<a href="#"><img src="images/logo.png" title="Affiliate Promo logo" id="logo" alt="Logo" /></a>
        <ul id="navBar">
        	<li class="current"><a href="index.html">Home</a></li>
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
            	  <h3 id="why">Advertise With Us...</h3>
                    <ul id="maincon">
                   
                    <p><font size="3">Lorem ipsum dolor sit amet,________________ consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip________________________ ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ______________tempor.Lorem ipsum dolor sit amet,________________ consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip________________________ ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ______________tempor.Lorem ipsum dolor sit amet,________________ consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip________________________ ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ______________tempor.Lorem ipsum dolor sit amet,________________ consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip________________________ ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ______________tempor.ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip________________________ ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur aad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip________________________ ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur a</p>
                    <li class="clearfix last"></li>
                    </ul>

              </div>
              <div id="secCol">
              		<fieldset id="login">
					<?php 
					session_start();
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
					
                  <h3 id="news">What's New</h3>
                    <ul>
                    	<li class="clearfix">
                        <h4><a href="#">Latest Information</a></h4>
                        
                        <p><marquee direction="up" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						<br/><br/>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</marquee></p>
                        <a href="news.php" class="more">Read more</a>
                        </li>
                        
                    </ul>
					
					
					<h3 id="news">Advetisement</h3>
                    <ul>
                    	<li class="clearfix">
                        
                        
                        <p>
						Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       
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
		A Planet Global Network :&nbsp&nbsp;<a href="http://planethelpsociety.org/" target="_blank">www.planethelpsoceity.org</a><a href="www.homestay.org">&nbsp;&nbsp;www.homestay.in</a> <a href="http://www.wirenetindia.com/" target="_blank">&nbsp;&nbsp;www.wirenetindia.com</a><br/>
		Copyrights &copy; 2010 Planet Help Society, All Rights Reserved<br/>
		Designed & Maintained By :<span class="style1"><font color="#FFFFFF">IIITM-G Students</font></span>
		
</div>


</body>
</html>
