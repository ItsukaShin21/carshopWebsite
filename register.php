<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize user input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Check if any field is empty
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields must be filled.";
        // Redirect or display an error message as needed
        exit();
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        // Redirect or display an error message as needed
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to welcome.php
        header("Location: welcome.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>KotCheck | Register</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (username === '' || email === '' || password === '' || confirm_password === '') {
                alert("All fields must be filled.");
                return false;
            }
        }
    </script>
</head>
<body class="registerBody">
<div class="registerContainer">
    <h2>Register</h2>
    <form action="" method="post" onsubmit="return validateForm()">
        <input type="text" id="username" name="username" placeholder="Username">
        <input type="email" id="email" name="email" placeholder="Email / Phone">
        <input type="password" id="password" name="password" placeholder="Password">
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
        <button type="submit">Register</button>
    </form>
    <p>Already Registered? <a href="login.php">Login</a></p>
</div>
<img class="registrationBackground" src="./images/registrationBg.jpg" alt="Car Image">
</body>
</html>
