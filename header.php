<!--Menu stuff-->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="sass/main.css">
	</head>
	<body>
		<nav class="header-nav">
			<ul>
				<li id ="li1"><a id="1" href="index.php">WORK</a></li>
				<li id="li2"><a id="2" href="about.php">ABOUT</a></li>
				<li id="li3"><a id="3" href="ValerieBay_Resume.docx">MY STORENVY</a></li>
				<li id="li4"><a id="4" href="contact.php">CONTACT</a></li>
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
