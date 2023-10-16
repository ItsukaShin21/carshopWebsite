<!DOCTYPE html>
<html>
<head>
  <title>KotCheck | Register</title>
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
      <a href = "loginPage.php">
        <button type="submit">Register</button>
      </a>
    </form>
    <p>Already Registered? <a href="loginPage.php">Login</a></p>
  </div>
          </div>
        <img class="registrationBackground" src="./images/registrationBg.jpg" alt="Car Image">
    </div>
</body>
</html>
