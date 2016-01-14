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
		<script src="/js/page_fade_in.js"></script>	
		<link rel="stylesheet" type="text/css" href="sass/base.css">
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
			<h2 class="page-title"> FILLER </h2>
			<div class="row view-art" id="picture1" style="display:none">
				<div class="col-xs-6">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-6">
					<img src="images/artwork/1.png" alt="Image">
				</div>
			</div>

			<div class="row view-art" id="picture2" style="display:none">
				<div class="col-xs-6">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-6">
					<img src="images/artwork/2.png" alt="Image">
				</div>
			</div>

			<div class="row view-art" id="picture3" style="display:none">
				<div class="col-xs-6">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-6">
					<img src="images/artwork/3.png" alt="Image">
				</div>
			</div>

			<div class="row view-art" id="picture4" style="display:none">
				<div class="col-xs-6">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-6">
					<img src="images/artwork/4.png" alt="Image">
				</div>
			</div>

			<div class="row view-art" id="picture5" style="display:none">
				<div class="col-xs-6">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-6">
					<img src="images/artwork/5.png" alt="Image">
				</div>
			</div>

			<div class="row view-art" id="picture6" style="display:none">
				<div class="col-xs-6">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-6">
					<img src="images/artwork/6.png" alt="Image">
				</div>
			</div>

			<div class="row view-art" id="picture7" style="display:none">
				<div class="col-xs-6">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-6">
					<img src="images/artwork/7.png" alt="Image">
				</div>
			</div>
		</div>

		<footer>
			<?php include("footer.php"); ?>
		</footer>

		<script>
		$(document).ready(function(){
		    var hash = window.location.hash.substring(1);
		    console.log(hash) ;
		    console.log('picture' + hash.substring(hash.length-1)) ;
		    var divToShow = '#picture' + hash.substring(hash.length-1) ;
		   /* if (hash == "picture1")
		    {
		    	$('#picture1').hide().fadeIn(500);
		    }*/
		    $(divToShow).hide().fadeIn(500);

		});
		</script>
	</body>
</html>