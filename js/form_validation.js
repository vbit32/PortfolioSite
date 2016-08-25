
$(document).ready(function() {
	// Name can't be blank
	var error_free = true ;
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
	$("#submt").click(function(event){
		var form_data = $("#contact").serializeArray();
		var truth_array = [] ;
//checks through each id to see if its valid
		for (var input in form_data)
		{
			var element = $("#"+form_data[input]['name']);
			console.log(element);
			var valid = element.hasClass("valid");
			//add each boolean variable for each input
			truth_array.push(valid) ;
			console.log(valid);
			var error_element=$("span", element.parent());
			console.log(error_element);

			if (!valid){
				error_element.removeClass("error").addClass("error_show"); 
				//error_free=false;
			}
			else{
				error_element.removeClass("error_show").addClass("error");
				//error_free=true;
			}
		}

		error_free = true ;
		//go through each boolean variable, if any is false, set error_free to false
		for (var i=0; i<truth_array.length; i++)
		{
			if (truth_array[i] == false)
			{
				error_free = false ;
			}

		}

		console.log("error free is:: " + error_free);

		if (!error_free){
			event.preventDefault(); 
			$(event).unbind("#submt").submit();
		}
		else {
			alert('No errors: Form will be submitted');

			//here it should make an ajax call but it doesnt
			callAjax() ;
		}
	});

	function callAjax(){
		 $.ajax({
	        url: "//formspree.io/valerie.bay2@gmail.com", 
	        method: "POST",
	        data: {
		 			name : $('#name').val(),
		            email : $('#mail').val(),
		            subject : $('#subject').val(),
		            message : $('#msg').val()
		        },
	        dataType: "json",

	    });
	    alert('Thanks for the email, we\'ll be in touch promptly.');
	    window.location.href = "../index.php";
	    return false;
	}
});
