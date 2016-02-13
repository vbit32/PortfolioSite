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
		<script src="/js/edit_menu_style.js"></script>
		<script src="/js/page_fade_in.js"></script>	
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
			<h2 class="page-title"> ABOUT </h2>
			<div class="row about">
				<div class="col-xs-4">
					<img class= "img-holder" src="/images/me.jpg">
				</div>
				<div class="col-xs-8">
					<p><b>My name is Valerie Bay</b>, I am a self-taught artist/illustrator & front-end developer living in South Florida. 
							Throughout all my life living here, I've come to recognize two definitve qualities about myself; One, I don't like the beach. And two,
							art is truly in the eye of the beholder. <br><br> I've always had an affinity for both the calculated and free-spirited aspects of life. My main
							goal that I've set out to achieve is to demonstrate and inspire the belief in others that technology and art are synchronous and one in the same. <br><br>
							Coding is not strictly for mundane minds, and art is not just a menial act; Art is what you make of the ideas that you hold within, no matter how you choose to express them. Whether your medium is oil pastels or JavaScript,
							I aim to show other developers and artists alike that there is no boundary in creativity when it comes to developing the final product, and that the combination of the artistic spirit with the logical mind 
							is an eclectic force like no other. 
							<br><br>
							I'm also an avid vinyl collector and coffee lover :)
							<br><br><br>
							Have an idea to share? <a href="contact.php"><b>Let me know!</b></a>
					</p>
				</div>
			</div>
		</div>

		<footer>
			<?php include("footer.php"); ?>
		</footer>
		<!--Content-->
		<!-- on hover will change elements, off hover is described in the second function-->
		<!--change this later to use css instead of js-->
	
	</body>
</html>