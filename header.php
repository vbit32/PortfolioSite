<!--Menu stuff-->
<html>
	<head>
	</head>
	<body>
		<nav class="header-nav">
			<h1>Valerie Bay</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="ValerieBay_Resume.docx">Resume</a></li>
				<li><a href="contact.php">Contact</a></li>
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
