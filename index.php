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
		<h1 class="title"><a id="title1" href="index.php">VBIT32</a></h1>
		<header style="display:none;">
			<?php include("header.php"); ?>
		</header>
		<div class="body-container" style="display:none">
			<div class="row" style="margin:0">
				<div class="col-xs-6 work-boxes" id="art">
						<p><b> Artwork </b></p>
				</div>
				<div class="col-xs-6 work-boxes" id="dev">
						<p><b> Development </b></p>
				</div>
			</div>
		
		</div>

		<!--Content-->
		<!--this shows first, then fades out-->
		<div id="splash" class="splash">
		  	<p>Front-End Developer</p>
		  	<p>Illustrator</p>
		  	<p>Weeaboo</p>
		  	<a id="enterSite" href="">enter site</a>
		</div>

		<!-- on hover will change elements, off hover is described in the second function-->
		<!--change this later to use css instead of js-->
		<!--<script>
		$(document).ready(function(){
		    $("#enterSite").hover(function(){
		        $(this).css("background-color", "pink");
		        $(this).css("border-color", "white");
		        $(this).css("color", "white");
		        }, function(){
		        $(this).css("background-color", "");
		        $(this).css("border-color", "#9B9B9B");
		        $(this).css("color", "#9B9B9B");
		    });
		});
		</script>-->
		<script>
		$(document).ready(function(){
 			if (Cookies.get('currentState') == 'entered'){
           		$('.body-container').css("display", "");
           		$('header').css("display", "");
           		$('#splash').css("display", "none");
       		}
       		else {
       			$('.body-container').css("display", "none");
           		$('header').css("display", "none");
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
       			$('header').slideDown('slow','swing', function(){
					$('.body-container').fadeIn('slow') ;
       			});
       			console.log ("lmao") ;
       			$("#enterSite").unbind('click');
		   });
		});
		</script>
	</body>
</html>