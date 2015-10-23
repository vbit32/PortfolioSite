<html>
	<head>
	<!--Title-->
	<!--Menu stuff-->
	<!--insert scripts here to load header and footer-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
		<!--<script src="splash_animation.js"></script>	-->
		<script type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="sass/base.css">
		<!--<div id="header" style="display:none"></div>-->
		<header>
			<?php include("header.php"); ?>
		</header>
	</head>

	<body>
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