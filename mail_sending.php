<!DOCTYPE html>
<html>

<head>
    <title>Payment Options</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        label {
            margin-right: 20px;
        }
        input[type="submit"] {
            background-color: green;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }
        .qr-code-container {
            margin-top: 20px;
        }
		.qr-code-container {
            margin-top: 30px;
			display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    // Move the use statements outside of the conditional block
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $passenger_mobile = $_POST['mobile'];
        $passenger_email = $_POST['email'];

        if (isset($_POST['Proceed'])) {
            $to_id = $passenger_email;
            $subject = 'Your Ticket Booking Confirmed';
            $message = 'Dear passenger, your ticket booking is confirmed. Thank you for choosing our service.';

            $mail = new PHPMailer(true);

            $mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'o180453@rguktrkv.ac.in';
			$mail->Password = 'echx qyso etqt ajjo';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;

			$mail->setFrom('o180453@rguktrkv.ac.in', 'chiru');
			$mail->addAddress($to_id);
			$mail->Subject = $subject;
			$mail->Body = $message;


            if (!$mail->send()) {
                $error  = "Mailer Error: " . $mail->ErrorInfo;
                echo "Error: " . $error;
            } else {
                echo "<b>Your Ticket Booking Confirmed.   </b>";
				echo "<b>Check your email for confirmation... </b>";
            }
        } else {
            echo "Please enter valid details...";
        }
    }

    ?>
</body>

</html>
