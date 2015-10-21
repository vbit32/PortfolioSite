<!--Menu stuff-->
<body>
	<nav class="header-nav">
		<h1>Valerie Bay</h1>
		<ul>
			<li><a id="home" href="index.php">Home</a> |</li>
			<li><a href="about.php">About</a> |</li>
			<li><a href="ValerieBay_Resume.docx">Resume</a> |</li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>	

	<script>
		$(document).ready(function(){
			$('#home').click(function(e){
	        	if(Cookies.get('currentState') == 'entered')
	        	{
	        		console.log ("lmao") ;
	        		$('.body-container').css("visibility", "visible");
	        		$('header').css("visibility", "visible");
	        		$('#div1').css("display", "none");
	        	}
			});
		});
		</script>
</body>
