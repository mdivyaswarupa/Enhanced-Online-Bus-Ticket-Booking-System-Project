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
            
        }
        input {
            margin: 10px 0;
            padding: 10px;
            width: 90%;
            border: none;
            border-radius: 5px;
            background-color: #ffffff;
           
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        button {
            padding: 10px;
            width: 30%;
            background-color: #000000;
            color: #ffffff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="login-container">
					<h2>Login</h2>
					<form action="login_process.php" method="post">
						<label for="username">Username:</label>
						<input type="text" id="username" name="username" required>

						<label for="password">Password:</label>
						<input type="password" id="password" name="password" required><br>

						<button type="submit">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
