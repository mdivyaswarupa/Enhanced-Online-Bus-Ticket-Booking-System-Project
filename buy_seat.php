<!DOCTYPE html>
<html>
	<title>Confirmation</title>
	<link rel="icon" href="bus_logo.jpg" />
	<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
.heading{
	color:#af0518;
	font-size:30px;
	font-family:Bree Serif;
	font-weight:bold;
}

fieldset input,fieldset select{
            text-align: center;
        }
		
.bg-container {
      background-color:#1be5aa; /* Changed to green */
      padding: 120px; /* Added padding for spacing */
}
</style>
<body>
<div class='container-fluid text-center' style='margin-top:8%;'>
	<img src='seat.jpg' class='img-fluid'/>
</div>
<div class="container">
	<div class='row'>
		<div class='col-12' style="padding-top:5%">
			<form action="update_selected_seat.php" name="updateSeats" method="POST">
				<div class="container">
					<div class="row">
						<div class="col-12">
						  <h1 class="heading">Traveller Details:</h1>
						  <div id="container" ></div>
						  <input type="submit" value="Submit">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="bg-container">
  <div class='col-lg-6'>
	<div class="container">
	<?php
		session_start();
		$seat_values=$_POST["update_results"];
		$id=$_POST["update_results_id"];
		$unique_seats = $_POST["update_results_unique"];
		
		$username = $_SESSION['username'];
			
		$connect=mysqli_connect("localhost","root","","bus_service");
				
		$sql = "UPDATE bus_lists SET booked_seat = ".$seat_values."  WHERE trip_no = ".$id."";
				
		if ($connect->query($sql) === TRUE) {
			//echo "Record updated successfully";
		}
		else {
			//echo "Error updating record: " . $connect->error;
		}
		$_SESSION['seat_value'] = $seat_values;
		$_SESSION['id'] = $id;
		$_SESSION['unique_seats'] = $unique_seats;
		
		$gender = "SELECT * FROM passengers WHERE trip_no = $id";
		$resultGender = mysqli_query($connect, $gender);
		$passengersData = array();

		while($row = mysqli_fetch_array($resultGender)) {
			$passenger = array(
				'Gender' => $row['Gender'],
				'Selected_Seats' => $row['Selected_Seats'],
				'Name' => $row['Name'],
				'User' => $row['User']
			);
			array_push($passengersData, $passenger);
		}

		$passengers_data = json_encode($passengersData);
		//echo ".$passengers_data.";
		
		$login_details = "SELECT * FROM user_registration";
		$login_result = mysqli_query($connect,$login_details);
		$login_data = array();
		
		while($row = mysqli_fetch_array($login_result)){
			$details = array(
			'Name' => $row['User_Name'],
			'Password' => $row['Password']
			);
			array_push($login_data,$details);
		}
		$login_details_data = json_encode($login_data);
		
		//echo ".$login_details_data.";
		//echo "<b>Username:  </b>" .$username. "<br>";

	?>
	</div>
  </div>
</div>

<script>
	var booked_seats = "<?php echo $unique_seats; ?>";
	//alert(booked_seats);
	var split_seats = booked_seats.split(",");
	//alert(split_seats);
	var len=split_seats.length;
	//alert(len);
	generateFormFields();
	function generateFormFields() {
	 
	  //alert("Number of Seats Selected:");
	  //alert(len);
      //var repetitions = parseInt(document.getElementById("repetitions").value);

      var container = document.getElementById("container");

      container.innerHTML = "";

      for (var i = 0; i < len; i++) {
        var fieldset = document.createElement("fieldset");
		
		// Create the seat number input box
		var seatInput = document.createElement("input");
		seatInput.type = "text";
		seatInput.name = "selectedseat[]";
		seatInput.value= split_seats[i];
		seatInput.style.width = "50px";
		seatInput.style.color= "#10d743";
		seatInput.style.backgroundColor="#dede4a";
		fieldset.appendChild(seatInput);
		
		// Create the name input box
        var nameInput = document.createElement("input");
        nameInput.type = "text";
        nameInput.name = "name[]";
        nameInput.placeholder = "Name";
        fieldset.appendChild(nameInput);

        // Create the age input box
        var ageInput = document.createElement("input");
        ageInput.type = "number";
        ageInput.name = "age[]";
        ageInput.placeholder = "Age";
        fieldset.appendChild(ageInput);

        // Create the mobile number input box
        var mobileInput = document.createElement("input");
        mobileInput.type = "tel";
        mobileInput.name = "mobile[]";
        mobileInput.placeholder = "Mobile Number";
        fieldset.appendChild(mobileInput);

        // Create the gender input box
        var genderInput = document.createElement("select");
        genderInput.name = "gender[]";
		var optionsel = document.createElement("option");
        optionsel.value = "Gender";
        optionsel.text = "Gender";
        var optionMale = document.createElement("option");
        optionMale.value = "male";
        optionMale.text = "Male";
        var optionFemale = document.createElement("option");
        optionFemale.value = "female";
        optionFemale.text = "Female";
		genderInput.add(optionsel);
        genderInput.add(optionMale);
        genderInput.add(optionFemale);
        fieldset.appendChild(genderInput);
		
		//This filedset data in container
		
		container.appendChild(fieldset);
	  }
       
	  
	  // Add event listeners after all fields are created
	  for (var i = 0; i < len; i++) {
		var currentGenderInput = container.querySelectorAll("select[name='gender[]']")[i];
		currentGenderInput.addEventListener("change", handleGenderChange);
	  }

	
	function handleGenderChange() {
	  var selectedSeat = this.parentElement.querySelector("input[name='selectedseat[]']").value;
	  var adjacentSeat = getAdjacentSeat(selectedSeat);
	  var selectedGender = this.value;
	  var adjacentGender = getPassengerGender(adjacentSeat);
	  var adjacentUser = getPassengerUser(adjacentSeat);
	  var username = "<?php echo $username; ?>"; // Store the PHP username variable in a JavaScript variable

	  if (adjacentUser !== username) { // Compare adjacent user with the current user
		if (adjacentGender === "female" && selectedGender === "male") {
		  alert("Adjacent seat already booked by a female passenger.");
		  this.selectedIndex = 2; // Reset selection to default
		}
	  }
	}


	function getAdjacentSeat(seatNumber) {
  // Extract row and seat number from the given seat
	  var row = seatNumber.charAt(0);
	  var seatNum = parseInt(seatNumber.substring(1));

	  // Determine if the seat number is even or odd
	  var isEvenSeat = seatNum % 2 === 0;

	  // Calculate the adjacent seat number based on even/odd
	  var adjacentSeatNum = isEvenSeat ? seatNum - 1 : seatNum + 1;

	  // Assemble the adjacent seat's identifier
	  var adjacentSeat = row + adjacentSeatNum;

	  return adjacentSeat;
	}


	function getPassengerGender(seatNumber) {
	  // Use passengers_data JSON to get the gender of the seat
	  var passengers_data = <?php echo $passengers_data; ?>;
	  for (var i = 0; i < passengers_data.length; i++) {
		if (passengers_data[i].Selected_Seats === seatNumber) {
		  return passengers_data[i].Gender;
		}
	  }
	  //return null;
	}
	function getPassengerUser(seatNumber) {
	  var user_data = <?php echo $passengers_data; ?>;
	  for (var i = 0; i < user_data.length; i++) {
		if (user_data[i].Selected_Seats === seatNumber) {
		  return user_data[i].User;
		}
	  }
	}
	  
	
	  
      
    }
	
	
</script>
</body>
</html>