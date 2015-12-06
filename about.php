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
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
		<!--<div id="header" style="display:none"></div>-->
	</head>

	<body>
		<h1 class="title" ><a id="title1" href="index.php">VBIT32</a></h1>
		<header>
			<?php include("header.php"); ?>
		</header>
		<div class="body-container">
			<div class="row">
				<div class="col-xs-3">
						<p><b> put a picture here </b></p>
				</div>
				<div class="col-xs-9">
						<p><b> put ur big ass description here At vero eos et accusamus et iusto odio dignissimos 
							ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
							quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
							 qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum
							  facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi
							   optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis 
							   voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut 
							   officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
							    non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
							     maiores alias consequatur aut perferendis doloribus asperiores repellat.</b></p>
				</div>
			</div>
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