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
	</head>

	<body>

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
		    $("a").hover(function(){
		        $(this).css("background-color", "pink");
		        $(this).css("border-color", "white");
		        $(this).css("color", "white");
		        }, function(){
		        $(this).css("background-color", "");
		        $(this).css("border-color", "#9B9B9B");
		        $(this).css("color", "#9B9B9B");

		        
		    });
		});
		</script>


		<!--Remaining section-->
		<!--<script> 
		$(function(){
			//references the header id
		  $("#header").load("header.html"); 
		  //$("#footer").load("footer.html"); 
		});
		</script>-->
	</body>
</html>