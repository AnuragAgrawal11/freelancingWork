
<!DOCTYPE html>

<html><head runat="server">
<link rel="stylesheet" href="autocomplete.css" type="text/css" media="screen">
<link rel="canonical" href="http://bhooklagiyaar.com" />
    <title>Bhooklagi Yaar</title>
    <link href="Css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link href="JQuery/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="JQuery/reveal.css" rel="stylesheet" type="text/css" />
	<script src="jquery.js" type="text/javascript"></script>
    <script src="dimensions.js" type="text/javascript"></script>
    <script src="autocomplete.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(function(){
            setAutoComplete("searchField", "results", "autocomplete.php?part=");
        });
    </script>
      
            
        
        <script src="JQuery/jquery-ui-1.8.20.js" type="text/javascript"></script>
        
    
     <script>
     function submitForm() { // submits form
        document.getElementById("area_search").submit();
    }
    </script>


</head>
<body background="TemplateImages/nbg.jpg">
  
<div class="main">

<!-----------------------------------------header----------------------------------->
<div class="header">
<div style="width:85px; height:85px; float:left; margin:14px 0 0 30px;"><a href="Index.php"> <img src="TemplateImages/nlogo.png" /></a></div>
<div style="width: auto; height:30px; float: right; margin:5px 30px 0 0px;">
  <table width="auto" border="0" cellspacing="5">
  <tr>
    <td><img src="TemplateImages/ncall.png" /></td>
    <td style=" color:#FFFFFF; font-family:calibri; font-size:14px; font-weight:normal;">Call For Home Dilevery</td>
    <td style=" color:#f76139; font-family:calibri; font-size:14px; font-weight:normal;">08882478959</td>
    <td><a href="#" style=" text-decoration:none; color:#FFFFFF; font-family:calibri; font-size:14px; font-weight:normal;">All Resturants</a></td>
   
  </tr>
  <tr align="right"><td colspan=4 ><div class="popups"><p><a title="Register" href="login.php"><img src="TemplateImages/nlogin-reg-btn.png" width="130" /></a></p> </div></td></tr>
  
</table>

</div>
</div>
<!-----------------------------------------/header----------------------------------->

               
<div id="fb-root"></div>
<script>    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));</script>
<!-----------------------------strip------------------------------------->
<div class="strip">
<table width="auto" border="0" cellspacing="4" style="float:right; margin:1px 30px 0 0;">
    <tr>
      <td style=" color:#f76139; font-family:calibri; font-size:15px; font-weight: 700;"><g:plusone size="Medium" annotation="inline" align="right"></g:plusone></td>
      <td><iframe src="//www.facebook.com/plugins/like.php?href=www.facebook.com/BhookLagiYaar&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px;padding-top:10px; height:21px;" allowTransparency="true"></iframe></td>
      <td><a href="https://twitter.com/bhooklagiyaar" data-show-count="true" data-lang="en" data-size="large"><img src="TemplateImages/ntwitter.png" border="0" /></a>

</td>
    </tr>
  </table>
