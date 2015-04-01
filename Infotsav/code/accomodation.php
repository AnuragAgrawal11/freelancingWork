<?php 
include "header.php"; 
include "connect.php"; 
?>
<style type="text/css">
<!--
@import url("source/style.css");
-->
    </style>
	<script type="text/javascript">
function showrow(optvalue){
if(optvalue=="train")
{
document.getElementById('row1').style.display="";
document.getElementById('row1').style.visiblity="visible";
document.getElementById('row2').style.display="none";
document.getElementById('row3').style.display="none";
document.getElementById('row4').style.display="none";
document.getElementById('row5').style.display="none";
document.getElementById('row6').style.display="none";
document.getElementById('row7').style.display="none";
}

else if(optvalue=="bus")
{
document.getElementById('row2').style.display="";
document.getElementById('row2').style.visiblity="visible";
document.getElementById('row7').style.display="none";
document.getElementById('row3').style.display="none";
document.getElementById('row1').style.display="none";
document.getElementById('row5').style.display="none";
document.getElementById('row4').style.display="none";
document.getElementById('row6').style.display="none";
}


}
</script>

<script type="text/javascript" src="js/datepicker.js"></script>
 <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
// <![CDATA[     

// A quick test of the setGlobalVars method - remember, the "lang" attribute will NOT work when passed to this method
datePickerController.setGlobalVars({"split":["-dd","-mm"]});

/* 
        The following function dynamically calculates Easter Monday's date.
        It is used as the "redraw" callback function for the second last calendar on the page
        and returns an empty object.
   
        It dynamically calculates Easter Monday for the year in question and uses
        the "adddisabledDates" method of the datePickercontroller Object to
        disable the date in question.
   
        NOTE: This function is not needed, it is only present to show you how you
        might use this callback function to disable dates dynamically!   
*/            
function disableEasterMonday(argObj) { 
        // Dynamically calculate Easter Monday - I've forgotten where this code 
        // was originally found and I don't even know if it returns a valid
        // result so don't use it in a prod environment...
        var y = argObj.yyyy,
            a=y%4,
            b=y%7,
            c=y%19,
            d=(19*c+15)%30,
            e=(2*a+4*b-d+34)%7,
            m=Math.floor((d+e+114)/31),
            g=(d+e+114)%31+1,            
            yyyymmdd = y + "0" + m + String(g < 10 ? "0" + g : g);         
        
        datePickerController.addDisabledDates(argObj.id, yyyymmdd); 
        
        // The redraw callback expects an Object as a return value
        // so we just give it an empty Object... 
        return {};
};

/* 

        The following functions updates a span with an "English-ised" version of the
        currently selected date for the last datePicker on the page. 
   
        NOTE: These functions are not needed, they are only present to show you how you
        might use callback functions to use the selected date in other ways!
   
*/
function createSpanElement(argObj) {
        // Make sure the span doesn't exist already
        if(document.getElementById("EnglishDate-" + argObj.id)) return;

        // create the span node dynamically...
        var spn = document.createElement('span');
            p   = document.getElementById(argObj.id).parentNode;
            
        spn.id = "EnglishDate-" + argObj.id;
        p.parentNode.appendChild(spn);
        
        // Remove the bottom margin on the input's wrapper paragraph
        p.style.marginBottom = "0";
        
        // Add a whitespace character to the span
        spn.appendChild(document.createTextNode(String.fromCharCode(160)));
};

