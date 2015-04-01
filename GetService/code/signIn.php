<!DOCTYPE HTML>
<html>
  <head>
    <title>PhoneGap</title>
  <script type="text/javascript" charset="utf-8" src="cordova-1.7.0.js"></script>    
   <script type="text/javascript" charset="utf-8" src="SOTCAnimator.js"></script>      
<script>
function slideExample2(elementId, headerElement)
{
   var element = document.getElementById(elementId);
   
   if(element.style.width != "0px")
   {
      animate(elementId, 25, 50, 0, 400, 250, null);
      element.up = true;
      element.down = false;
      headerElement.innerHTML = '<img src="images/menuopen.png">';
   }
   else
   {
      animate(elementId, 25, 50, 270, 400, 250, null);
      element.down = true;
      element.up = false;
      headerElement.innerHTML = '';
   }
}
 function hide(){
	
	 animate("examplePanel2", 0, 50, 0, 400, 250, null);
      //element.up = true;
     // element.down = false;
      document.getElementById("exampleHeader2").innerHTML = '<img src="images/menuopen.png">';
	 }
</script>
  	
	<link rel="stylesheet"  href="jquery.mobile-1.0.1.min.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<script src="jquery.js"></script>
	<script src="experiments/themeswitcher/jquery.mobile.themeswitcher.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="jquery.mobile-1.0.1.min.js"></script>

  </head>
  <body background="images/bg.png"> 
  
  	<div data-role="page" class="type-interior" data-theme="c" >

		<div data-role="header" data-theme="c">
			<h1>Get Service</h1>
		
	</div><!-- /header -->

		<!--/content-primary -->		
<div id="logo" style="background:url(images/bg.png); background-repeat:no-repeat;min-height:266px;min-width:310px;" >
<div style="position:relative;width:90%;height:90%;top:0px;left:0px;">
  <div id="exampleHeader2" style="position:absolute;width:92px;height:68px;top:30px;left:0px;      text-align:center;color:#FFFFFF;z-index:1000;" onclick="slideExample2('examplePanel2', this);">
   <img src="images/menuopen.png">
  </div>
  
  <div id="examplePanel2" style="position:absolute; width:0px;height:90%;top:30px; left:40px;  overflow:hidden;z-index:1">
    
    <div >
  <ul data-role="listview" data-inset="true" data-theme="b" style="line-height:40px;" id="menu">
    
   
			<li data-inline="true"><a href="index.php" class="ui-corner-top" style="background-color:#00b0f0; padding-left:30px;" data-inline="true">SEARCH</a></li>
			<li><a href="signIn.php"  style="background-color:#00b0f0;" >SIGN IN</a></li>
			<li><a href="index.html"  style="background-color:#00b0f0;">REGISTER YOUR BUSINESS</a></li><li><a href="index.html"  style="background-color:#00b0f0;">HOW IT WORKS</a></li>
            <li><a href="index.html"  style="background-color:#00b0f0;">F.A.Q.</a></li>
            <li><a href="index.html" class="ui-corner-bottom"  style="background-color:#00b0f0;">F.A.Q.</a></li>
		</ul>
        </div>
        <div style="z-index:100;top: 0px;position: absolute;"><img src="images/menuclose.png" style="margin-left:167px;" onClick="hide()" data-inline="true"></div>
  </div>
</div>
	<div data-role="content" style="margin-right:1%;">
    <form action="1.html" method=""  style="margin-top:90%;width:100%;" name="theform">
   <div data-role="fieldcontain" class="ui-hide-label" >
	
	<input type="text" name="service" id="service-c" value="" placeholder="Service" class="ui-shadow-inset ui-btn-corner-all ui-btn-shadow" style="width:92%" />
</div>

    <div data-role="field-contain">
                <input type="text" name="postcode" id="postcode" value="" data-inline="true" class=" ui-corner-left " style="z-index:1;display:inline;width:85%" placeholder="Location"/><img src="images/search.png" data-inline="true" style="margin-bottom:-4.4%; margin-left:-3%;z-index:1000">
            </div>

     </form>
</div>
					

			</div><!-- /content -->

		
			</div><!-- /page -->
<div id="signIn">
<div data-role="page" class="type-interior" data-theme="c" >

		<div data-role="header" data-theme="c">
			<h1>Get Service</h1>
		
	</div><!-- /header -->

		<!--/content-primary -->		
<div id="logo" style="background:url(images/bg.png); background-repeat:no-repeat;min-height:266px;min-width:310px;" >
<div style="position:relative;width:90%;height:90%;top:0px;left:0px;">
  <div id="exampleHeader2" style="position:absolute;width:92px;height:68px;top:30px;left:0px;      text-align:center;color:#FFFFFF;z-index:1000;" onclick="slideExample2('examplePanel2', this);">
   <img src="images/menuopen.png">
  </div>
  
  <div id="examplePanel2" style="position:absolute; width:0px;height:90%;top:30px; left:40px;  overflow:hidden;z-index:1">
    
    <div >
  <ul data-role="listview" data-inset="true" data-theme="b" style="line-height:40px;" id="menu">
    
   
			<li data-inline="true"><a href="index.php" class="ui-corner-top" style="background-color:#00b0f0; padding-left:30px;" data-inline="true">SEARCH</a></li>
			<li><a href="signIn.php"  style="background-color:#00b0f0;" >SIGN IN</a></li>
			<li><a href="index.html"  style="background-color:#00b0f0;">REGISTER YOUR BUSINESS</a></li><li><a href="index.html"  style="background-color:#00b0f0;">HOW IT WORKS</a></li>
            <li><a href="index.html"  style="background-color:#00b0f0;">F.A.Q.</a></li>
            <li><a href="index.html" class="ui-corner-bottom"  style="background-color:#00b0f0;">F.A.Q.</a></li>
		</ul>
        </div>
        <div style="z-index:100;top: 0px;position: absolute;"><img src="images/menuclose.png" style="margin-left:167px;" onClick="hide()" data-inline="true"></div>
  </div>
</div>
	<div data-role="content" style="margin-right:1%;">
    <form action="1.html" method=""  style="margin-top:90%;width:100%;" name="theform">
   <div data-role="fieldcontain" class="ui-hide-label" >
	
	<input type="text" name="service" id="service-c" value="" placeholder="Service" class="ui-shadow-inset ui-btn-corner-all ui-btn-shadow" style="width:92%" />
</div>

    <div data-role="field-contain">
                <input type="text" name="postcode" id="postcode" value="" data-inline="true" class=" ui-corner-left " style="z-index:1;display:inline;width:85%" placeholder="Location"/><img src="images/search.png" data-inline="true" style="margin-bottom:-4.4%; margin-left:-3%;z-index:1000">
            </div>

     </form>
</div>
					

			</div><!-- /content -->

		
			</div>
</div>

			</body>
</html>