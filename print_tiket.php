<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cetak Tiket - AZFATiCKET.XXI</title>
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


/* batas */
.ticket-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top: 40px;
}

.ticket-card {
  width: 300px;
  background-color: #e6696e;
  color: black;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  text-align: center;
}

.poster {
  width: 100%;
  border-radius: 10px;
  margin: 10px 0;
}

h2 {
  font-weight: bold;
}

.genre {
  font-weight: normal;
}

.subtext {
  font-size: 0.8em;
  color: #333;
  margin-bottom: 15px;
}

.ticket-details {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  font-size: 0.9em;
  text-align: left;
  margin-bottom: 10px;
}

hr {
  margin: 10px 0;
  border-top: 2px dashed #000;
}

.barcode {
  width: 100%;
  height: 60px;
  background-image: repeating-linear-gradient(
    to right,
    #000,
    #000 2px,
    transparent 2px,
    transparent 4px
  );
}

button {
  margin-top: 30px;
  background-color: red;
  color: white;
  font-weight: bold;
  padding: 12px 30px;
  border: none;
  border-radius: 20px;
  font-size: 1rem;
  cursor: pointer;
}

@media print {
  .navbar, button {
    display: none;
  }

  .ticket-wrapper {
    margin: 0;
    padding: 0;
  }

  body {
    background-color: white;
  }
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

  <main class="ticket-wrapper">
    <div class="ticket-card" id="ticket">
      <h2>TICKET</h2>
      <img class="poster" src="https://via.placeholder.com/300x100?text=Siksa+Neraka" alt="Siksa Neraka" />
      <h3>SIKSA NERAKA - <span class="genre">horor</span></h3>
      <p class="subtext">Show this ticket at the entrance</p>

      <div class="ticket-details">
        <div>
          <strong>CINEMA</strong><br>AZFA BIOSKOP MALL XXI
        </div>
        <div>
          <strong>DATE</strong><br>03 Feb 2025
        </div>
        <div>
          <strong>TIMER</strong><br>19:45
        </div>
        <div>
          <strong>SECTION</strong><br>C
        </div>
        <div>
          <strong>SEAT</strong><br>C4, C5
        </div>
        <div>
          <strong>COST</strong><br>Rp. 70.000
        </div>
        <div>
          <strong>ID ORDER</strong><br>78954
        </div>
      </div>

      <hr />
      <div class="barcode"></div>
    </div>

    <button onclick="window.print()">PRINT</button>
  </main>
</body>
</html>
