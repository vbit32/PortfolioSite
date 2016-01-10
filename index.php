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
		<link rel="stylesheet" type="text/css" href="sass/base.css">
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
		<!--<div id="header" style="display:none"></div>-->

	</head>

	<body>
		<h1 class="title"><a id="title1" href="index.php">V B I T 3 2</a></h1>

		<header style="display:none;">
			<?php include("header.php"); ?>
		</header>

		<div class="body-container" style="display:none">
			<h2 class="page-title"> WORK </h2>
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
		  	<p><b>ILLUSTRATOR</b></p>
		  	<p><b> MEME CONNOISSEUR </p>
		  	<a id="enterSite" href=""><b>ENTER</b></a>
		</div>


		<script>
		$(document).ready(function(){
 			if (Cookies.get('currentState') == 'entered'){
           		$('.body-container').css("display", "");
           		$('header').css("display", "");
           		$('footer').css("display", "");
           		$('#splash').css("display", "none");
       		}
       		else {
       			$('.body-container').css("display", "none");
           		$('header').css("display", "none");
           		$('footer').css("display", "none");
           		$('#splash').css("display", "");
       		}
		});
		</script>

		<script>
		$("#art").hover(
		    function(){
		        $("#art").animate({'backgroundColor': '#f5f5f5'},400);
		    },
		    function(){
		        $(this).animate({'backgroundColor': '#000'},400);
		    }
		); 
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
					$('footer').fadeIn('slow') ;
       			});
       			console.log ("lmao") ;
       			$("#enterSite").unbind('click');
		   });
		});
		</script>
	</body>
</html>