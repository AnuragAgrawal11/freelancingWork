<?
$cat_id=$_GET['cat_id'];
require "connect.php";
$q=mysql_query("select * from m_area where ref_city_id='$cat_id'");
echo mysql_error();
$myarray=array();
$str="";
while($nt=mysql_fetch_array($q)){
$str=$str . "\"$nt[area_name]\"".",";
}
$str=substr($str,0,(strLen($str)-1)); // Removing the last char , from the string
echo "new Array($str)";

?>