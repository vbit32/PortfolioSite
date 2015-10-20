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
			<form class="contact-form" action="/my-handling-form-page" method="post">
				<h2> Contact Me </h2>
		    <div class="section">
		        <label for="name">Name:</label>
		        <input type="text" id="name" />
		    </div>
		    <br>
		    <div class="section">
		    	<label for="mail">E-mail:</label>
		        <input type="email" id="mail" />
		    </div>
		    <br>
		    <div class="section">
		    	<label for="subject">Subject:</label>
		        <input type="text" id="subject" />
		    </div>
		    <br>
		    <div class="section">
		        <label for="msg">Message:</label>
		        <textarea id="msg"></textarea>
		    </div>
		    <br>
		    <div class="button">
		        <button type="submit">Send your message</button>
		    </div>
		</form>
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

		<script>
		$(document).ready(function(){
        	$("a").click(function(e){
        		//var href = $(this).attr('href');
            	e.preventDefault();
       			$('#div1').fadeOut('3000') ;
       			$('.header-nav').fadeIn('slow') ;
       			$('.body-container').fadeIn('slow') ;
       			$("a").unbind('click');
		   });
		});
		</script>
	</body>
</html>