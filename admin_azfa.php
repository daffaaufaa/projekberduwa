<?php
include "koneksi.php";
$sql = "SELECT * FROM movies ORDER BY id_movie DESC";
$query = mysqli_query($koneksi,$sql);
while($movies= mysqli_fetch_assoc($query)){ 
    $id_movies = $movies['id_movies'];
     break; 
    } 


$sql2 = "SELECT * FROM movies ";
$query2 = mysqli_query($koneksi,$sql2);
while($movie= mysqli_fetch_assoc($query2)){ 
    $id_movie = $movie['id_movies'];
     break; 
    } 

if(isset($_POST['jumlah'])){
    $jumlah = $_POST['jumlah'];
    
}else{
    $jumlah = 1;
    
}
$sql = "SELECT gambar FROM iklan ORDER BY id_iklan DESC";
$query = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin AZFATICKET.XXI</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      height: 100vh;
      background: linear-gradient(to bottom right, #fff0f0, #ffe6e6);
      animation: fadeIn 0.8s ease-in;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* === NAVBAR === */
    .navbar {
      background-color: #b30000;
      color: white;
      padding: 40px 75px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 0 0 20px 20px; 
    }

    .navbar .logo {
      font-size: 25px;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .main {
      display: flex;
      flex: 1;
    }

    /* === SIDEBAR === */
    .sidebar {
      width: 250px;
      background-color: #fff;
      padding: 30px 20px;
      box-shadow: 4px 0 15px rgba(0, 0, 0, 0.05);
      animation: fadeIn 1.2s ease;
    }

    .sidebar h3 {
      color: #b30000;
      margin-bottom: 20px;
    }

    .sidebar button {
      display: block;
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      background-color: #b30000;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.2s;
    }

    .sidebar button:hover {
      background-color: #990000;
      transform: scale(1.03);
    }

    /* === CONTENT AREA === */
    .content {
      flex: 1;
      padding: 40px;
      animation: fadeIn 1.5s ease-in-out;
    }

    .section {
      display: none;
    }

    .section.active {
      display: block;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .section h2 {
      color: #b30000;
      margin-bottom: 20px;
    }

    .section input, .section textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ffd6d6;
    }

    .section button {
      background-color: #b30000;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">🎬 AZFATICKET.XXI</div>
  </div>

  <!-- Main Area -->
  <div class="main">
    <!-- Sidebar -->
    <div class="sidebar">
      <h3>Manajemen</h3>
      <button onclick="showSection('movie')">Management Movie</button>
      <button onclick="showSection('jadwal')">Management Jadwal</button>
      <button onclick="showSection('iklan')">Management Iklan</button>
      <button onclick="showSection('transaksi')">Management Transaksi</button>
    </div>

    <!-- Content Area -->
    <div class="content">
      <div id="movie" class="section active">
        <form action="prs_tambah_movies.php" method="post" enctype="multipart/form-data">
        <label for="">Judul :</label><br>
        <input type="text" name="title" id=""><br><br>

        <label for="">genre :</label><br>
        <input type="radio" name="genre" id="horor" value="horor">
        <label for="horor">horor</label><br>
        <input type="radio" name="genre" id="komedi" value="komedi">
        <label for="komedi">komedi</label><br>
        <input type="radio" name="genre" id="romance" value="romance">
        <label for="romance">romance</label><br><br>

        <label for="">description :</label><br>
        <textarea name="description" id="" cols="30" rows="10"></textarea><br><br>

        <label for="">tanggal release :</label><br>
        <input type="date" name="release_date" id=""><br><br>

        <label for="">durasi :</label><br>
        <input type="time" name="duration" id=""><br><br>

        <label for="">gambar movies :</label><br>
        <input type="file" name="poster_image" id="" accept=".jpg"><br><br>

        <label for="">max tayang :</label><br>
        <input type="date" name="max_tayang" id=""><br><br>

        <input type="submit" value="Tambah" name="submit">
        
    </form>
      </div>
      <div id="jadwal" class="section">
       <h2>Form Tambah Jadwal</h2><br><br>
    <form action="tambah_jadwal.php" method="post">
        <label for="">Jumlah Jadwal</label><br>
        <input type="number" name="jumlah" id="">
        <input type="submit" value="Ya"><br><br><br>
    </form>
    <form action="prs_tambah_jadwal.php" method="post">
        <?php while($jumlah >= 1){ ?>
            <label for="">Tanggal</label><br>
            <input type="date" name="tanggal[]" id=""><br><br>

            <label for="">Waktu</label><br>
            <input type="time" name="waktu[]" id=""><br><br>

            <label for="">Id Movies</label><br>
            <input type="number" name="id_movies[]" id="" min="<?= $id_movie ?>" max="<?= $id_movies ?>"><br><br><br><br>
        <?php $jumlah -= 1;} ?>
        <input type="submit" value="Tambah" name="tambah">
        
    </form>
      </div>
      <div id="iklan" class="section">
       h3>Tambah Gambar</h3><br>
       <form action="prs_tambah_gambar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="gambar" id="" ><br><br>
        <input type="submit" value="Tambah gambar" name="submit">
      </form>
      </div>
      <div id="transaksi" class="section">
        <h2>Edit Transaksi</h2>
        <input type="text" placeholder="ID Transaksi">
        <input type="number" placeholder="Jumlah">
        <button>Simpan</button>
      </div>
    </div>
  </div>

  <script>
    function showSection(id) {
      const sections = document.querySelectorAll('.section');
      sections.forEach(section => section.classList.remove('active'));
      document.getElementById(id).classList.add('active');
    }
  </script>
</body>
</html>
