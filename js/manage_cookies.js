$(document).ready(function(){
	$('#title1').click(function(e){
		console.log("ok so youre here");
		Cookies.remove('currentState');
		bruh();
	});
});

function bruh(){
	console.log("HELLO????");
	if (Cookies.get('currentState') == 'entered'){
		$('.body-container').css("display", "");
		$('header').css("display", "");
		$('#splash').css("display", "none");
		console.log("cookie exists") ;
	}
	else {
		console.log("cookie does not exist");
		$('.body-container').css("display", "none");
		$('header').css("display", "none");
		$('#splash').css("display", "");
	}
};
