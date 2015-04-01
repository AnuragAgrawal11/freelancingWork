<div id="demoskin_left">
<?php 
if(!isset($_SESSION['user']))
{
	echo '<a href="LoginPage.php" title="Login to Infotsav" class="bumpbox">Login</a>';
}
else
{
	echo '<a href="MyInfotsav.php" title="My Infotsav">My Infotsav</a>';
}
?>
</div>