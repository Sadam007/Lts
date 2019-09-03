<nav class="navbar navbar-default">
	<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
          <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ayaz" aria-expanded="false">
         <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div><!--navbar header close-->


       <div class="collapse navbar-collapse" id="ayaz">
       <ul class="nav navbar-nav">
        <li><a href="user_login.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
<!--         <li><a href="#" data-toggle="modal" data-target="#cantact">Contact Us</a></li>
        <li><a href="#" data-toggle="modal" data-target="#cantact">About Us</a></li> -->
       <form action="search.php" method="post" class="navbar-form navbar-left">
         <div class="input-group">
           <input type="text" name="search" class="form-control" placeholder="Enter Invoice Number...">
           <div class="input-group-btn">
             <input type="submit" value="Search" name="btn-search" class="btn btn-primary">
           </div>
         </div>
       </form>
       <form action="TrackAndTrace.php" method="get" class="navbar-form navbar-right">
         <div class="input-group">
           <input type="text" name="search" class="form-control" placeholder="Track and trace">
           <div class="input-group-btn">
             <input type="submit" value="Search" name="btn-search" class="btn btn-primary">
           </div>
         </div>
       </form>
        </ul>

       


        <?php
        include('connection/connect.php');
        if(isset($_SESSION['name']))
        {
      
          $name = $_SESSION['name'];

             echo '
           <div class="dropdown" style="margin-top:10px;">
           <button class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" style="float:right;">'.$name.' <span class="caret"><span></button>
           <ul class="dropdown-menu dropdown-menu-right" style="top:30px; color:black;">
              <li><a href="logout.php" >LogOut</a></li>
              <li><a href="change_password.php" >Settings</a></li>
           </ul>
           </div>
           </div>';

}

?>

       </div><!--collapse close-->

    </div>
  </div>

	</div><!--container fluid close-->
</nav><!--navbar close-->