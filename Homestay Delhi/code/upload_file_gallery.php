<?php session_start(); ?>
<?php
include("connect.php");
session_start();
?>

<?php
//session_start();
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
		$dirname='uploaded/'.$_SESSION['user'];
		$file_count=-1;
		if(!is_dir($dirname))
		{
			mkdir('uploaded/'.$_SESSION['user']);
			$file_count=1;
		}
		else
		{
			$dh=opendir('uploaded/'.$_SESSION['user']);
			while($f=readdir($dh)!==false)
			{
				$file_count++;
			}
		}
	 //echo "<br><br>".$t1[1]."<br>";
       move_uploaded_file($_FILES["file"]["tmp_name"],"uploaded/".$_SESSION['user']."/".$file_count.$type);
	 // $_FILES["file"]["name"]=$_REQUEST['user_name'].$type;
      //echo "Stored as: " . "uploaded/".$_SESSION['user']."/".$file_count.$type;
	  header("Location:gallery.php");
      }
    }
  }
else
  {
  //echo "Invalid file";
  header("Location:gallery.php");
  }
 $sql = "INSERT INTO images VALUES ('".$file_count.$type."', '".$_SESSION['user']."')";
 $rs=mysql_query($sql);
 ?>
  