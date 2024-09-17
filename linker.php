<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Routes map-->
<div class="modal fade" id="ModalforRouteMap" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title" style='color:#079d49'>Routes Map</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" id="route_map">
				<img src='bus_logo.jpg' class='img-fluid'/>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--Payment Verify-->
<div class="modal fade" id="ModalforPaymentVerify" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title" style='color:#079d49'>Payment Verification</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" id="route_map">
				<form action="ticket.php" name="buy_seat" method="POST">
				<div class="container">
					<h5></h5>
					<label style='font-weight:bold;'>Enter Reference Number:</label> 
					<input type='text' name='name' id='name' class='form-control'>
					<label style='font-weight:bold;'>Enter Transaction ID:</label> 
					<input name='mobile' id='mobile' type='text' class='form-control'><br>
					<center><input style="width:;margin-top:0px;" class="btn cus_button1" type="submit" name="submit" id="btn" value="Verify"></input></center>
				</div>
			</form >
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--Contact-->
<div class="modal fade" id="ModalforContact" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title" style='color:#079d49'>Contact Information</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" id="route_map">
				<div class="container">
					<h6>Hot Line: AP21</h6>
					<h6>Phone: 9666057290</h6>	
					<h6>Mobile: 9666057290</h6>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-sm  navbar-light fixed-top" style="background-color:#fff;border-top:px solid #f2f2f2;box-shadow: 0 0 8px #999999;">
		  <a class="navbar-brand" style="color:#079d49;margin-left:1%;font-family:Helvetica;font-weight:bold;" href="index.php">
			<!--<img src='bus_logo.jpg' style='width:80px;height:80px;padding-top:7%;margin-right:5%'/>-->
			<img src='bus_logo.jpg' style='width:80px;height:80px;padding-top:7%;margin-right:5%' class='img-fluid'/>
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon" style="border:px solid #666;background-color:#fff;border-radius:2px;"></span>
		  </button>
		  <div class="collapse navbar-collapse" style="background-color:white;color:white;z-index:200;width:100%;margin-left:17%;" id="collapsibleNavbar">
				 <ul class="navbar-nav">
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;font-weight:bold;background-color:white' href="index.php">&emsp;Pick Bus</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;font-weight:bold;background-color:white' href="index.php">&emsp;Bus Operators</a>
				  </li>
				   <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;font-weight:bold;background-color:white' data-toggle='modal' data-target='#ModalforRouteMap'>&emsp;Routes map</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;font-weight:bold;background-color:white' data-toggle='modal' data-target='#ModalforPaymentVerify'>&emsp; Verify Payment</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;font-weight:bold;background-color:white' data-toggle='modal' data-target='#ModalforPaymentVerify'>&emsp; Cancel Ticket</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;font-weight:bold;background-color:white' data-toggle='modal' data-target='#ModalforContact'>&emsp; Contact</a>
				  </li>
				</ul>
		  </div> 
	</nav>
<?php
$connect=mysqli_connect("localhost","root","","bus_service");
?>