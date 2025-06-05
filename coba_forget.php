<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forget Password - AZFATICKET.XXI</title>
  <style>
    /* ===== HEADER NAVIGATION ===== */
    .header {
      background: #f08080;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
      border-bottom: 4px solid #007bff; /* Garis biru bawah */
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

    /* ===== CONTAINER FORM FORGET PASSWORD ===== */
    .forgot-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 50px;
      padding: 20px;
    }

    .forgot-box {
      background: #f08080;
      padding: 60px 30px 30px;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      position: relative;
      width: 320px;
      text-align: center;
    }

    /* ===== LOGO DI ATAS BOX (ABSOLUTE) ===== */
    .forgot-box img.logo-top {
      position: absolute;
      top: -40px;
      left: calc(50% - 40px);
      height: 80px;
    }

    /* ===== FORM DI DALAM BOX ===== */
    .forgot-form {
      background: #ffe4e1;
      padding: 20px;
      border-radius: 15px;
    }

    .forgot-form h2 {
      font-size: 18px;
      font-weight: bold;
      color: #b22222;
      margin-bottom: 5px;
    }

    .forgot-form p {
      font-size: 12px;
      color: #d9534f;
      margin: 0 0 20px;
    }

    .forgot-form input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: none;
      border-bottom: 1px solid #ccc;
      background: transparent;
      outline: none;
      color: #333;
    }

    .forgot-form button {
      width: 100%;
      background: #f08080;
      border: none;
      padding: 10px;
      border-radius: 20px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      text-transform: lowercase;
    }

  </style>
</head>
<body>

  <!-- ===== HEADER ===== -->
  <div class="header">
    <div class="logo">
      <img src="logo.png" alt="logo"> <!-- Ganti dengan logo -->
      <h1>AZFATICKET.XXI</h1>
    </div>
    <div class="nav">
      <a href="#">MOVIE</a>
      <a href="#">CINEMA</a>
      <a href="#">CONTACT</a>
      <span class="user-icon">👤</span>
    </div>
  </div>

  <!-- ===== FORGET PASSWORD FORM ===== -->
  <div class="forgot-container">
    <div class="forgot-box">
      <!-- Logo di atas box -->
      <img src="logo.png" class="logo-top" alt="logo">

      <!-- FORM -->
      <div class="forgot-form">
        <h2>AZFATICKET.XXI</h2>
        <p>CITY MALL<br><strong>forget password ?</strong></p>
        <form method="POST" action="forget-password.php">
          <input type="text" name="username" placeholder="username" required>
          <input type="password" name="new_password" placeholder="password baru" required>
          <input type="password" name="confirm_password" placeholder="password baru" required>
          <button type="submit">submit</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
