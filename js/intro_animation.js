$(document).ready(function(){

	//create the canvas in the splash outer div
	//create class of line properties
	
   	var ctx;
	var container = $("#intro").parent();
	var width = 700;
	var height = 700;
	var fps = 1;

	var balls = [
	    { x:   0, y:   0, dx: 3, dy: 7, r: 10 },
	    { x: 150, y: 250, dx: 7, dy: 3, r: 10 },
	    { x: 200, y: 200, dx: 6, dy: 4, r: 10 },
	    { x: 250, y: 250, dx: 4, dy: 6, r: 10 }
	];

	function init()
	{
	    var myCanvas = document.getElementById('intro');
	    ctx = myCanvas.getContext('2d');
	    draw();
	    //setInterval(onTick, 10);
	}

	function draw() {

	    // To Set A Framerate Using requestAnimationFrame
	    setTimeout(function() {

	        // This Animates A Boring Squiggly Line
	        ctx.clearRect(0,0,400,300);
	        requestAnimationFrame(draw);
	        ctx.beginPath();
	        ctx.moveTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.lineTo(Math.random() * 70, Math.random() * 70);
	        ctx.strokeStyle = "#333";
	        ctx.stroke();
	    }, 1000 / fps);

	}
	function onTick()
	{
	    context.fillStyle = "#000000";
	    context.beginPath();
	    var i;
	    for (i = 0; i < balls.length; i++)
	    {
	        moveBall(balls[i]);
	        drawBallPath(balls[i], context);
	    }
	    context.fill();
	}
	function drawBallPath(ball, context)
	{
	    context.moveTo(ball.x + ball.r, ball.y);
	    context.arc(ball.x, ball.y, ball.r, 0, Math.PI * 2, true);
	}
	function moveBall(ball)
	{
	    if (ball.x < 0 || ball.x > width) ball.dx = -ball.dx;
	    if (ball.y < 0 || ball.y > height) ball.dy = -ball.dy;
	    ball.x += ball.dx;
	    ball.y += ball.dy;
	}
	init();
})