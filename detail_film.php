<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Siksa Neraka - Detail Film</title>
  <style>
    /* Reset dasar */
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
    

    /* Container konten utama */
    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .film-info {
      display: flex;
      align-items: flex-start;
      gap: 30px;
      margin-bottom: 30px;
    }

    /* Poster film */
    .poster-placeholder {
      width: 200px;
      height: 280px;
      background-color: #ddd;
      border-radius: 10px;
      margin-left: 140px;
    }

    .film-detail h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .film-detail p {
      font-size: 16px;
      margin-bottom: 6px;
      color: #555;
    }

    /* Pemeran */
    .pemeran-section {
      margin-top: 30px;
      margin-left: 140px;
    }

    .pemeran-section h3 {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .pemeran-list {
      display: flex;
      gap: 10px;
      overflow-x: auto;
      padding-bottom: 10px;
    }

    .pemeran-card {
      width: 80px;
      text-align: center;
    }

    .pemeran-photo {
      width: 80px;
      height: 80px;
      background-color: #ccc;
      border-radius: 10px;
      margin-bottom: 5px;
    }

    .pemeran-name {
      font-size: 12px;
    }

    /* Deskripsi Film */
    .description-section {
      margin-top: 30px;
      margin-left: 140px;
    }

    .description-section h4 {
      font-size: 14px;
      margin-bottom: 8px;
    }

    .description-box {
      background-color: #f5c6c6;
      padding: 15px;
      border-radius: 10px;
      font-size: 14px;
      line-height: 1.6;
      width: 420px;
    }
  </style>
</head>
<body>

  <!-- Header -->
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

  <!-- Konten Utama -->
  <div class="container">

    <!-- Informasi Film -->
    <div class="film-info">
      <div class="poster-placeholder"></div>
      <div class="film-detail">
        <h2>SIKSA NERAKA</h2>
        <p><strong>Horor</strong></p>
        <p><strong>98 minutes</strong></p>
      </div>
    </div>

    <!-- Pemeran -->
    <div class="pemeran-section">
      <h3>pemeran</h3>
      <div class="pemeran-list">
        <div class="pemeran-card">
          <div class="pemeran-photo"></div>
          <div class="pemeran-name">kiesha alvaro</div>
        </div>
        <div class="pemeran-card">
          <div class="pemeran-photo"></div>
          <div class="pemeran-name">ratu sofya</div>
        </div>
        <div class="pemeran-card">
          <div class="pemeran-photo"></div>
          <div class="pemeran-name">nayla purama</div>
        </div>
        <div class="pemeran-card">
          <div class="pemeran-photo"></div>
          <div class="pemeran-name">rizky fachrel</div>
        </div>
        <div class="pemeran-card">
          <div class="pemeran-photo"></div>
          <div class="pemeran-name">astri nurdin</div>
        </div>
      </div>
    </div>

    <!-- Deskripsi -->
    <div class="description-section">
      <h4>Description :</h4>
      <div class="description-box">
        Siksa Neraka menceritakan kisah orang-orang yang mendapatkan balasan penyiksaan di akhirat karena telah berperilaku buruk selama dirinya hidup di dunia. Pada akhirnya, dosa-dosa yang mereka tumpuk dan abaikan akan menjadi bumerang bagi mereka di neraka. Dalam neraka yang panas, berbagai jenis penyiksaan akan diterapkan pada orang-orang yang memiliki berbagai sifat dan keburukan. Sesuai dengan dosa mereka, mereka akan menerima tingkat penyiksaan yang berbeda.
      </div>
    </div>

  </div>

</body>
</html>
