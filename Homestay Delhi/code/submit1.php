
<?php 
session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { 
     alert  '<strong>Incorrect verification code.</strong><br>'; 
} else { 
     // add form data processing code here 
     echo  '<strong>Verification successful.</strong><br>'; 
}; 
?>