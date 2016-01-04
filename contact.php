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
				<form id="contact" class="contact-form col-xs-8" method="POST">
					<h2> CONTACT </h2>
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
				<div class="col-xs-4">
					<p> Hello! </p><br>
					<p> Please feel free to contact me for commisions, or for inquiry about my development or art work!</p>
					<p> You may also contact me directly at my email address or phone number:</p>
					<p> Email: vbit32@gmail.com</p>
					<p> Phone: (954) 804 7399</p>

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

		<!--<script>
			/*$("#submit").on("click", function() {
				name = $("#name").serialize();
			    email = $("#mail").serialize();
			    subject = $("#subject").serialize();
			    message = $("#msg").serialize();

			    $.ajax({
			        url: "//formspree.io/valerie.bay2@gmail.com", 
			        method: "POST",
			        data: {
				 			name : $('#name').val(),
				            email : $('#mail').val(),
				            subject : $('#subject').val(),
				            message : $('#msg').val()
				        },
			        dataType: "json",

			    });
			    alert('Thanks for the email, we\'ll be in touch promptly.');
			    window.location.href = "/index.php";
			    return false;
			});*/
		</script>-->
	</body>
</html>