function showEnglishDate(argObj) {
        // Grab the span & get a more English-ised version of the selected date
        var spn = document.getElementById("EnglishDate-" + argObj.id),
            formattedDate = datePickerController.printFormattedDate(argObj.date, "l-cc-sp-d-S-sp-F-sp-Y", false);
        
        // Make sure the span exists before attempting to use it!
        if(!spn) {
                createSpanElement(argObj); 
                spn = document.getElementById("EnglishDate-" + argObj.id);
        };
        
        // Note: The 3rd argument to printFormattedDate is a Boolean value that 
        // instructs the script to use the imported locale (true) or not (false)
        // when creating the dates. In this case, I'm not using the imported locale
        // as I've used the "S" format mask, which returns the English ordinal
        // suffix for a date e.g. "st", "nd", "rd" or "th" and using an
        // imported locale would look strange if an English suffix was included
        
        // Remove the current contents of the span
        while(spn.firstChild) spn.removeChild(spn.firstChild);
        
        // Add a new text node containing our formatted date
        spn.appendChild(document.createTextNode(formattedDate));
};

      
/* 
 
        Create a datepicker using Javascript and not classNames
        -------------------------------------------------------
      
        datePickerController.createDatePicker has to be called onload as we need 
        the locale file to have loaded before we can create a datepicker.
      
        The only way to get around using an onload event is to 
        explicitly set the language by adding it before the datepicker script e.g:
      
        <script type="text/javascript" src="/the/path/to/the/language/file.js"></ script>
        <script type="text/javascript" src="/the/path/to/the/datepicker/file.js"></ script>
     
*/
            
datePickerController.addEvent(window, "load", function() {
      var opts = {
        // The ID of the associated form element
        id:"dp-js1",
        // The date format to use
        format:"d-sl-m-sl-Y",
        // Days to highlight (starts on Monday)
        highlightDays:[0,0,0,0,0,1,1],
        // Days of the week to disable (starts on Monday)
        disabledDays:[0,0,0,0,0,0,0],
        // Dates to disable (YYYYMMDD format, "*" wildcards excepted)
        disabledDates:{
                "20090601":"20090612", // Range of dates
                "20090622":"1",        // Single date
                "****1225":"1"         // Wildcard example 
                },
        // Date to always enable
        enabledDates:{},
        // Don't fade in the datepicker
        // NOTE: Only relevant if "staticPos" is set to false
        noFadeEffect:false,
        // Is it inline or popup
        staticPos:false,
        // Do we hide the associated form element on create
        hideInput:false,
        // Do we hide the today button
        noToday:true,
        // Do we show weeks along the left hand side
        showWeeks:true,
        // Is it drag disabled
        // NOTE: Only relevant if "staticPos" is set to false
        dragDisabled:true,
        // Positioned the datepicker within a wrapper div of your choice (requires the ID of the wrapper element)
        // NOTE: Only relevant if "staticPos" is set to true
        positioned:"",
        // Do we fill the entire grid with dates
        fillGrid:true,
        // Do we constrain dates not within the current month so that they cannot be selected
        constrainSelection:true,
        // Callback Object
        callbacks:{"create":[createSpanElement], "dateselect":[showEnglishDate]},
        // Do we create the button within a wrapper element of your choice (requires the ID of the wrapper element)
        // NOTE: Only relevant if staticPos is set to false
        buttonWrapper:"",
        // Do we start the cursor on a specific date (YYYYMMDD format string)
        cursorDate:""      
      };
      datePickerController.createDatePicker(opts);
});

