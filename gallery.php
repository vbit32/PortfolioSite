<html>
	<head>
	<!--Title-->
	<!--Menu stuff-->
	<!--insert scripts here to load header and footer-->
		<script src="/bower_components/jquery/dist/jquery.min.js"></script>	
		<!--<script src="splash_animation.js"></script>	-->
		<script type="text/javascript"></script>
		<script src="/node_modules/js-cookie/src/js.cookie.js"></script>
		<script src="/js/manage_cookies.js"></script>	
		<link rel="stylesheet" type="text/css" href="sass/base.css">
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
		<!--<div id="header" style="display:none"></div>-->
	</head>

	<body>
		<h1 class="title" ><a id="title1" href="index.php">V B I T 3 2</a></h1>
		<header>
			<?php include("header.php"); ?>
		</header>
		<div class="body-container">
			<div class="row">
				<div class="col-xs-3 picture-holder">
						
				</div>
				
				<div class="col-xs-3 picture-holder">
						
				</div>

				<div class="col-xs-3 picture-holder">
						
				</div>

				<div class="col-xs-3 picture-holder">
						
				</div>
			</div>
		</div>
		<footer>
			<?php include("footer.php"); ?>
		</footer>
		<!--Content-->
		<!-- on hover will change elements, off hover is described in the second function-->
		<!--change this later to use css instead of js-->
	
		<script>
		$(document).ready(function(){
			console.log("this is for a test");
			$(".body-container").fadeIn();
		});
		</script>
	</body>
</html>