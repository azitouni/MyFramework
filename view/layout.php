<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>My Framework + Calculatrice</title>

	<!-- Bootstrap Core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Theme CSS -->
	<link href="assets/css/creative.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		.navbar-inner {
				border-radius: 0 0 0 0;
		}
		#calculator-wrapper {
			font-size: 42px;
		}
		#calculator-wrapper .uneditable-input, #calculator-equal {
			height: 42px;
			font-size: 42px;
			line-height: 35px;
			width: 100%;
		}
		#calculator-wrapper .span1 {
			height: 42px;
			font-size: 42px;
		}
		#calculator-wrapper .span1 .visible-phone {
			line-height: 25px;
		}
		#calculator-wrapper .span1 .hidden-phone {
			line-height: 42px;
		}
		.btn {
			width: 80px;
			height: 80px;
			margin: 0 5px 5px 0;
			line-height: 70px;
			font-weight: bold;
			font-size: 40px;
		}
		.bg-primary{
			color: black;
		}
		.my-color{
			min-height: 20px;
			padding: 19px;
			margin-bottom: 20px;
			background-color: #f5f5f5;
			border: 1px solid #e3e3e3;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
		}
		.full-height{
			height: 100%;
				padding: 50px 0;
		}
		h1{
			color:white;
			margin: 30px 0 80px;
			font-weight: bold;
		}
	</style>
</head>

<body>

	<h2>Welcome to ministream! I am a headline above the content :)</h2>
	<?php
		// $_CONTENT is a template var. It's filled when using layouts with a rendered view.
		echo $_CONTENT;
	?>

	<!-- jQuery -->
	<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/calculator.js"></script>
</body>
</html>
