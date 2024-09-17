<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$payment_option = $_POST['payment_option'];
		

		switch ($payment_option) {
			case 'phonepe':
				// Implement PhonePe payment logic here
				echo "<b>Processing PhonePe payment...</b>";
				break;

			case 'upi':
				// Implement UPI payment logic here
				echo "<b>Processing UPI payment...</b>";
				break;

			case 'gpay':
				// Implement Google Pay payment logic here
				echo "<b>Processing Google Pay payment...</b>";
				break;

			default:
				echo "<b>Invalid payment option</b>";
				break;
		}
	}
	?>


</body>
</html>