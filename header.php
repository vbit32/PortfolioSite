<!--Menu stuff-->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="sass/base.css">
	</head>
	<body>
		<nav class="header-nav">
			<ul>
				<li id ="li1"><a href="index.php"><b>WORK</b></a></li>
				<li id="li2"><a href="about.php">ABOUT</a></li>
				<li id="li3"><a href="ValerieBay_Resume.docx">RESUME</a></li>
				<li id="li4"><a href="contact.php">CONTACT</a></li>
				<div class="btn-group">
					<img id="btn1" src="images/GitHubBlack.png">
					<img id="btn2" src="images/LinkedInBlack.png">
				</div>
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

		<script>
		$('img#btn1').mouseenter(function(event){
			$(this).attr("src", "images/GitHubWhite.png");
			$(this).css("background-color", "black");
		});
		$('img#btn1').mouseleave(function(event){
			$(this).attr("src", "images/GitHubBlack.png");
			$(this).css("background-color", "transparent")
		});
		</script>

		<script>
		$('img#btn2').mouseenter(function(event){
			$(this).attr("src", "images/LinkedInWhite.png");
			$(this).css("background-color", "black");
		});
		$('img#btn2').mouseleave(function(event){
			$(this).attr("src", "images/LinkedInBlack.png");
			$(this).css("background-color", "transparent");
		});
		</script>
	</body>
</html>
