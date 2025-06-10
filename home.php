<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AZFATICKET.XXI</title>
  <style>
    @font-face {
      src: url('font/KeaniaOne.ttf') format('truetype');
      font-family: 'KeaniaOne';
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #fff;
      font-family: Arial, sans-serif;
      overflow-x: hidden;
      animation: fadeInBody 1s ease-in;
    }

    @keyframes fadeInBody {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    header {
      background-color: #c62828;
      color: white;
      padding: 25px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      border-radius: 0 0 50px 50px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
      animation: navFadeIn 1s ease-in-out;
    }

    @keyframes navFadeIn {
      0% {
        opacity: 0;
        transform: translateY(-50px) scale(0.9);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 28px;
    }

    .logo img {
      margin-right: 10px;
      height: 50px;
      width: auto;
    }

    nav a {
      margin: 0 18px;
      text-decoration: none;
      color: white;
      font-weight: bold;
      font-size: 18px;
      position: relative;
      transition: all 0.4s ease;
    }

    nav a::after {
      content: '';
      display: block;
      width: 0;
      height: 2px;
      background: white;
      transition: width 0.3s;
      position: absolute;
      bottom: -5px;
      left: 0;
    }

    nav a:hover::after {
      width: 100%;
    }

    nav a:hover {
      transform: scale(1.1);
    }

    .profile-icon {
      width: 45px;
      height: 45px;
      background-image: url('userputih.jpg');
      background-size: cover;
      border-radius: 50%;
      border: 2px solid white;
    }

    .welcome {
      font-family: "KeaniaOne";
      text-align: center;
      font-size: 36px;
      margin: 30px 0;
      color: #c62828;
      animation: fadeInText 1.5s ease-in-out;
    }

    @keyframes fadeInText {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .voucher-container, .movie-list {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 40px;
      animation: fadeInCards 1.2s ease-in-out;
    }

    .voucher-container img, .movie-list img {
      width: 200px;
      height: 120px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .movie-list img {
      height: 210px;
    }

    .voucher-container img:hover, .movie-list img:hover {
      transform: scale(1.05);
    }

    @keyframes fadeInCards {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .movie-section, .update-section {
      text-align: center;
      margin-bottom: 40px;
    }

    .movie-section h2, .update-section h2 {
      font-size: 28px;
      font-weight: bold;
      color: #b71c1c;
      margin-bottom: 20px;
    }

    .update-section h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #c62828;
    }

    .about-us {
      width: 60%;
      margin: 0 auto;
      font-size: 15px;
      line-height: 1.6;
      color: #333;
    }

    footer {
      background-color: #c62828;
      color: white;
      padding: 30px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      animation: fadeInFooter 1.2s ease-in;
    }

    @keyframes fadeInFooter {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .social-media, .download, .contact {
      width: 30%;
    }

    .social-media h4, .download h4, .contact h4 {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .social-media p, .contact p {
      margin-bottom: 5px;
      font-size: 14px;
    }

    .download img {
      width: 120px;
      margin-right: 10px;
    }

    .copyright {
      width: 100%;
      text-align: center;
      font-size: 12px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo_web.png" alt="Logo" />
      AZFATICKET.XXI
    </div>
    <nav>
      <a href="#">MOVIE</a>
      <a href="#">CINEMA</a>
      <a href="#">CONTACT</a>
    </nav>
    <div class="profile-icon"></div>
  </header>

  <div class="welcome">Welcome <?= $username; ?></div>

  <div class="voucher-container">
    <?php while($gambar= mysqli_fetch_assoc($query)){ ?>
        <img src="iklan/<?= $gambar['gambar']?>" alt="">
    <?php } ?>
  </div>

  <div class="movie-section">
    <h2>MOVIE SELECTION</h2>
    <div class="movie-list">
      <?php while($gambar2=mysqli_fetch_assoc($query2)){ ?>
        <a href="jadwal_film.php?id_movies=<?= $gambar2['id_movies'] ?>">
          <img src="movie/<?= $gambar2['poster_image']?>" alt="">
        </a>
      <?php } ?>
    </div>
  </div>

  <div class="update-section">
    <h2>AZFA UPDATE</h2>
    <h3>About Us</h3>
    <p class="about-us">
      Azfa Bioskop adalah tempat terbaik untuk menikmati film dengan pengalaman menonton yang nyaman, modern, dan seru. Kami menyajikan berbagai film pilihan dari dalam dan luar negeri, lengkap dengan teknologi layar dan suara terkini. <br><br>
      Bukan sekadar bioskop, Azfa adalah ruang berkumpul untuk keluarga, sahabat, dan komunitas pecinta film. Kami hadir untuk menghadirkan hiburan berkualitas dan momen tak terlupakan di setiap tayangan. <br><br>
      AZFATICKET.XXI – Tempat cerita dimulai!
    </p>
  </div>

  <footer>
    <div class="social-media">
      <h4>Social Media</h4>
      <p>@azfabioskop_1indonesia</p>
      <p>@azfabioskopindonesia</p>
    </div>
    <div class="download">
      <h4>Download by</h4>
      <img src="#" alt="Google Play">
      <img src="#" alt="App Store">
    </div>
    <div class="contact">
      <h4>Contact Me</h4>
      <p>Jl. Kenyamanan Blok A no. 4 Jakarta pusat</p>
      <p>+62 857 8663 7284</p>
      <p>azfaticket@gmail.com</p>
    </div>
    <div class="copyright">
      COPYRIGHT 2025. AZFA XXI ALL RIGHTS RESERVED.
    </div>
  </footer>
</body>
</html>
