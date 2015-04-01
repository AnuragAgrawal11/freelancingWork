<?php session_start(); ?>
<?php
if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/pjpeg")|| ($_FILES["file"]["type"] == "image/png")|| ($_FILES["file"]["type"] == "image/bmp")|| ($_FILES["file"]["type"] == "image/tif")|| ($_FILES["file"]["type"] == "image/psd"))
&& ($_FILES["file"]["size"] < 15000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("uploaded/".$_REQUEST['user_name'].$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	  $t=$_FILES["file"]["type"];
	  $t1=explode("/",$t,2);
	  $type=".".$t1[1];
	  if($type==".jpeg"||$type==".pjpeg")
	    $type=".jpg";
	  //echo "<br><br>".$t1[1]."<br>";
       move_uploaded_file($_FILES["file"]["tmp_name"],"uploaded/".$_REQUEST['user_name'].$type);
	 // $_FILES["file"]["name"]=$_REQUEST['user_name'].$type;
      echo "Stored in: " . "uploaded/".$_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  ?>