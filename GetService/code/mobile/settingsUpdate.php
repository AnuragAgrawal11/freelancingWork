<?php
  include 'connect.php';
  //$accepted_time = date('d-m-Y H:i:s');
  //echo $accepted_time;
	  if ($_GET['notification']=='on'){
	  $_GET['notification']=1;
	  }
	  else
	  $_GET['notification']=0;
	  
	  if ($_GET['alarm']=='on'){
	  $_GET['alarm']=1;
	  }
	  else
	  $_GET['alarm']=0;
	  
	  if ($_GET['battery_saver']=='on'){
	  $_GET['battery_saver']=1;
	  }
	  else
	  $_GET['battery_saver']=0;
	  //echo $_GET['notification'].'<br>'.$_GET['alarm'].'<br>'.$_GET['battery_saver'];
  $query1 = "UPDATE settings SET user_id='".$_GET['provider_id']."',lead_notification='".$_GET['notification']."',tune='".$_GET['tune']."',appointment_alarms='".$_GET['alarm']."',battery_saver_mode='".$_GET['battery_saver']."',volume='".$_GET['volume']."' WHERE user_id='".$_GET['provider_id']."'";
  $exe1=mysql_query($query1);
  //echo $exe1;
  
	  //echo 'updated';
	  if($exe1 ==1){
	  echo "{success:true}";
	  }
	  else 
	  echo "{success:false}";
  
  ?>