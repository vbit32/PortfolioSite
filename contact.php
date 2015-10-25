<html>
	<head>
	<!--Title-->
	<!--Menu stuff-->
	<!--insert scripts here to load header and footer-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
		<!--<script src="splash_animation.js"></script>	-->
		<script type="text/javascript"></script>
		<script type="text/javascript" src="js/form_validation.js"></script>
		<link rel="stylesheet" type="text/css" href="sass/base.css">
		<!--<div id="header" style="display:none"></div>-->
		<header>
			<?php include("header.php"); ?>
		</header>
	</head>

	<body>
		<div class="body-container">
			<form id="contact" class="contact-form" action="server_side_validation.php" method="post">
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
		</div>

		<!--Content-->
		

		<!-- on hover will change elements, off hover is described in the second function-->
		<!--change this later to use css instead of js-->


		<script>
		$(document).ready(function(){
			$('.body-container').fadeIn();
		});
		</script>
	</body>
</html>