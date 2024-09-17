<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Assuming you have a database connection established
    $connect = mysqli_connect("localhost", "root", "", "bus_service");

    // Perform database query to check if the username already exists
    $check_query = "SELECT * FROM user_registration WHERE User_Name='$username'";
    $result = mysqli_query($connect, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // Username already exists, show an error message
        echo "Username already exists. Please choose a different username.";
    } else {
        // Insert user data into the database
        $sql = "INSERT INTO user_registration (User_Name, Password, Email) VALUES ('$username', '$password', '$email')";
        if (mysqli_query($connect, $sql)) {
            // Registration successful, store user data in the session
			// Redirect to the login page
            
        }
		$_SESSION["user_data"][$username] = array(
                "username" => $username,
                "password" => $password
            );
		header("Location: login.php");
        exit();
    }
	//$_SESSION["username"] = $username;
}
?>


</body>
</html>