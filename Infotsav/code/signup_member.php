<?php session_start(); ?>
<?php include "connect.php"; ?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pro Studio - web design, free web template</title>
<meta name="keywords" content="Pro Studio, black and white edition, web design, free web template" />
<meta name="description" content="Pro Studio - black and white edition, free web template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-style: italic;
}
.style2 {font-size: 16px}
.style3 {font-size: 14px}
.style4 {font-size: 14px; font-weight: bold; }
-->
</style>
<script type="text/javascript">
function showrow(optvalue){
if(optvalue=="Member")
{
document.getElementById('row1').style.display="";
document.getElementById('row1').style.visiblity="visible";
document.getElementById('row2').style.display="none";
document.getElementById('row3').style.display="none";
document.getElementById('row4').style.display="none";
document.getElementById('row5').style.display="none";
}
else if(optvalue=="Student")
{
document.getElementById('row2').style.display="";
document.getElementById('row2').style.visiblity="visible";
document.getElementById('row1').style.display="none";
document.getElementById('row3').style.display="none";
document.getElementById('row4').style.display="none";
document.getElementById('row5').style.display="none";
}
}
</script>
</head>
<body>
<!--  Free Web Templates @ www.TemplateMo.com  -->
<div id="templatemo_header_wrapper">
    <div id="templatemo_header">
    	<div id="logo">
        	BRAIN OF INDIA
            <span>BOI Olympiad</span>
        </div>
      <div id="search_section"></div> 
        
        <div class="cleaner"></div>
    </div> <!-- end of header -->

</div> <!-- end of header wrapper -->

<div id="templatemo_menu_wrapper">

    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php" class="current"><span></span>Home</a></li>
            <li><a href="olympiad.php"><span></span>BOI Olympiad</a></li>
            <li><a href="Center.php"><span></span>Centers</a></li>
            <li><a href="courses.php"><span></span>Courses</a></li>            
            <li><a href="exam.php"><span></span>Exams</a></li>
            <li><a href="#"><span></span>Apply Online</a></li>
			<li><a href="student_corner.php"><span></span>Students Corner</a></li>
			<li><a href="program.php"><span></span>Our Programs</a></li>
			<li><a href="#"><span></span>Contact Us</a></li>
        </ul>   
	</div> <!-- end of menu -->

</div> <!-- end of menu wrapper -->

<div id="templatemo_content_wrapper">

	<div id="templatemo_content">
    
    	<div class="section_w440 fl margin_right_20">
        
        	<div class="post">
            	
                <div class="header_01">Registration Form </div>
                <p class="style2"></p>
              <div class="post_info"><?php 
					
			 if($_SESSION['login']==1)
			  {
			    
			  	if($_SESSION['login']==1)
			  {
			  	echo "<br/>";
				echo "<a href='logout.php'><input type='submit' name='Submit' value='Logout'></a>";
				
			  }
			  }
			  else
			  {?><?php include "register1.php"; ?> <?php
					 if($_REQUEST['log']==1)
					  echo "<font color='#FF0000'>Invaild Username or Password...</font>";
					 if($_REQUEST['log']==2)
					  echo "<font color='#FF0000'>Logged Out Successfully...</font>";
					 
					  
			 } ?></div>
            </div>
            
            </div>
    	<!-- end of post column -->
        
        <div class="section_w450 fl">
        
            <div class="section_w260 fl margin_right_10">
                
                <div class="header_02"><span></span>Latest News</div> 
                
                <div class="margin_bottom_20"></div><div class="margin_bottom_20"></div><font size="3"><marquee direction="up" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()" >News would be uploaded soon....</marquee></font>
                
                <div class="margin_bottom_20"></div>
               	   
                
            </div> <!-- end of news section -->
            
            <div class="section_w180 fl">
                
                <div class="header_02"><span></span>Login</div>
                
                <ul class="web_links_list">
                	 <form method="post" action="chklogin.php">
                    <table width="100%" border="0" cellpadding="0" cellspacing="10"  align="center">
					<tr>
                	  <td><input name="user_name" value="username" type="text" onfocus="clearText(this)" onblur="clearText(this)" class="textfield"/></td>
					  </tr>
					  <tr>
                     <td><input name="user_pass" value="password" type="password" onfocus="clearText(this)" onblur="clearText(this)" class="textfield"/></td>
					 </tr>
					 <tr>
					 <td>
                	 <input type="submit" name="submit" value="login" />
					 <br />
					 <br />
					 <a href="signup_member.php" class="style1"><blink>Members register here</blink></a>
				<br /><br />
					 <a href="signup_student.php" class="style1"><blink>Students register here</blink></a>			 </td>
					 </tr>
					 </table>
               	</form>
                </ul>
                
               
                
            </div>
            
            <div class="margin_bottom_20"></div>
            
            <div class="header_02"><span></span>Online Chatting</div>
            <div id="cboxdiv" style="text-align: center; line-height: 0">
<div><iframe frameborder="0" width="400" height="305" src="http://www6.cbox.ws/box/?boxid=540798&amp;boxtag=a2ewmf&amp;sec=main" marginheight="2" marginwidth="2" scrolling="auto" allowtransparency="yes" name="cboxmain" style="border:#DBE2ED 1px solid;" id="cboxmain"></iframe></div>
<div><iframe frameborder="0" width="400" height="75" src="http://www6.cbox.ws/box/?boxid=540798&amp;boxtag=a2ewmf&amp;sec=form" marginheight="2" marginwidth="2" scrolling="no" allowtransparency="yes" name="cboxform" style="border:#DBE2ED 1px solid;border-top:0px" id="cboxform"></iframe></div>
</div>
            
            <div class="margin_bottom_20"></div>
				
			 <div class="section_w450_content"></div>
            
             <div class="section_w450_content">
			  <p>&nbsp;</p>
            </div>            
      </div> <!-- end of right column -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of content -->
 
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer"> 
    	Copyright © Brain Of India.org</a> | Designed by IIIT-G Student</a>
    </div> <!-- end of footer -->
</div> <!-- end of footer wrapper -->
<!--  Free CSS Templates @ TemplateMo.com  -->
</body>
</html>