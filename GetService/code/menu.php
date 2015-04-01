<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Framework - Page</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.1.0.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css"/>

	<script src="js/jquery.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="js/jquery.mobile-1.1.0.js"></script>
      <script>
    if (navigator.userAgent.indexOf("Android") != -1)
{
    $("a").attr("data-transition", "none");
}
    </script>
<style>
  
  </style>
</head>
<body>

	
	
	<div data-role="page" id="page-success" data-dom-cache="true"><!-- page-->
		<div data-role="header" data-theme="a">
			<h1>Page</h1>
		</div><!-- /header -->

		<div data-role="content" data-theme="d">
			
			
			<a href="index.php" data-role="button" data-transition="slide" ><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">slide</span></span></a>  
		</div>
		
		<!-- /footer -->
	</div>
</body>
</html>
