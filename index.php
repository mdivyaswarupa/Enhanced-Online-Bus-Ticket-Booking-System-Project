<!DOCTYPE html>
<html>
	<title>Bus Services</title>
	<link rel="icon" href="" />
	<head>
		<?php include "linker.php";?>
		<style>
			#index .container-fluid
			{
				padding:2%;
				margin:2%;
				border-radius:0px;
				margin-top:2%;
				border-radius:10px;
				box-shadow:0px 0px 0px #999999;
			}
			#info:hover
			{
				box-shadow:	0px 0px 0px #999999;
			}
			#search_part
			{
				background-image:url("busimages/background.jpg");
				background-repeat:no-repeat;
				background-size:%;
				width:100%;
				margin:0;
				padding:0;
				background-attachment:fixed;
			}
			#index hr{hheight:6px;background-color:#079d49;}
		</style>
	</head>
	<body>
		<div class='row' style='margin:0;padding:0;border-radius:0px;' id="index">
			<div class='container-fluid' id='search_part' style='padding:0;margin:0;border-radius:0px;'>
				<div class='row' style='margin:0;padding-top:5%;padding-bottom:5%;margin-top:%;background-color:rgba(0,0,0,0.6);'>
					<div class='col-lg-7 text-center' style='text-align:center;margin-top:auto;margin-bottom:auto;'>
						<div class='container text-center' style='margin-top:5%;'>
							<div class="progress" style='height:70px;font-size:14px;margin-left:20%;margin-right:auto;background-color:transparent'>
							  <div class="progress-bar" style="width:15%;background-color:transparent">
								<div class='circle' style='background-color:#fff;color:#666;'>1</div>
								<label style='color:'>Search </label>
							  </div>
							  <div class="progress-bar" style="width:15%;background-color:transparent;">
								<div class='circle'style='background-color:#fff;color:#666'>2</div>
								<label style='color:'>Book </label>
							  </div>
							  <div class="progress-bar" style="width:15%;background-color:transparent;">
								<div class='circle' style='background-color:#fff;color:#666'>3</div>
								<label style='color:'>Confirm </label>
							  </div>
							  <div class="progress-bar" style="width:15%;background-color:transparent;">
								<div class='circle' style='background-color:#fff;color:#666'>4</div>
								<label style='color:'>Pay </label>
							  </div>
							  <div class="progress-bar" style="width:15%;background-color:transparent;">
								<div class='circle' style='background-color:#fff;color:#666'>5</div>
								<label style='color:'>Ticket </label>
							  </div>
							</div>
						</div>
						<h1 style='margin-top:auto;margin-bottom:auto;padding:0%;color:white;'>
							Buy bus ticket at home through 5 easy steps
						</h1>
					</div>
					<div class='col-lg-4' style='border-radius:6px;margin-left:auto;margin-right:auto;padding:2%;margin-top:%;margin-bottom:%;margin:4%;background-color:rgba(0,0,0,1.6);background-color:white;'>
								
						<form  action="search_result.php" name="bus_search_form" method="POST" onsubmit="return check(this)">	
							<div class="container" style='font-weight:bold;'>
								<h5>
									<label style="color:#079d49"><a name="pickbus"></a>Pick Your Bus</label>
								</h5>
								<label style="margin-left:px;font-style:bold;color:black">From:</label>
									<select  style="margin-top:px;color:#333333;"  class='form-control' id="source" name="source">
										<option value="|">Enter City</option>
										<option value="Tirupati">Tirupati </option>
										<option value="Hyderabad">Hyderabad</option>
										<option value="Chennai">Chennai</option>
										<option value="vijayawada">Vijayawada</option>
									</select>
								<label style="margin-left:px;color:black">To:</label>
									<select  style="margin-top:px;color:#333333;"  class='form-control' id="dstn" name="dstn"placeholder="Select option">
										<option value="|">Enter City</option>
										<option value="Chennai">Chennai </option>
										<option value="tirupati">Tirupati</option>
										<option value="hyderabad">Hyderabad</option>
										<option value="vijayawada">Vijayawada</option>
									</select>			
								<label style="margin-left:px;color:black">Date of Journey:</label>
									<input class='form-control'  name="journey_date" id="journey_date" type ="date"/>
								<label style="margin-left:px;color:black">Coach Type(optional):</label>
									<select  style="margin-top:px;color:#333333;" id="type" class='form-control' name="type">
										<option value="all">All</option>
										<option value="ac">AC</option>
										<option value="ac">NON-AC</option>
									</select>
									<h4><p style="margin-left:px;margin-top:20px;">
									<input style="width:100%" class="btn btn-success" type="submit" name="submit" id="btn" onclick='check()' value="Search Bus"></input>
									</h4>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class='container-fluid text-center' id='info'>
				<div class='row' style='margin:0;padding:0;'>
					<div class='col-lg-4'>
						<img src='bus_logo.jpg' style='width:60px;height:60px;'/>
						<h5 style='color:#079d49'>Safe and secure payment</h5>
						<p class='text-muted' style='padding-left:10%;padding-right:10%;'>
							We support online, mobile and cash on delivery. Security is our main concern.
						</p>
					</div>
					<div class='col-lg-4'>
						<img src='bus_logo.jpg' style='width:60px;height:60px;'/>
						<h5 style='color:#079d49'>Anytime ticket purchase</h5>
						<p class='text-muted' style='padding-left:10%;padding-right:10%;'>
							Customer can easily cancel their ticket and get the payment
						</p>
					</div>
					<div class='col-lg-4'>
						<img src='bus_logo.jpg' style='width:60px;height:60px;'/>
						<h5 style='color:#079d49'>Easy cancellation</h5>
						<p class='text-muted' style='padding-left:10%;padding-right:10%;'>
							Customer can easily cancel their ticket and get the payment.
						</p>
					</div>
				</div>
			</div>
			<div class='container-fluid' id='info'>
				<h5><p style="color:#079d49;">Available Bus Operators</p></h5>
				<hr style='margin-bottom:2%;margin-top:2%;'></hr>
				
				<style>
					.col-lg-2 img{width:200px;height:180px;}
					.col-lg-2 {margin-right:3.2%;}
				</style>
				<div class='row text-center'>
					<?php 
					$query="select * from bus_info";
					$result=mysqli_query($connect,$query);
					while($row = mysqli_fetch_array($result)){
						$id = $row['id'];
						$bus_name = $row['bus_name'];
						$image = $row['image'];
						$img_array=explode(" ", $image);
						echo "<div class='col-lg-2'>
								<a class='btn btn-link bus_detail_info' data-toggle='modal' data-target='#ModalforBusDetail';>
									<img src='busimages/".$img_array[0]."'>
									<p>".$bus_name."</p>
								</a>
							 </div>";
					}	 
					?>
				</div>
			</div>
			<div class='container-fluid' id='info'>
				<h5><p style="color:#079d49;">Available Bus Routes</h5>
				<hr></hr>
				<div class='row' style='margin:0;padding:0;list-style:none'>
					<div class='col-lg-3'>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Tirupati - Vijayawada</li>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Tirupati - Chennai</li>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Tirupati - Hyderabad</li>
					</div>
					<div class='col-lg-3'>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Vijayawada - Tirupati</li>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Vijayawada - Chennai</li>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Vijayawada - Hyderabad</li>
					</div>
					<div class='col-lg-3'>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Hyderabad - Chennai</li>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Hyderabad - Vijayawada</li>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Hyderabad - Tirupati</li>
					</div>
					<div class='col-lg-3'>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Chennai - Tirupati</li>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Chennai - Vijayawada</li>
						<li><img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;"> Chennai - Hyderabad</li>
					</div>
				</div>
			</div>
			<div class='container-fluid' id='info'>
				<h5><p style="margin-left:px;padding-top:-20px;color:#079d49;"><a name="payment"></a>We accept payment with</p></h5>
				<hr></hr>
				<img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;">  Phone Pay <br>
				<img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;">  Google Pay <br>
				<img src="bus_logo.jpg"  style="width:25px;height:15px;margin-top:-4px;">  Paytm <br>
			</div>
		</div>
		<?php include "footer.php";?>
	</body>
</html>