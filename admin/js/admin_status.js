// $(document).ready(function(){
// 	alert('function called');
// 	dataHandler = $('#myTable');
// 	dataHandler.html('');
// 	$.ajax({

//    type : 'POST',
//    url  : 'ajax/employee_status.php',
//    success : function(result)
//    {
//    	alert('success');
//    	var resultObj = JSON.parse(result);
   	
//    	console.log(result);

//    	$.each(resultObj, function(key,val) {
//    		var newRow = $("<tr>");
//    		alert(val.name);
//    		newRow.html("<td>"+val.name+"</td><td>"+val.reciver+"</td><td>"+val.status+"</td>");
//    		$('#myTable').append(newRow);
//    	});
//    	$('#myTable').DataTable();
//    }


// 	});
// });