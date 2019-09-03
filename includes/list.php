	<style>
		.list-group-change {
/*			height: 1100;*/
			background:white;
			margin-top: 24px;
			width: 90%;
			margin-left: 12px;
			border-radius: 12px;
			box-shadow: 5px 5px 5px #888888; 


		}

		.list-group-item {
			background: #4D525B !important;
			border: 1px solid #e7e7e7 !important;
			color: black !important;
		}

		.list-group-item:hover{
			background: #f5f5f5 !important;
			border: 0px !important;
			color: black !important;
		}
		.list-group a
		{
			background: white !important;
		}
		.list-group-change a span
		{
			padding-right: 10px;
		}
	</style>

	<div class="list-group list-group-change">
	<a href="user_login.php" class="list-group-item"> <span class="glyphicon glyphicon-home"></span>Dashboard</a>
	<!-- <a href="send_msg.php" class="list-group-item"> <span class="glyphicon glyphicon-home"></span>Send Latters</a> -->
	<a href="recive.php" class="list-group-item"><span class="glyphicon glyphicon-ok"></span>Receive Messages</a>
	<a href="dash.php" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>Send Message</a>
	<a href="employee_status.php" class="list-group-item"><span class="glyphicon glyphicon-signal"></span>Letter Status</a>

	</div><!--list group close-->
