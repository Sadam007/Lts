<?php 
include_once 'function/function.php';
if(!isset($_SESSION['admin']))
 header('Location: ../all_login.php');
 ?>
<?php include_once 'header.php'; ?>
<body>
	<?php include_once 'includes/nav.php'; ?>
	<div class="row">
		<div class="col-md-2">
        <?php include_once 'includes/list.php'; ?>
		</div><!--close col md 3-->
		<div class="col-md-10">
      
       <h3>Employee Status</h3><hr>
       <table id="myTable" class="table table-hover table-striped">
        <thead>
          <tr class="info">
            <th>Sender</th>
            <th>Receiver</th>
            <th>Status</th>
          </tr>
        </thead>
          <tbody>

          </tbody>
       </table>

   </div>
   <script type="text/javascript" src="js/admin_status.js"></script> 
    <script type="text/javascript">
    // $(document).ready(function(e){
    //   $('#myTable').dataTable();
    // })
$(document).ready(function(){
  

  $.ajax({

   type : 'POST',
   url  : 'ajax/employee_status.php',
   success : function(result)
   {
    
    var resultObj = JSON.parse(result);
    
    console.log(result);

    $.each(resultObj, function(key,val) {
      var newRow = $("<tr>");
    
      newRow.html("<td>"+val.name+"</td><td>"+val.reciver+"</td><td class='status'>"+val.status+"</td>");

      $('#myTable').append(newRow);


    });
    $('#myTable').DataTable();

    $('#myTable').find("tr>td.status").each(function() {
      var statusTD = $(this).html();
      if(statusTD == 0)
      {
        $(this).addClass('danger');
      }
      else 
      {
        $(this).addClass('success');
      }
    });
   }


  });
});
  </script>
   </body>
   </html>


   

