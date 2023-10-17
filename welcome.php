<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .message {
            font-size: 24px;
            color: green;
            margin-bottom: 20px;
        }
        .redirect-button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .redirect-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="message">
        Registered Successfully!
    </div>
    <a href="login.php" class="redirect-button">Go to Login</a>
</body>
</html>