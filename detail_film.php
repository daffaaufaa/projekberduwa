<?php
include "koneksi.php";
// if(!isset($_GET['id_movies'])){
//   header("location:home.php");
// }
$id_movies = $_GET['id_movies'];
$sql = "SELECT * FROM movies WHERE id_movies='$id_movies'";
$query = mysqli_query($koneksi, $sql);
$movies = mysqli_fetch_assoc($query);

$sql2 = "SELECT * FROM artis_movies WHERE id_movies='$id_movies'";
$query2 = mysqli_query($koneksi, $sql2);

?>
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
    .film-info img{
      width: 200px;
      height: 280px;
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
      font-size: 12px;
    }

    .pemeran-card img {
      width: 80px;
      height: 80px;
      border-radius: 10px;
      margin-bottom: 5px;
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
      <img src="movie\<?= $movies['poster_image']?>" alt="">
      <div class="film-detail">
        <h2><?= $movies['title'] ?></h2>
        <p><strong><?= ucfirst($movies['genre']) ?></strong></p>
        <p><strong>98 minutes</strong></p>
      </div>
    </div>

    <!-- Pemeran -->
    <div class="pemeran-section">
      <h3>pemeran</h3>
      <div class="pemeran-list">
        <?php while($artis= mysqli_fetch_assoc($query2)){ ?>
        <div class="pemeran-card">
          <img src="artis\<?= $artis['artis_image']?>.jpg" alt="">
          <?= $artis['artis_name'] ?>
        </div>
        <?php } ?>
      </div>
    </div>

    <!-- Deskripsi -->
    <div class="description-section">
      <h4>Description :</h4>
      <div class="description-box">
        <?= $movies['description'] ?>
      </div>
    </div>

  </div>

</body>
</html>
