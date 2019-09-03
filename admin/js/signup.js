$(document).ready(function()
{
	name = '';
	email = '';
	password = '';
	repassword = '';
	department = '';
	designation = '';
	$('#name').focusout(function(){
		var store = $(this).val();
		if($.trim(store) == "")
		{
		$('.nameerror').html('Name is requried');
		 $('#name,.name').addClass('change-to-red');
         $('#name,.name').removeClass('change-to-green');
         name = '';
		}
		else
		{
			var name_reg = /^[a-zA-Z ]+$/;
			if(name_reg.test(store))
			{
            $('.nameerror').html('');
            $('#name,.name').addClass('change-to-green');
            $('#name,.name').removeClass('change-to-red');
            name = store;
			}
			else
			{

			$('.nameerror').html('Name must be characters');
		    $('#name,.name').addClass('change-to-red');
            $('#name,.name').removeClass('change-to-green');
            name = '';

			}
		}

	});


	//validate email
		$('#email').focusout(function(){
		var store = $(this).val();
		if($.trim(store) == "")
		{
		$('.emailerror').html('Email is requried');
		 $('#email,.email').addClass('change-to-red');
         $('#email,.email').removeClass('change-to-green');
         email = '';
		}
		else
		{
			var email_reg = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+\.[a-z]+$/;
			if(email_reg.test(store))
			{
             $.ajax({
             	type   :  'POST',
             	url    :  'ajax/signup.php',
             	data   :  {email : store},
             	success : function(data)
             	{
             	if($.trim(data) == '0')
             	{
             	 $('.emailerror').html('Sorry Email is already exist!');
				 $('#email,.email').addClass('change-to-red');
		         $('#email,.email').removeClass('change-to-green');
                 email = '';
             	}
             	else
             	{
             	 $('.emailerror').html('');
				 $('#email,.email').addClass('change-to-green');
		         $('#email,.email').removeClass('change-to-red');
                 email = store;
             	}
             	}

             });
			}
			else
			{
		 $('.emailerror').html('Invalid formate');
		 $('#email,.email').addClass('change-to-red');
         $('#email,.email').removeClass('change-to-green');
         email = '';
			}
		}
	});

		//validating password
		$('#password').focusout(function(){
        var store = $(this).val();
        if($.trim(store) == "")
        {
         $('.password-error').html('Password is required');
		 $('#password,.password').addClass('change-to-red');
         $('#password,.password').removeClass('change-to-green');
         password = '';
        }
        else if($.trim(store).length <= 8)
        {
         $('.password-error').html('Password length must be 9 characters');
		 $('#password,.password').addClass('change-to-red');
         $('#password,.password').removeClass('change-to-green');
         password = '';
        }
        else
        {
         $('.password-error').html('');
		 $('#password,.password').addClass('change-to-green');
         $('#password,.password').removeClass('change-to-red');
         password = store;
        }
		});

		//validating re-password 
		$('#retype_password').focusout(function(){

        var store = $(this).val();
        if($.trim(store) == "")
        {
         $('.rpassword-error').html('Re-Password is required');
		 $('#retype_password,.retype').addClass('change-to-red');
         $('#retype_password,.retype').removeClass('change-to-green');
         repassword = '';	
        }
        else if(store == password)
        {
         $('.rpassword-error').html('');
		 $('#retype_password,.retype').addClass('change-to-green');
         $('#retype_password,.retype').removeClass('change-to-red');
         repassword = store;
        }
        else
        {
         $('.rpassword-error').html('Password not matched');
		 $('#retype_password,.retype').addClass('change-to-red');
         $('#retype_password,.retype').removeClass('change-to-green');
         repassword = '';	
        }
		});

		//validating department
		$('#department').focusout(function(){
         var store = $(this).val();
         if($.trim(store) == "")
         {
         $('.department-error').html('Department is required');
		 $('#department,.department').addClass('change-to-red');
         $('#department,.department').removeClass('change-to-green');
         department = '';
         }
         else
         {
         $('.department-error').html('');
		 $('#department,.department').addClass('change-to-green');
         $('#department,.department').removeClass('change-to-red');
         department = store;	
         }
		});


		//validating designation
		$('#designation').focusout(function(){
        
        var store = $(this).val();
        if($.trim(store) == "")
        {
         $('.designation-error').html('Designation is required');
		 $('#designation,.designation').addClass('change-to-red');
         $('#designation,.designation').removeClass('change-to-green');
         designation = '';
        }
        else
        {
         $('.designation-error').html('');
		 $('#designation,.designation').addClass('change-to-green');
         $('#designation,.designation').removeClass('change-to-red');
         designation = store;
        }

		});

		//submiting the form
		$('#signup').click(function(){
          
          if(name == '' || email == '' || password == '' || repassword == '' || department == '' || designation == '')
          {
          	$('.form-error').html('Sorry Please fill out all fields and try again!');
          	$('.form-error').addClass('alert alert-danger');
          }
          else
          {
          	$.ajax({
            type :  'POST',
            url  :  'ajax/signup.php',
            data :  {name : name, email : email, password : password, repassword : repassword, department : department, designation : designation},
            success : function(data)
            {
            	if(data.indexOf('registered') > -1)
                {
                    $('.form-submit').addClass('alert alert-success');
                    $('.form-submit').html('You are successfully registered!');
                    $('#signup-form').trigger("reset");
                    $('.form-error').hide()
                            name = '';
                            email = '';
                            password = '';
                            repassword = '';
                            department = '';
                            designation = '';
                }
                else
                {
                    $('.form-submit').addClass('alert alert-danger');
                    $('.form-submit').html('Sorry an error occured!');
                }
            }
          	});
          }
		});


});
