$(document).ready(function(){


  $('body').load(recive());
  function recive()
  {
  	$.ajax({

    type    :   'POST',
    url     :   'ajax/recive.php',
    success :   function(data){
      

    	$('.recive').html(data);
    }

  	});
  	setInterval(function(){recive()},20000);
    
    
  }






});