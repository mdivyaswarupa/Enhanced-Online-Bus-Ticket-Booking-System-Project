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

   
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $passenger_mobile = $_POST['mobile'];
        $passenger_email = $_POST['email'];

    }
    ?>

    <h1>Select a Payment Option</h1>

    <p><strong>Mobile Number:</strong> <?php echo $passenger_mobile; ?></p>
    <p><strong>Email Address:</strong> <?php echo $passenger_email; ?></p>

    <form action="mail_sending.php" method="post">
		<div>
			<input name="email" value="<?php echo $passenger_email; ?>" hidden>
			<input name="mobile" value="<?php echo $passenger_mobile; ?>" hidden>
		</div>
        <label>
            <input type="radio" name="payment_option" value="phonepe" onchange="generateQRCode()" required>
            PhonePe
        </label>
        <label>
            <input type="radio" name="payment_option" value="upi" onchange="generateQRCode()" required>
            UPI
        </label>
        <label>
            <input type="radio" name="payment_option" value="gpay" onchange="generateQRCode()" required>
            Google Pay
        </label>

        <div class="qr-code-container" id="qrCodeContainer"></div>

        <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
        <script>
            function generateQRCode() {
                var paymentOption = document.querySelector('input[name="payment_option"]:checked').value;

                var qrCodeContainer = document.getElementById('qrCodeContainer');
                qrCodeContainer.innerHTML = '';

                var qr = new QRCode(qrCodeContainer, {
                    text: paymentOption,
                    width: 110,
                    height: 110
                });

                // Additional handling for UPI
                if (paymentOption === 'upi') {
                    var upiId = prompt("Please enter your UPI ID:");
                    if (upiId !== null) {
                        var upiMessage = "Please make the UPI payment to the following UPI ID: " + upiId;
                        qrCodeContainer.innerHTML += '<b>' + upiMessage + '</b>';
                    }
                }
            }

            // Automatically generate QR code on page load based on default selected radio button
            window.onload = function () {
                generateQRCode();
            };
        </script>

        <br>
        <input type="submit" value="Proceed" name="Proceed">
    </form>
</body>

</html>
