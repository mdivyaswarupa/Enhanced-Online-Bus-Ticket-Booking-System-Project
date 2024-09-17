<!DOCTYPE html>
<html>
<head>
    <title>Passenger Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
		form {
            text-align: center;
            margin-top: 40px;
        }
        
        input[type="text"],
        input[type="email"]
        {
            width: 20%; /* Adjusted width to 100% for full width */
            padding: 8px;
            margin-bottom: 15px;
            border-radius:5px;
			margin-right: 30px;
        }
        input[type="submit"] {
            background-color: green;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    $seat_values = $_SESSION['seat_value'];
    $id = $_SESSION['id'];
    $unique_seats = $_SESSION['unique_seats'];
	
	// Check if the 'username' session key is set
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else {
		//
    }

    echo "<h1>Passenger Details</h1>";

    //echo "<b>Seat Values:</b> " . $seat_values . "<br>";
    echo "<b>Trip ID:</b> " . $id . "<br><br>";
    echo "<b>Selected Seats:</b> " . $unique_seats . "<br>";
	//echo "<b>Username:</b>" .$username. "<br>";
	echo "<br><br><br>";

    // Calculate the count of unique seats
    $seats_array = explode(",", $unique_seats);
    $unique_seat_count = count(array_unique($seats_array));

    // Assign the unique seat count to the $len variable
    $len = $unique_seat_count;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $connect = mysqli_connect("localhost", "root", "", "bus_service");

        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        echo "<table>";
        echo "<tr>";
		echo "<th>User_Name</th>";
        echo "<th>Name</th>";
        echo "<th>Age</th>";
        echo "<th>Mobile</th>";
        echo "<th>Gender</th>";
        echo "<th>Selected Seat</th>";
		echo "<th>Trip_No</th>";
		echo "<th>Date</th>";
        echo "</tr>";

        for ($i = 0; $i < $len; $i++) {
            $name = $_POST["name"][$i]; // Retrieve the value as an array
            $age = $_POST["age"][$i];
            $mobile = $_POST["mobile"][$i];
            $gender = $_POST["gender"][$i];
            $selectedSeats = $seats_array[$i];
			$Tripno = $id;
			$userData= $username;
			$date = date("Y-m-d");

            // Insert data into the table
            $sql = "INSERT INTO passengers (Name, Age, Mobile, Gender, Selected_Seats, Trip_no, User,Date_of_booking)
                    VALUES ('$name', $age, '$mobile', '$gender', '$selectedSeats','$Tripno','$userData','$date')";

            if (mysqli_query($connect, $sql)) {
                echo "<tr>";
				echo "<td>$userData</td>";
                echo "<td>$name</td>";
                echo "<td>$age</td>";
                echo "<td>$mobile</td>";
                echo "<td>$gender</td>";
                echo "<td>$selectedSeats</td>";
				echo "<td>$Tripno</td>";
				echo "<td>$date</td>";
                echo "</tr>";
            } else {
                echo "Error inserting data: " . mysqli_error($connect);
            }
        }
        echo "</table>";
	
	
	// Fetching fare from bus_lists based on trip_no
	$fare_query = "SELECT fare FROM bus_lists WHERE trip_no = $id";
	$fare_result = mysqli_query($connect, $fare_query);

	if ($fare_result) {
		// Fetch the fare row only if the query is successful
		$fare_row = mysqli_fetch_assoc($fare_result);
		$fare = $fare_row['fare'];
	} else {
		// Handle the error if the query fails
		$fare = 0; // Set a default fare value or handle as needed
	}

	// Display the fare information
	echo "<div style='margin-top: 20px;'></div>";
	echo "<div style='margin-top: 20px;'></div>";
	echo "<div style='margin-top: 20px;'></div>";
	echo "<b>Trip Fare:</b> $" . $fare . "<br><br>";

	// Calculate total cost based on the number of passengers
	$total_cost = $len * $fare;
	echo "<b>Total Cost for $len passengers:</b> $".$total_cost."<br><br>";

	// ... (your existing code)

	// Close the mysqli connection after using it
	mysqli_close($connect);
	
    }
    ?>
	
	<div style="text-align: center; margin-top: 20px;">
        <img src="https://th.bing.com/th/id/OIP.eZ151UnGU4fH0ghhIbykVAHaDq?rs=1&pid=ImgDetMain" alt="Image 1" style="width: 300px; height: auto; margin-right: 20px;">
        <img src="https://acart.com/wp-content/uploads/2013/03/ht_sleep_ad.jpg" alt="Image 2" style="width: 300px; height: auto; margin-right: 20px;">
        <!-- Add more images or content as needed -->
    </div>
	
	<form action="payment.php" method="post">
        <!-- Mobile Number -->
        <label for="mobile"><b>Mobile Number: </b>
            <input type="text" id="mobile" name="mobile" required>
        </label>

        <!-- Email Address -->
        <label for="email"><b>Email Address: </b>
            <input type="email" id="email" name="email" required>
        </label><br><br>

        <!-- Checkbox for Terms and Conditions -->
        <label>
            <input type="checkbox" required> I accept the terms and conditions
        </label><br><br>

        <!-- Make a Payment button -->
        <input type="submit" value="Make a Payment">
    </form>
</body>
</html>
