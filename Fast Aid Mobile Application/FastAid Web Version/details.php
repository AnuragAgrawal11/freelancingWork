<?php
ini_set( "display_errors", 0);
include'connect.php';
?>
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
      



<script>

function showLoading()
{	jQuery('#results').hide();
	jQuery('#loading-image').show();
	
	hideLoading();
}

function hideLoading()
{
	setTimeout(function()
	{	jQuery('#results').show();
		jQuery('#loading-image').hide();
	}, 3000);

}

</script>

<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<body onLoad="showLoading()">
<div id=page>
<!-- Golbal Header -->

<!-- Logo -->

<p align="center">
<table width="200" border="0" align="center" style="margin-left:17%">
  <tr>
    <td><a href="index.php"><a href="index.php"><img src="img/logo.png"></a></a></td>
    <td><img src="images/cardiogram_line.gif" width="113" height="114"></td>
  </tr>
</table>



<!-- /Logo -->
<!-- Golbal Nav -->

<div id="loading-image" style="display:none;margin-top:10%" align="center"> <img src="images/292.gif" alt="Loading..."  /> </div>
<!-- /Golbal Nav -->
<div style="margin-top:2%;overflow-y: scroll; height:400px" id="results" align="center">
<table id="hor-minimalist-b" summary="Employee Pay Sheet" style="width:80%;overflow:scroll" >              
            	
                  <?php 
				  $query = "SELECT * FROM allopathic WHERE id='".$_GET['did']."'";
				  $result = mysql_query($query);
				  //echo $query.'<br>'.$result;
				  while($table = mysql_fetch_array($result))
		{
		?>
                
				
              <tr>
              <td colspan="2" class="ns-shadow">
             <font size="+2"><img src="images/bullet_blue.png"> <?php echo $table[1] ; ?> </font>
              </td>
              </tr>
                	<tr style="margin-top:1%">
                    <td class="contact"><font size="+1">Description</font></td>
                    <td class="contact"><font size="+1">Medicine's Salts</font></td>
                    </tr>
                   
                    <td style="text-align:justify;vertical-align:top" width="60%"> <?php echo $table[2] ; ?></td>
                    <td style="width:40%;border:none">
                    <table style="width:100%;border:none">
  <tr>
    <?php if($table[3]!==''){ ?><td><img src="images/bullet_red.png"><?php echo $table[3] ; ?></td><?php } ?>
   <?php if($table[4]!==''){ ?> <td><img src="images/bullet_red.png"><?php echo $table[4] ; ?></td><?php } ?>
  </tr>
  <tr>
    <?php if($table[5]!==''){ ?><td><img src="images/bullet_red.png"><?php echo $table[5] ; ?></td><?php } ?>
    <?php if($table[6]!==''){ ?><td><img src="images/bullet_red.png"><?php echo $table[6] ; ?></td><?php } ?>
  </tr>
  <tr>
   <?php if($table[7]!==''){ ?> <td><img src="images/bullet_red.png"><?php echo $table[7] ; ?></td><?php } ?>
    <?php if($table[8]!==''){ ?><td><img src="images/bullet_red.png"><?php echo $table[8] ; ?></td><?php } ?>
  </tr>
  <tr>
   <?php if($table[9]!==''){ ?> <td><img src="images/bullet_red.png"><?php echo $table[9] ; ?></td><?php } ?>
   <?php if($table[10]!==''){ ?> <td><img src="images/bullet_red.png"><?php echo $table[10] ; ?></td><?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

                    </td>
                    
                    
                    <?php
}
echo $pagination;
?>
		</tbody>
        </table>		
</div>
</p>


<div class=container style="margin-top:0%">

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
