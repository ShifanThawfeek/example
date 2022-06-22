<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<% base_tag %>
<head>
	<meta charset="utf-8" />
	
	<!-- Page Title -->
	$MetaTags
	
	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<!-- Google Web Font -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" /> 
	
	<!-- Bootstrap CSS -->
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
	
	<!-- Template CSS -->
	<!--	<link href="css/style.css" rel="stylesheet" /> -->
	
	<!-- Modernizr -->
	<!-- <script src="javascript/common/modernizr.js"></script> -->

</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
		<header id="header">
			<% include TopBar %>
			
			<% include MainNav %>
		</header>
		<!-- END HEADER -->

		$Layout
		<% include Footer %>	
	
	</div>
	<!-- END WRAPPER -->

</body>
</html>