// ]]>
</script>

	
  		
  		<div id="sidebar">
  			 <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Easy Links</h1>
  				<ul class="links">
  					<li><a href="index.php">Home</a></li>
  					
  					<li><a href="about_iiitm.php">About IIITM</a></li>
  					<li><a href="sitemap.php">Site Map</a></li>
  					
  					<li><a href="contact.php">Contact</a></li>
  				</ul>
  			</div> <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Quickform</h1>
				<div id="errors"> <!-- To display the errors form -->
  				
  			</div>
			<?php 
			if($_GET['thanq']==1)
			{
			?>
			<h3>Thank You for your mail...we will get back to you soon.</h3>
			<h4>Team Infotsav</h4>
			<?php 
			
			}
			else
			{
			?>
  				<form action="quick_mail.php" class="quickform" method="post">
  					<ul>
					<input type="hidden" value="lectures.php" name="page">
  						<li><label>Name:</label><input class="single_input" type="text"  name="name"/></li>
  						<li><label>E-mail:</label><input class="single_input" type="text" name="email" /></li>
  						<li><label>Message:</label><textarea name="message" class="message" cols="30" rows="10"></textarea></li>
  						<li><input type="submit" class="submit_form" name="Submit" value="Submit" /></li>
  					</ul>
  				</form>
				<?php } ?>
  			</div> <!-- bg_one_third -->
  		</div> <!-- sidebar -->
  		
  		
		
		<div class="bg_two_third last">
  		 
  		  
		  <?php 
		  
		  if($_POST['Submit'])
		  {
		  
		  	
		  
		  	
		  	$query="insert into accomodation (uid , name ,username , email ,mobile , institute ,place ,members , male_members ,female_members ,travel_mode , arrival_date ,arrival_time , message , pnr ,train_name ) values ('".mysql_real_escape_string(stripslashes($_SESSION['uid']))."' , '".mysql_real_escape_string(stripslashes($_POST['name']))."' , '".mysql_real_escape_string(stripslashes($_SESSION['user']))."' , '".mysql_real_escape_string(stripslashes($_POST['email']))."' ,'".mysql_real_escape_string(stripslashes($_POST['mobile']))."' ,'".mysql_real_escape_string(stripslashes($_POST['institute']))."' ,'".mysql_real_escape_string(stripslashes($_POST['place']))."' ,'".mysql_real_escape_string(stripslashes($_POST['members']))."' ,'".mysql_real_escape_string(stripslashes($_POST['male_members']))."', '".mysql_real_escape_string(stripslashes($_POST['female_members']))."', '".mysql_real_escape_string(stripslashes($_POST['travel_mode']))."', '".mysql_real_escape_string(stripslashes($_POST['arrival_date']))."' , '".mysql_real_escape_string(stripslashes($_POST['arrival_time']))."' , '".mysql_real_escape_string(stripslashes($_POST['message']))."' , '".mysql_real_escape_string(stripslashes($_POST['pnr']))."', '".mysql_real_escape_string(stripslashes($_POST['train_name']))."')";
			
			$result =mysql_query($query) ;
			echo '<script language="javascript">window.location="hospitality.php";</script>';
			
			
			// to send mail
			
			$to = "hospitality@infotsav.org" ;
			$subject = "Hospitality Infotsav 2010";
			$name = $_POST['name'] ;
			$email = $_POST['email'] ;
			$mobile = $_POST['mobile'] ;
			$institute = $_POST['institute'] ;
			$place = $_POST['place'] ;
			$members = $_POST['members'] ;
			$male_members = $_POST['male_members'] ;
			$female_members = $_POST['female_members'] ;
			$travel_mode = $_POST['travel_mode'] ;
			$arrival_date = $_POST['arrival_date'] ;
			$message = $_POST['message'] ;
			$pnr = $_POST['pnr'] ;
			$train_name = $_POST['train_name'] ;
			
			
			
			$message="Name :$name  \n E-Mail : $email \n Mobile :$mobile \n  Institute :$institute \n Place : $place\n Members :$members \n Male :$male_members \n Female :$female_members \n  Travel Mode : $travel_mode \n Arrival Date : $arrival_date\n PNR Number (If train ):  $pnr\n Train Name : $train_name\n
			Message :$message" ;
			$headers = "From: $email";
			
			$sent = mail($to, $subject, $message, $headers) ;
			
				 
		  }
		  
		  else
		  {
		  
		  
		  ?>
		  
		  
		  
		  
  		   <ul id="sitemap">
		   
		   
		   <?php 
		    
			$query_user = "select * from users where id = '".$_SESSION['uid']."'" ;
			$result_user = mysql_query($query_user ) ;
			$row = mysql_fetch_array($result_user ) ; 
		   
		   
		   ?>
		   
		   
  		      <h2>Enter Your Details :</h2>
			  <form action="" method="post" name="theform" id="theform">
				  <table width="100%" border="0" cellpadding="0" align="left">
					<tr >
					  <td width="21%" nowrap="nowrap" ><div align="right">Name :&nbsp;</div></td>
					  <td width="79%" nowrap="nowrap"><input type="text" name="name" class="jsrequired" value="<?php echo $row['name'] ; ?>" size="40" />
					</tr>
					<tr >
					  <td nowrap="nowrap" ><div align="right">Email :&nbsp;</div></td>
					  <td nowrap="nowrap"><input type="text" name="email" class="jsrequired" value="<?php echo $row['email'] ; ?>" size="40"/></td>
					  </tr>
					<tr >
					  <td nowrap="nowrap" ><div align="right">Contact No. :&nbsp;</div></td>
					  <td nowrap="nowrap"><input type="text" name="mobile" class="jsrequired" />			 
					  </td>
					</tr>
					<tr>
					<tr >
					  <td nowrap="nowrap" ><div align="right">Institute :&nbsp;</div></td>
					  <td nowrap="nowrap"><input type="text" name="institute" class="jsrequired" size="40" value="<?php echo $row['institute'] ; ?>"/>
					  </td>
					</tr>
					<tr >
					  <td nowrap="nowrap" ><div align="right">Place :&nbsp;</div></td>
					  <td nowrap="nowrap"><input type="text" name="place" class="jsrequired" size="40"/>
					  </td>
					</tr>
					<tr>
					  <td nowrap="nowrap"><div align="right">No. Of Members:&nbsp;</div></td>
					  <td nowrap="nowrap"><select name="members">
						<option selected="selected" value=""> (Select) </option>
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
						<option value="11"> 11 </option>
						<option value="12"> 12 </option>
						<option value="13"> 13 </option>
						<option value="14"> 14 </option>
						<option value="15"> 15 </option>
					  </select>
					  </td>
					</tr>
					<tr>
					  <td nowrap="nowrap"><div align="right">Male Members: &nbsp;</div></td>
					  <td nowrap="nowrap"><select name="male_members">
						<option selected="selected" value=""> (Select) </option>
						<option value="0"> 0 </option>
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
					  </select>&nbsp;&nbsp;&nbsp;&nbsp;Female Members :<select name="female_members">
						<option selected="selected" value=""> (Select) </option>
						<option value="0"> 0 </option>
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
					  </select>
					  </td>
					</tr>
					<tr>
					  <td nowrap="nowrap"><div align="right">Travel Mode :&nbsp;</div></td>
					  <td nowrap="nowrap"><input type="radio" name="travel_mode" value="bus"  onclick="showrow(this.value);" />
						Bus&nbsp;&nbsp;&nbsp;
						<input type="radio" name="travel_mode" value="train"  onclick="showrow(this.value);"/>
						Train <span id="row1" style="display:none">
					  &nbsp;&nbsp;PNR Number:&nbsp;<input type="text" name="pnr" class="jsrequired"/>
					  &nbsp;&nbsp;Train Name:&nbsp;<input type="text" name="train_name" class="jsrequired"/>
            		</span></td>
					</tr>
					<tr>
					  <td nowrap="nowrap"><div align="right">Arrival Date :&nbsp;</div></td>
					  <td nowrap="nowrap"><input type="text" name="arrival_date" class="w16em dateformat-d-sl-m-sl-Y"/>&nbsp;&nbsp;&nbsp;&nbsp;Time : <input type="text" name="arrival_time" class="jsrequired"/>
					  </td>
					</tr>
				<tr>
				  <td valign="top" nowrap="nowrap"><div align="right">Message :&nbsp;</div></td>
				  <td nowrap="nowrap"><textarea name="message" cols="40" rows="5" id="cmts">Any Message for Hospitality Team Infotsav 2010</textarea>
				  </td>
				</tr>
					
					<tr>
					  <td nowrap="nowrap">&nbsp;</td>
					  <td nowrap="nowrap"><div align="left">
						<input type="submit" name="Submit" value="Submit" />
						&nbsp;&nbsp;&nbsp;
						<input type="reset" name="RESET" value="Reset" />
					  </div></td>
					</tr>
			  </table>
			</form>
	<?php } ?>     
    
	 </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>