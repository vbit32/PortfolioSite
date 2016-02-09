<html>
	<head>
	<!--Title-->
	<!--Menu stuff-->
	<!--insert scripts here to load header and footer-->
		<script src="/bower_components/jquery/dist/jquery.min.js"></script>		
		<!--<script src="splash_animation.js"></script>	-->
		<script type="text/javascript"></script>
		<script type="text/javascript" src="js/form_validation.js"></script>
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
			<div class="row">
				<h2 class="page-title"> CONTACT </h2>

					<div class="col-xs-4" id="hid">
					<br>
					<p> Please feel free to contact me for commisions, or for inquiry about my development or art work!
					 You may also contact me directly at my email address or phone number:</p>
					 <div style= "text-align:center">
						<p><b> Email: vbit32@gmail.com </b></p>
						<p><b> Phone: (954) 804 7399 </b></p>
					</div>
				</div>
				<form id="contact" class="contact-form col-xs-8" method="POST">
					<!--Name-->
				    <div class="section">
				        <label for="name">NAME:</label>
				        <input type="text" id="name" name="name" />
						<span class="error">This field is required</span>
				    </div>
				    <br>
				    <!--Email-->
				    <div class="section">
				    	<label for="mail">E-MAIL:</label>
				        <input type="email" id="mail" name="mail" />
				        <span class="error">A valid email address is required</span>	
				    </div>
				    <br>
				    <!--Subject-->
				    <div class="section">
				    	<label for="subject">SUBJECT:</label>
				        <input type="text" id="subject" name="subject" />
				        <span class="error">This field is required</span>
				    </div>
				    <br>
				    <!--Message-->
				    <div class="section">
				        <label for="msg">MESSAGE:</label>
				        <textarea id="msg" name="msg"></textarea>
				        <span class="error">This field is required</span>	
				    </div>
				    <br>
				    <div class="button" id="submt">
				        <button type="submit">submit.</button>
				    </div>
				</form>
				<div class="col-xs-4" id="show">
					<br>
					<p> Please feel free to contact me for commisions, or for inquiry about my development or art work!
					<br><br>You may also contact me directly at my email address or phone number:</p>
					<p><b> Email: vbit32@gmail.com</b></p>
					<p><b> Phone: (954) 804 7399</b></p>
				</div>
			</div>
		</div>

		<footer>
			<?php include("footer.php"); ?>
		</footer>


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