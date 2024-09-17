<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    $connect = mysqli_connect("localhost", "root", "", "bus_service");

    // Prepare the SQL query to check if the user exists in the database
    $sql = "SELECT * FROM user_registration WHERE User_Name = '$username'";

    // Execute the query
    $result = mysqli_query($connect, $sql);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) > 0) {
        // Fetch the user data from the database
        $user_data = mysqli_fetch_assoc($result);

        // Now check if the submitted password matches the password in the database
        if ($user_data["Password"] === $password) {
            // Login is successful, store the user data in the session
            $_SESSION["user_data"] = $user_data;

            // Redirect to the index page
            header("Location: index.php");
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
            exit();
        } else {
            // If the password doesn't match, show an error message
            $error_message = "Invalid password. Please try again.";
            echo $error_message;
        }
    } else {
        // If no matching user found in the database, show an error message
        $error_message = "No user data found. Please register first.";
        echo $error_message;
    }
	echo ".$username.";
	
}
?>



</body>
</html>
