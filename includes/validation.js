$(document).ready(function (){

var name="";
var email="";
var password="";
var retype_password="";
var department="";
var desigation="";

$(#name).keypad(function(){

	var vall = $(#name).vall();
	if(vall=="")
	{
		$("#nameerror").html("please enter your full name");
		name="";

	}
	else if(vall.lenght<3)
	{
		$("#nameerror").html("name is too short");
		name="";
	}  
	else 
	{
		$("#nameerror").html("ok");
		name=vall;
	}

})


});