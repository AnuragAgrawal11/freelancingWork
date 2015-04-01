<!DOCTYPE html>
<html class=no-js lang=en>
<head>

<title>FastAid</title>
<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
<script src="./js/modernizr-custom.js.pagespeed.ce.wQqCL3_MxW.js"></script>
<link rel=stylesheet href="./css/app.css.pagespeed.ce.F6ho1oc7ii.css">

<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="stylesheets/jquery.validate.css" />
       
        <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>

 <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#ValidField").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
                jQuery("#ValidNumber").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
                jQuery("#ValidInteger").validate({
                    expression: "if (VAL.match(/^[0-9]*$/) && VAL) return true; else return false;",
                    message: "Please enter a valid integer"
                });
                jQuery("#ValidDate").validate({
                    expression: "if (!isValidDate(parseInt(VAL.split('-')[2]), parseInt(VAL.split('-')[0]), parseInt(VAL.split('-')[1]))) return false; else return true;",
                    message: "Please enter a valid Date"
                });
                jQuery("#ValidEmail").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
                jQuery("#ValidPassword").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
                jQuery("#ValidConfirmPassword").validate({
                    expression: "if ((VAL == jQuery('#ValidPassword').val()) && VAL) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
                jQuery("#ValidSelection").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
                });
                jQuery("#ValidMultiSelection").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please make a selection"
                });
                jQuery("#ValidRadio").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please select a radio button"
                });
                jQuery("#ValidCheckbox").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please check atleast one checkbox"
                });
				jQuery('.AdvancedForm').validated(function(){
					//alert("Use this call to make AJAX submissions.");
					
					diseaseName = document.forms["searchForm"]["disease"].value;
					var url = 'results.php?disease='+diseaseName;
	window.location = url;
				});
            });
            /* ]]> */
        </script>

</head>
<body>
<div id=page>
<!-- Golbal Header -->

<!-- Logo -->

<p align="center"><a href="index.php"><img src="img/logo.png"></a>


<!-- /Logo -->
<!-- Golbal Nav -->

<div id="loading-image" style="display:none;margin-top:10%" align="center"> <img src="images/292.gif" alt="Loading..."  /> </div>
<!-- /Golbal Nav -->
<div style="margin-top:10%;" id="form">
<form name="searchForm" action="" method="post" class="AdvancedForm">
<div style="width:42%;float:left;margin-left:25%;">
<input type="text" name="disease" value="" placeholder="Enter disease name here"  style="background-image: url('img/backsearch.png');min-height:110px;min-width:100%;background-color:transparent;padding-left:30px;font:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:#999;font-style:strong;font-size:36px;padding-right:20px;border:none;outline:none;" autocomplete="off" id="ValidField" /> 
</div>
<div style="width:31.5%;float:right;">
<input type="image" name="Submit" value="Submit" src="img/search_button.png"   width="105px" style="padding-top:0.8%;" >
</div>
</form>
</div>
</p>


<div class=container style="margin-top:30%">

<hr>
<section class=info>
<br>


<dl style="text-align:center">
<dd class="phone">
About | How to use | Terms & Conditions | Privacy & Policies | Disclaimer
</dd>
<br>
<dd class=address>Designed and Maintained By PumpkinPot IT Solution Pvt. Ltd. in the assocaition with TIIIC ABV-IIITM, Gwalior</dd>
</dl>

</section>



</div>

</div>

</body>
</html>
