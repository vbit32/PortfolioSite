$(document).ready(function() {
	// Name can't be blank
	$('#name').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	// Subject can't be blank
	$('#subject').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	// Email must be an email
	$('#mail').on('input', function() {
		var input=$(this);
		var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		var is_email=re.test(input.val());
		if(is_email){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	});
	//Message can't be blank
	$('#msg').keyup(function(event) {
		var input=$(this);
		var message=$(this).val();
		console.log(message);
		if(message){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}	
	});
	$("#submit").click(function(event){
		var form_data = $("#contact").serializeArray();
		var error_free = true;

		for (var input in form_data)
		{
			var element = $("#"+form_data[input]['name']);
			console.log(element);
			var valid = element.hasClass("valid");
			console.log(valid);
			var error_element=$("span", element.parent());
			console.log(error_element);

			if (!valid){
				error_element.removeClass("error").addClass("error_show"); 
				error_free=false;
			}
			else{
				error_element.removeClass("error_show").addClass("error");
			}
		}

		if (!error_free){
			event.preventDefault(); 
		}
		else{
			alert('No errors: Form will be submitted');
		}
	});
});