</div>
<!-----------------------------/strip------------------------------------->
<script type="text/javascript">
    (function () {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
<script>
function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNod</a>e.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

<?php 
session_start();
if($_SESSION['istrue']==1)
{
?>
<h2 style="margin-left:45%"><font color="#CCCCCC">Welcome <?php echo $_REQUEST['user'];?></font></h2>
<?php }
?>



<!--------------------------------------------main-content---------------------->
<div class="main-content">

<!--------------------------------------------content-left---------------------->
  <div class="content-left"><img src="TemplateImages/nrecipie.png" style="margin-top:30px;" /></div> 
<!--------------------------------------------/content-left---------------------->


 <!--------------------------------------------content-right----------------------> 
  <div class="content-right">
  
  <div id="slctAra" class="form-main">
  <div class="h3">Where do you want your food to be delivered?</div>
  <form name="area_search" id="area_search" action="order.php" method="get">
  <table width="auto" border="0" cellspacing="0">
  <tr>
    <td>
    <div class="ui-widget">
	<p id="auto">
    <input id="searchField" autocomplete="off" placeholder="eg. Sector 1, Noida" name="searchField" type="text" value=""  style=" width:330px; height: 44px; border:1px solid #f76139; border-radius:4px; margin:20px 0 0 25px;padding-left:10px; font-family:Arial, Helvetica, sans-serif; font-size:16px;color:#757575; font-weight:600;" onchange='setTimeout("submitForm()", 700)'/>
	</p>
    </div>
    

    </td>
    <input type="hidden" value="Submit" name="Submit" />
    <td><input type="image" name="submit" value="Submit"  src="TemplateImages/ngo-btn.png" border="0" style=" margin:20px 0 0 0 ;" /></td>
  </tr>
</table>

<div style="width:auto; height:auto; margin:20px 0 0 25px;">
<table width="auto" border="0" cellspacing="5">
  <tr>
    <td><input name="" type="checkbox" value=""/></td>
    <td style=" color:#FFFFFF; font-family:calibri; font-size:14px; font-weight:normal;">Find online payment and cash on delivery Restaurants.</td>
  </tr>
</table>
</form>
</div>

</div>
  
  </div>
 <!--------------------------------------------/content-right----------------------> 
  
</div>
<!--------------------------------------------/main-content---------------------->


<!--------------------------------------footer-main---------------------------------->
<div class="footer-main">


<div class="footer-a">
<ul >
    <li class="footerli"><span class="footerspan"><a href="Index.php" style="text-decoration:none; color:#FFFFFF;">Home</a></span></li>
    <li class="footerli"><span class="footerspan"><a href="#" style="text-decoration:none; color:#FFFFFF;">Gallery</a></span></li>
    <li class="footerli"><span class="footerspan"><a href="#" style="text-decoration:none; color:#FFFFFF;">Testimonial</a></span></li>
	<li class="footerli"><span class="footerspan"><a href="#" style="text-decoration:none; color:#FFFFFF;">Recipe</a></span></li>
    <li class="footerli"><span class="footerspan"><a href="#" style="text-decoration:none; color:#FFFFFF;">Contact Us</a></span></li>
</ul>
</div>


<div class="footer-b">
<table width="auto" border="0" cellspacing="4" style=" margin:30px 0 0 0;">
  <tr>
    <td><img src="TemplateImages/ncall.png" /></td>
    <td style=" color:#FFFFFF; font-family:calibri; font-size:14px; font-weight:normal;">Call For Home Dilevery</td>
    <td style=" color:#f76139; font-family:calibri; font-size:14px; font-weight:normal;">08882478959</td>
  </tr>
</table>
<table width="auto" border="0" cellspacing="2" style=" margin:30px 0 0 0;">
  <tr>
    <td style=" color:#FFFFFF; font-family:calibri; font-size:14px; font-weight:normal;">Payment Through:</td>
    <td style=" color:#f76139; font-family:calibri; font-size:14px; font-weight:normal;"><a href="#"><img src="TemplateImages/nUntitled-15.png" border="0" /></a></td>
	    <td style=" color:#f76139; font-family:calibri; font-size:14px; font-weight:normal;"><a href="#"><img src="TemplateImages/npaypal.png" border="0" /></a></td>
		    <td style=" color:#f76139; font-family:calibri; font-size:14px; font-weight:normal;"><a href="#"><img src="TemplateImages/nmaster.png" border="0" /></a></td>
  </tr>
</table>
</div>


<div class="footer-c">
<h4>About BhookLagiYaar</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet libero eget mauris imperdiet at pretium velit feugiat. Donec ante lacus, pretium ut viverra nec, semper ultricies libero. Integer ut elit sed quam accumsan suscipit. <a href="#" style="text-decoration:none; color:#f76139;">readmore</a>
<p>
</div>


<div class="footer-d">
<table align="right" width="auto" border="0"  cellspacing="5" style="margin:0 60px 0 0 ;">
  <tr>
    <td> <a href="#"><img src="TemplateImages/nfb.png" border="0" /></a></td>
    <td> <a href="https://twitter.com/bhooklagiyaar" data-show-count="true" data-lang="en" data-size="large"><img src="TemplateImages/ntwitter.png" border="0" /></a></td>
  </tr>
</table>
<table align="right" style=" margin:10px 40px 0 0;">
  <tr>
    <td><a href="#"><img src="TemplateImages/ntarnsparent-logo.png" width="100" height="100" border="0"/></a></td>
  </tr>
  </table>

</div>


</div>
<!--------------------------------------/footer-main---------------------------------->

</div>
<div id="myModal" class="reveal-modal">
  <a class="close-reveal-modal">&#215;</a>

  <div class="main-form">
  <div style="width:100%; height:6%"></div>
 
  <div style="width:100%; height:90%">
  <div style="width:3%; height:100%; float:left"></div>
  <div style="width:46%; height:100%; float:left">

    <div style="width:100%; height:7%"> 
    <table class="section-heading">
    <tr>
    <td class="first-td"></td>
    <td class="second-td">Already have a account? SIGN IN </td>
    <td class="third-td"></td>
    </tr>
    </table>
    </div>
      <div id="lin" class="login-regis-div">
<table class="login-section-body">
  <tr></tr>
  <tr>
    <td><input class="text-box" data-bind='value: email1'  name="Email" type="text"  onclick="if(this.value=='E-mail Id'){this.value=''}" onblur="if(this.value==''){this.value='E-mail Id'}"/></td>
  </tr>
  <tr>
    <td><input class="text-box" data-bind='value: Password1'  name="Password" type="password" onclick="if(this.value=='Password'){this.value=''}" onblur="if(this.value==''){this.value='Password'}"/></td>
  </tr>
    <tr>
    <td><span id="errormsg" style="color:Red"></span></td>
  </tr>
  <tr align="center">
    <td >
    <div data-bind="click: login"  style="cursor:pointer"><img src="images/login.png" alt="Login"/></div>        
    </td></tr>
  <tr align="center">
    <td><a href="#" style=" text-decoration:underline; font-size:14px; font-family:Calibri; font-weight:normal; color:#f85906;">Forget Password</a>
    </td>
  </tr>
  </table>
      </div>
  </div>
   
  <div style="width:2%; height:100%; float:left"></div>
  
  <div style="width:46%; height:100%; float:left">
   <div style="width:100%; height:7%"> 
    <table class="section-heading">
    <tr>
    <td class="first-td"></td>
    <td class="second-td">Not registered yet? REGISTER HERE</td>
    <td class="third-td"></td>
    </tr>
    </table>
    </div>
       <div id="reg" class="login-regis-div">
<table class="reg-section-body">
<tr>
    <td><input class="text-box" id="txtname" data-bind='value: Username' name="Name" type="text" onclick="if(this.value=='Name'){this.value=''}" onblur="if(this.value==''){this.value='Name'}"/></td>
  </tr>
  <tr>
    <td><input class="text-box" id="txtEmail" data-bind='value: email' name="Emailr" type="text" onclick="if(this.value=='E-mail Id'){this.value=''}" onblur="if(this.value==''){this.value='E-mail Id'}"/></td>
  </tr>
  <tr>
    <td><input  name="Passwordr" id="txtpwd" data-bind='value: Password' class="text-box" type="password"  onclick="if(this.value=='Password'){this.value=''}" onblur="if(this.value==''){this.value='Password'}"/></td>
  </tr>
  <tr>
    <td><input   name="Mobile" id="txtmbl" data-bind='value: mobile' class="text-box" type="text"  onclick="if(this.value=='Mobile Number'){this.value=''}" onblur="if(this.value==''){this.value='Mobile Number'}"/></td>
  </tr>
  <tr>
    <td><textarea id="txtadd" name="Seaping" data-bind='value: Address' style=" height:50px; width:280px; margin:10px 0 0 10px; border:1px solid #f85906; color:#a0a0a0; padding:0 0 0 10px; "   onclick="if(this.value=='Shipping Address'){this.value='Shipping Address'}" onblur="if(this.value==''){this.value='Shipping Address'}" name="" cols="" rows=""></textarea>  </td>
  </tr>
  <tr>
    <td><input  name="Landmark" id="txtlm" data-bind='value: LandMark' class="text-box" type="text"  onclick="if(this.value=='Landmark'){this.value=''}" onblur="if(this.value==''){this.value='Landmark'}"/></td>
  </tr>
  <tr>
    <td><input  name="Pincode" id="txtpc" data-bind='value: PinCode' class="text-box" type="text"  onclick="if(this.value=='Pincode'){this.value=''}" onblur="if(this.value==''){this.value='Pincode'}"/></td>
  </tr>
      <tr>
    <td><span id="regerror" style="color:Red"></span></td>
  </tr>
  <tr>
    <td align="center">
        <div id="btnsave"  style="cursor:pointer" data-bind="click: save"><img src="images/register.png" alt="Register"/></div>      
    </td>
  </tr>
</table>

</div>
  </div>
  <div style="width:3%; height:100%; float:left"></div>
   </div>
  
   <div style="width:100%; height:4%"></div>
  
  
  
  

</div>
  </div>
<script type="text/javascript">
    initsingup();
  </script>

 
   
</body>
</html>
