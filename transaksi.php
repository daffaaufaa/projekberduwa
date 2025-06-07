<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AZFATiCKET.XXI</title>
  <style>
    body {
      margin: 0;
      background-color: #ffffff;
    }
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
        header {
      background-color: #f19c9c;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 24px;
    }
    .logo img {
      margin-right: 10px;
      height: 9%;
      width: 9%;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #000;
      font-weight: bold;
    }

    .profile-icon {
      width: 40px;
      height: 40px;
      background-image: url('userputih.jpg');
      background-size: contain;
      border-radius: 50%;
    }

.ticket-container {
  display: flex;
  margin: 40px auto;
  width: 80%;
  background-color: #f3a5aa;
  border-radius: 30px;
  padding: 20px;
  align-items: center;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.poster img {
  width: 250px;
  border-radius: 20px;
}

.ticket-info {
  margin-left: 30px;
  color: #333;
}

.ticket-info h2 {
  font-family: 'Courier New', monospace;
  color: #6b6b6b;
}

.ticket-info h3 {
  margin-top: 5px;
  font-size: 1.5em;
}

.transaction-details {
  margin-top: 20px;
}

.transaction-details p {
  margin: 5px 0;
}

.transaction-details .total {
  margin-top: 10px;
  font-weight: bold;
}

button {
  background-color: #ff5a5a;
  color: white;
  padding: 10px 20px;
  border: none;
  margin-top: 20px;
  border-radius: 10px;
  cursor: pointer;
  font-weight: bold;
}

  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo_web.png" alt="" />
      AZFATICKET.XXI</div>
    <nav>
      <a href="#">MOVIE</a>
      <a href="#">CINEMA</a>
      <a href="#">CONTACT</a>
    </nav>
    <div class="profile-icon"></div>
  </header>

  <main class="ticket-container">
    <div class="poster">
      <img src="https://via.placeholder.com/250x350?text=Siksa+Neraka" alt="Poster Siksa Neraka">
    </div>
    <div class="ticket-info">
      <h2>AZFATiCKET.XXI</h2>
      <h3>SIKSA NERAKA</h3>
      <p>BIOSKOP CINEMA XXI AZFA</p>
      <p>Senin, 03 Februari 2025 19.45</p>
      <hr />
      <div class="transaction-details">
        <p><strong>Detail Transaksi</strong></p>
        <p>2 Tiket <span class="seats">C4, C5</span></p>
        <p>KURSI REGULER <span>Rp. 35.000 x 2</span></p>
        <p class="total">Total Pembayaran: <strong>Rp. 70.000</strong></p>
      </div>
      <button onclick="confirmPayment()">CONFIRM PAYMENT</button>
    </div>
  </main>

  <script src="script.js"></script>
</body>
</html>
