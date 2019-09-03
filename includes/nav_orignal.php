<nav class="navbar navbar-default change-nav">
	<div class="container-fluid">
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
        </ul>




        <?php
        if(isset($_SESSION['name']))
        {
          // $username = $_SESSION['user_name'];
           echo "
                    <ul class='pull-right' style='background-color: white;'>
        <button type='button' class='btn btn-danger' style='margin-top:7px;'>
        <a href='#'><span class='pull-right'>".$_SESSION['name']."</span></a>
       </button>
      <button type='button' class='btn btn-danger' style='margin-top:7px;'>
        <a href='logout.php'><span class='pull-right'>Logout</span></a>
       </button>
        </ul>
           ";
        }
        else
        {

        }

         ?>


       </div><!--collapse close-->
	</div><!--container fluid close-->
</nav><!--navbar close-->
