<html>
	<head>
	<!--Title-->
	<!--Menu stuff-->
	<!--insert scripts here to load header and footer-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
		<!--<script src="splash_animation.js"></script>	-->
		<script type="text/javascript"></script>
		<script type="text/javascript" src="js/form_validation.js"></script>
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
				<form id="contact" class="contact-form col-xs-8" action="server_side_validation.php" method="post">
					<h2> Contact Me </h2>
					<!--Name-->
				    <div class="section">
				        <label for="name">Name:</label>
				        <input type="text" id="name" name="name" />
						<span class="error">This field is required</span>
				    </div>
				    <br>
				    <!--Email-->
				    <div class="section">
				    	<label for="mail">E-mail:</label>
				        <input type="email" id="mail" name="mail" />
				        <span class="error">A valid email address is required</span>	
				    </div>
				    <br>
				    <!--Subject-->
				    <div class="section">
				    	<label for="subject">Subject:</label>
				        <input type="text" id="subject" name="subject" />
				    </div>
				    <br>
				    <!--Message-->
				    <div class="section">
				        <label for="msg">Message:</label>
				        <textarea id="msg" name="msg"></textarea>
				        <span class="error">This field is required</span>	
				    </div>
				    <br>
				    <div class="button" id="submit">
				        <button type="submit">submit.</button>
				    </div>
				</form>
				<div class="col-xs-4">
					<p> Hello! </p><br>
					<p> Here's a description about how you can contact me for jobs and stuff, yo</p>

				</div>
			</div>
		</div>

		<!--Content-->
		

		<!-- on hover will change elements, off hover is described in the second function-->
		<!--change this later to use css instead of js-->


		<script>
		$(document).ready(function(){
			$('.body-container').fadeIn();
		});
		</script>

		<script>
		$(document).ready(function(){
 			if (Cookies.get('currentState') == 'entered'){
           		$('.body-container').css("display", "");
           		$('header').css("display", "");
           		$('#li1').css("display","") ;
           		$('#li2').css("display","") ;
           		$('#li3').css("display","") ;
           		$('#li4').css("display","") ;
           		$('#splash').css("display", "none");
       		}
		});
		</script>
	</body>
</html>