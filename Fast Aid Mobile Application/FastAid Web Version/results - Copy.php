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
    <td><a href="index.php"><img src="img/logo.png"></a></td>
    <td><img src="images/cardiogram_line.gif" width="113" height="114"></td>
  </tr>
</table>



<!-- /Logo -->
<!-- Golbal Nav -->

<div id="loading-image" style="display:none;margin-top:8%" align="center"> <img src="images/292.gif" alt="Loading..."  /> </div>
<!-- /Golbal Nav -->
<div style="margin-top:1%;overflow-y: scroll; height:400px" id="results" align="center">

                  <?php 
				  $query = "SELECT * FROM allopathic WHERE disease LIKE '%".$_GET['disease']."%'";
				  $result = mysql_query($query);
				 $num_rows = mysql_num_rows($result);
				if($num_rows!=0){ 
				  ?> 
				  <table id="hor-minimalist-b" summary="Employee Pay Sheet" style="width:60%;overflow:scroll" >              
            	<thead>
                	<tr height="60px">
                    <th scope="col"></th>
                    	<th scope="col"><strong>Disease Name</strong></th>
                        <th scope="col"><strong>Read More</strong></th>
                      
                     
                    </tr>
                </thead>
                
                  <tbody>
				  
				  <?php
				  while($table = mysql_fetch_array($result))
		{ 
		?>
                
				


              
                	<tr>
                    <td align="left"><img src="images/bullet_blue.png"></td>
                     	<td align="left"><b><?php echo $table[1] ; ?></b></td>
                       
                 
                   <td align="center"><a href="details.php?did=<?php echo $table[0];?>"><img src="images/read-more-button.png"></a></td>
                  
                     
                       
                    </tr>
                    
                    
                    <?php
}
				}
				else { ?>
                <table id="hor-minimalist-b" summary="Employee Pay Sheet" style="width:60%;overflow:scroll" >              
            	
                
                  <tbody>
		<tr >
        <td colspan="3" align="center" style="text-align:center"><font color="#FF0000" size="+3">Sorry No results are found</font></td>
        </tr>
        <tr>
        <td colspan="3" align="center" style="text-align:center"><font color="#0099FF" size="+3"><a href="index.php" style="text-decoration:none">&lArr; Go Back</a></font></td>
        </tr></tbody></table>
                <?php }
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
