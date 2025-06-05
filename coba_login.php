<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - AZFATICKET.XXI</title>
  <style>
    /* HEADER NAVIGATION */
    .header {
      background:rgba(231,0,0,0.39);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
    }
    .logo {
      display: flex;
      align-items: center;
    }
    .logo img {
      height: 40px;
      margin-right: 10px;
    }
    .logo h1 {
      font-family: 'Courier New', Courier, monospace;
      font-weight: bold;
      color: black;
    }
    .nav a {
      margin: 0 15px;
      font-weight: bold;
      color: black;
      text-decoration: none;
    }
    .user-icon {
      font-size: 20px;
      margin-left: 10px;
    }

    /* LOGIN BOX SECTION */
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px;
      padding: 20px;
    }
    .login-box {
      display: flex;
      background: #f08080;
      border-radius: 40px;
      padding: 40px;
      gap: 40px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .login-left {
      text-align: center;
      color: white;
    }
    .login-left img {
      height: 100px;
      margin-bottom: 10px;
    }
    .login-left h2 {
      font-size: 24px;
      margin: 0;
    }
    .login-left p {
      margin: 0;
      letter-spacing: 2px;
    }

    /* LOGIN FORM */
    .login-form {
      background:rgba(255, 228, 225, 0.39);
      padding: 30px;
      border-radius: 20px;
      min-width: 250px;
      text-align: center;
    }
    .login-form h3 {
      font-size: 22px;
      margin-bottom: 20px;
      font-weight: bold;
      color: #d9534f;
    }
    .login-form form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .login-form input {
      padding: 8px;
      border: none;
      border-bottom: 1px solid #ccc;
      background: transparent;
      outline: none;
      color: #333;
    }
    .login-form button {
      margin-top: 15px;
      background: #f08080;
      border: none;
      padding: 10px;
      border-radius: 20px;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    .forgot {
      display: block;
      margin-top: 10px;
      font-size: 12px;
      color: #d9534f;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <div class="logo">
      <img src="logo.png" alt="logo"> <!-- Ganti dengan path logo -->
      <h1>AZFATICKET.XXI</h1>
    </div>
    <div class="nav">
      <a href="#">MOVIE</a>
      <a href="#">CINEMA</a>
      <a href="#">CONTACT</a>
      <span class="user-icon">👤</span>
    </div>
  </div>

  <!-- LOGIN SECTION -->
  <div class="login-container">
    <div class="login-box">
      <!-- LEFT SECTION -->
      <div class="login-left">
        <img src="logo.png" alt="logo"> <!-- Ganti dengan path logo -->
        <h2>AZFATICKET.XXI</h2>
        <p>CITY MALL</p>
      </div>

      <!-- RIGHT SECTION: LOGIN FORM -->
      <div class="login-form">
        <h3>Login</h3>
        <form action="login.php" method="POST">
          <input type="text" name="username" placeholder="username">
          <input type="password" name="password" placeholder="password">
          <button type="submit">Login</button>
          <a class="forgot" href="#">Forgot password</a>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
