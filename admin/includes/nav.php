

    <nav class="navbar navbar-default navbar-static">
	<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
		<div class="navbar-header">
		 <a class="navbar-brand" href="#" style="margin-left:24px;"><span class="glyphicon glyphicon-home"></span> Home</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ayaz" aria-expanded="false">
			   <span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div><!--navbar header close-->


       <div class="collapse navbar-collapse" id="ayaz">
       <ul class="nav navbar-nav">

        </ul>

                <?php

        if(isset($_SESSION['admin']))
        {
      
          $name = $_SESSION['admin'];

             echo '
           <div class="dropdown" style="margin-top:10px;">
           <button class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" style="float:right;">'.$name.' <span class="caret"><span></button>
           <ul class="dropdown-menu dropdown-menu-right" style="top:30px; color:black;">
              <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              <li><a href="admin_settings.php" ><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
           </ul>
           </div>
           </div>';

}

?>


       </div><!--collapse close-->
	</div><!--container fluid close-->
</nav><!--navbar close-->