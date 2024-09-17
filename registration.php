<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #04fbee;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #000000;
            background-color: #d7d38d;
            border-radius: 10px;
            box-shadow: 0px 0px 5px;
        }
        .input-box{
            margin: 10px;
            padding: 8px;
            width: 90%;
            border-radius: 5px;
            background-color: #ffffff;
        }
        
        button {
            padding: 8px;
            width: 30%;
            background-color: #000000;
            color: #ffffff;
            border: 1px solid #ffffff;
            border-radius: 5px;
            
        }
        button:hover {
            background-color: #555555;
        }
    </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="login-container">
					<h2>Register</h2>
					<form action="registration_process.php" method="post">
						<label for="username">Username:</label>
						<input class="input-box" type="text" id="username" name="username" required>

						<label for="password">Password:</label>
						<input class="input-box" type="password" id="password" name="password" required>

						<label for="email">Email:</label>
						<input class="input-box" type="email" id="email" name="email" required><br>
		
						<button type="submit">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
