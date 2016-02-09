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
		<link rel="stylesheet" type="text/css" href="sass/main.css">
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
		<!--<div id="header" style="display:none"></div>-->
	</head>

	<body>
		<h1 class="title">
			<a id="title1" href="index.php">
				<img src="images/logo.png">
			</a>
		</h1>
		<header>
			<?php include("header.php"); ?>
		</header>
		<div class="body-container">
			<h2 class="page-title"> ARTWORK </h2>
			<div class="row gallery">
				<div class="col-xs-3 thumbnail">
					<img src="images/artwork/2.png" class="portrait" alt="Image">
					<p><a href="view.php#picture2"> VIEW </a></p>
				</div>

				<div class="col-xs-3 thumbnail">
					<img src="images/artwork/3.png" class="portrait" alt="Image">
					<p><a href="view.php#picture3"> VIEW </a></p>
				</div>

				<div class="col-xs-3 thumbnail">
					<img src="images/artwork/4.png">
					<p><a href="view.php#picture4"> VIEW </a></p>
				</div>

				<div class="col-xs-3 thumbnail">
					<img src="images/artwork/1.png" class="portrait" alt="Image">
					<p><a href="view.php#picture1"> VIEW </a></p>
				</div>

				<div class="col-xs-3 thumbnail">
					<img src="images/artwork/5.png" class="portrait" alt="Image">
					<p><a href="view.php#picture5"> VIEW </a></p>
				</div>

				<div class="col-xs-3 thumbnail">
					<img src="images/artwork/6.png" class="portrait" alt="Image">
					<p><a href="view.php#picture6"> VIEW </a></p>
				</div>

				<div class="col-xs-3 thumbnail">
					<img src="images/artwork/7.png" class="portrait" alt="Image">
					<p><a href="view.php#picture7"> VIEW </a></p>
				</div>
			</div>
		</div>
			
		<footer>
			<?php include("footer.php"); ?>
		</footer>

	</body>
</html>