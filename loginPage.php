<!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" href = "./css/styles.css">
  <title>KotCheck | Log In</title>
</head>
<body class = "loginBody">
  <div class = "loginContainer">
    <h2>Login</h2>
    <form action="/login" method="post">
      <input type="text" id="username" name="username" placeholder="Username">
      <input type="password" id="password" name="password" placeholder="Password">
      <div class="remember-me">
        <input type="checkbox" id="rememberMe" name="rememberMe">
        <label for="rememberMe">Remember Me</label>
      </div>
      <a href = "branchlistPage.php">
        <button type="submit">LOGIN</button>
      </a>
    </form>
    <p>Not registered yet? <a href= "registerPage.php">Register here</a></p>
  </div>
  <img class = "loginBackground" src = "./images/loginBg.jpg" alt="Login Image">
</body>
</html>
