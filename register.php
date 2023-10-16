<!DOCTYPE html>
<html>
<head>
  <title>Register Page</title>
  <link rel = "stylesheet" href = "./css/styles.css">
</head>
<body class = "registerBody">
  <div class="registerContainer">
    <h2>Register</h2>
    <form action="/register" method="post">
      <input type="text" id="username" name="username" placeholder="Username">
      <input type="email" id="email" name="email" placeholder="Email / Phone">
      <input type="password" id="password" name="password" placeholder="Password">
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
      <button type="submit">Register</button>
    </form>
    <p>Already Registered? <a href="login.php">Login</a></p>
  </div>
          </div>
        <img class="registrationBackground" src="./images/registrationBg.jpg" alt="Car Image">
    </div>
</body>
</html>
