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
		<!--<script src="/js/intro_animation.js"></script>		-->
		<link rel="stylesheet" type="text/css" href="sass/main.css">
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
		<!--<div id="header" style="display:none"></div>-->

	</head>

	<body>
		<h1 class="title" style="display:none;">
			<a id="title1" href="index.php">
				<img src="images/logo.png">
			</a>
		</h1>

		<header style="display:none;" id="hidden">
			<?php include("header.php"); ?>
		</header>

		<div class="body-container" style="display:none">
			<h2 class="page-title"> PORTFOLIO </h2>
			<p id="intro-details"> Valerie Fernandes Bay </br> Front-End Web Developer & Freelance Artist</br>Miami, FL.</p>
			<div class="row index">
				<a href="gallery.php">
					<div class="col-xs-6 work-boxes" id="art">
							<p> A r t w o r k </p>
					</div>
				</a>
				<div class="col-xs-6 work-boxes" id="dev">
						<p> D e v e l o p m e n t</p>
				</div>
			</div>
		
		</div>

		<footer style="display:none;">
			<?php include("footer.php"); ?>
		</footer>

		<!--Content-->
		<!--this shows first, then fades out-->
		<div id="splash" class="splash">
			  	<p><b>FRONT-END DEVELOPER</b></p>
			  	<p><b>ARTIST</b></p>
			  	<p><b> MEME CONNOISSEUR </p>
			  	<a id="enterSite" href=""><b>ENTER</b></a>
		</div>
	


		<script>
		$(document).ready(function(){
 			if (Cookies.get('currentState') == 'entered'){
 				$('h1').css("display", "");
           		$('.body-container').css("display", "");
           		$('header').css("display", "");
           		$('footer').css("display", "");
           		$('#splash').css("display", "none");
       		}
       		else {
       			$('h1').css("display", "none");
       			$('.body-container').css("display", "none");
           		$('header').css("display", "none");
           		$('footer').css("display", "none");
           		$('#splash').css("display", "");
       		}
		});
		</script>


		<!-- fades out the entrance design on click -->
		<script>
		$(document).ready(function(){
        	$("#enterSite").click(function(e){
        		//var href = $(this).attr('href');
        		Cookies.set('currentState', 'entered') ;
            	e.preventDefault();
       			$('#splash').fadeOut('3000') ;
       			$('h1').fadeIn('3000') ;
       			$('header').slideDown('slow','swing', function(){
					$('.body-container').fadeIn('slow') ;
					$('footer').fadeIn('slow') ;
       			});
       			console.log ("lmao") ;
       			$("#enterSite").unbind('click');
		   });
		});
		</script>
	</body>
</html>