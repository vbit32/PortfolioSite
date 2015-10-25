<!--Menu stuff-->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="sass/base.css">
	</head>
	<body>
		<nav class="header-nav">
			<ul>
				<li id ="li1"><a href="index.php">Home</a></li>
				<li id="li2"><a href="about.php">About</a></li>
				<li id="li3"><a href="ValerieBay_Resume.docx">Resume</a></li>
				<li id="li4"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>	

		<script>
			$("a").click(function(event){
	    		event.preventDefault();
	    		link = this.href;
	    		$(".body-container").fadeOut(function(){
	        		window.location = link;
	    		});
			});
		</script>
	</body>
</html>
