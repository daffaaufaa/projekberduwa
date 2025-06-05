<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Account - AZFATICKET.XXI</title>
  <style>
    /* ==== HEADER SECTION ==== */
    .header {
      background: #f08080; /* Warna merah muda */
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

    /* ==== MAIN CONTAINER (REGISTER SECTION) ==== */
    .register-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px;
      padding: 20px;
    }
    .register-box {
      display: flex;
      background: #f08080; /* Warna dasar box */
      border-radius: 40px;
      padding: 40px;
      gap: 40px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* ==== FORM DI SEBELAH KIRI ==== */
    .register-form {
      background: #ffe4e1; /* Latar belakang form */
      padding: 30px;
      border-radius: 20px;
      min-width: 250px;
      text-align: center;
    }
    .register-form h3 {
      font-size: 20px;
      margin-bottom: 20px;
      font-weight: bold;
      color: #d9534f;
      text-transform: lowercase;
    }
    .register-form form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .register-form input {
      padding: 8px;
      border: none;
      border-bottom: 1px solid #ccc;
      background: transparent;
      outline: none;
      color: #333;
    }
    .register-form button {
      margin-top: 15px;
      background: #f08080;
      border: none;
      padding: 10px;
      border-radius: 20px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      text-transform: lowercase;
    }

    /* ==== LOGO DAN TEKS DI KANAN ==== */
    .register-right {
      text-align: center;
      color: white;
    }
    .register-right img {
      height: 100px;
      margin-bottom: 10px;
    }
    .register-right h2 {
      font-size: 24px;
      margin: 0;
      color: red;
    }
    .register-right p {
      margin: 0;
      letter-spacing: 2px;
      color: red;
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

  <!-- REGISTER SECTION -->
  <div class="register-container">
    <div class="register-box">
      <!-- FORM KIRI -->
      <div class="register-form">
        <h3>create account</h3>
        <form action="register.php" method="POST">
          <input type="text" name="username" placeholder="username" required>
          <input type="password" name="password" placeholder="password" required>
          <button type="submit">create</button>
        </form>
      </div>

      <!-- LOGO KANAN -->
      <div class="register-right">
        <img src="logo.png" alt="logo"> <!-- Ganti sesuai path -->
        <h2>AZFATICKET.XXI</h2>
        <p>CITY MALL</p>
      </div>
    </div>
  </div>

</body>
</html>
