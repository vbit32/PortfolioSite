<html>
	<head>
	<!--Title-->
	<!--Menu stuff-->
	<!--insert scripts here to load header and footer-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
		<!--<script src="splash_animation.js"></script>	-->
		<script type="text/javascript"></script>
		<script src="/node_modules/js-cookie/src/js.cookie.js"></script>
		<script src="/js/manage_cookies.js"></script>	
		<link rel="stylesheet" type="text/css" href="sass/base.css">
		<!--<div id="header" style="display:none"></div>-->
	</head>

	<body>
		<h1 class="title" ><a id="title1" href="index.php">VBIT32</a></h1>
		<header>
			<?php include("header.php"); ?>
		</header>
		<div class="body-container">
				<p> lol this is for a test commit alright </p>
				<p> lol this is for a test commit alright </p>
				<p> lol this is for a test commit alright </p>

		
		</div>

		<!--Content-->
		<!-- on hover will change elements, off hover is described in the second function-->
		<!--change this later to use css instead of js-->
	
		<script>
		$(document).ready(function(){
			console.log("this is for a test");
			$(".body-container").fadeIn("slow");
		});
		</script>
	</body>
</html>