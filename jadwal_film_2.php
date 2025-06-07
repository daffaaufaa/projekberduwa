<?php
include "koneksi.php";
session_start();

// if(!isset($_SESSION['username'])){
//     header("location:login.php?logindulu");
//     exit;
// }
$id_movie = $_GET['id_movie'];

$sql = "SELECT * FROM movies WHERE id_movies = '$id_movie'";
$query = mysqli_query($koneksi,$sql);

while($background= mysqli_fetch_assoc($query)){
    $gambar = $background['poster_image'];
    $judul = $background['title'];
    $genre = $background['genre'];
    $durasi = $background['duration'];
    $description = $background['description'];
    break;
}

$sql2 = "SELECT * FROM jadwal_waktu WHERE id_movies = '$id_movie'";
$query2 = mysqli_query($koneksi,$sql2);

$sql3 = "SELECT * FROM jadwal_waktu WHERE id_movies = '$id_movie'";
$query3 = mysqli_query($koneksi,$sql3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        @font-face {
            src: url('font/KeaniaOne.ttf') format('truetype');
            font-family: 'KeaniaOne';
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            src: url('font/BalooTamma.ttf') format('truetype');
            font-family: 'BalooTamma';
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            src: url('font/BakbakOne.ttf') format('truetype');
            font-family: 'BakbakOne';
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            src: url('font/BalsamiqSans.ttf') format('truetype');
            font-family: 'BalsamiqSans';
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            src: url('font/Lalezar.ttf') format('truetype');
            font-family: 'Lalezar';
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            src: url('font/Lora.ttf') format('truetype');
            font-family: 'Lora';
            font-weight: normal;
            font-style: normal;
        }
        .navbar {
            display : flex;
            align-items: center;
            background-color:rgba(231, 0, 0, 0.39);
            padding : 5px 15px;
            justify-content: space-between;
            margin-top: 5vh;
            
        }
        .navbar h1{
            color: black;
            text-decoration: none;
            font-size: 35px;
            margin-left: 80px;
            margin-right: 500px;
        }
        .navbar a{
            color: black;
            text-decoration:none;
            font-size: 20px;
        }
        .navbar a:hover{
            text-decoration: underline;
        }
        .navimg2 img{
            border-radius : 30px;
            width: 55px;
            height: 55px;
            
        }

        .paragraph{
            font-family: "KeaniaOne";
            font-size: 30px;
            border-bottom: 3px solid black;
            width: 30%;
            padding-bottom: 2vh;
        }
        
        .background{
            background-color: #FF080814;
            width: 80%;
            height: 140vh;
            background-position: center;
            margin-left: 10%;
            
        }
       

        .movie img{
            width: 19%;
            height : 30%;
            margin-top: 5vw;
            margin-left: 5vw;
            border-radius: 8%;

        }


        .posisi{
            color: black;
        }
        .posisi h1{
            position: absolute;
            left : 34vw;
            top : 20vw;
            font-family: "BalooTamma";
            font-size: 40px;
            font-weight: bold;
        }
        .posisi #a{
            position: absolute;
            left : 34vw;
            top : 24vw;
            font-family: "BakbakOne";
            font-size: 23px;
            color:rgba(0, 0, 0, 0.7);
        }
        .posisi #b{
            position: absolute;
            left : 34vw;
            top : 26vw;
            font-family: "BakbakOne";
            font-size: 23px;
            color:rgba(0, 0, 0, 0.7);
        }

        
        .tempat {
            position: absolute;
            left : 500px;
            top : 440px;
        }

        
        #sinopsi label{
            position: absolute;
            left : 33vw;
            top : 35vw;
            width: 180px;
            height: 50px;
            background:rgba(255, 255, 255, 0);
            border-bottom: none;
            border-left: none;
            border-right: none;
            border-top: none;
            color:rgba(0, 0, 0, 0.4);
            font-family: "BalsamiqSans";
            font-size: 30px;
            padding-left: 3vw;
            cursor: pointer;
        }
        #sinopsi input[type=radio]:checked + label {
            border-bottom: 2px solid #FF0808;
            color: #FF0808;
        }


        #jadwal label {
            position: absolute;
            left : 55vw;
            top : 35vw;
            width: 180px;
            height: 50px;
            background:rgba(255, 255, 255, 0);
            border-bottom: none;
            border-left: none;
            border-right: none;
            border-top: none;
            color:rgba(0, 0, 0, 0.4);
            font-family: "BalsamiqSans";
            font-size: 30px;
            padding-left: 3.5vw;
            cursor: pointer;
        }
        #jadwal input[type=radio]:checked + label {
            border-bottom: 2px solid #FF0808;
            color: #FF0808;
        }



        #description p{
            margin-left: 6vw;
            margin-top: 5vw;
            width: 90%;
            height: auto;
            color: black;
            font-size: 24px;
            font-family: "Lora";
            font-weight: bold;
            
        }


        .div1 p{
            font-family: "Lalezar";
            font-size: 30px;
            border-bottom: 3px #000000 solid;
            width: 6em;
            margin-left: 6vw;
            margin-top: 1vw;
        }   
        .div2 p{
            font-family: "Lalezar";
            font-size: 30px;
            border-bottom: 3px #000000 solid;
            width: 6em;
            margin-left: 6vw;
            margin-top: 2vw;
        }
        
        hr {
            width: 90%;
            border: solid 1.6px #000000;
            margin-top: 50px ;
        }



        .tanggal {
            display: flex;
            margin-left: 4vw;
            margin-top: 1vw;
            margin-bottom: 10px;
        }
        .tanggal {
            font-size: 20px;
        }
        .tanggal label {
            padding: 10px 20px;
            border: 2px solid rgb(0, 0, 0);
            border-radius: 5px;
            cursor: pointer;
            color:rgb(0, 0, 0);
            transition: all 0.2s ease-in-out;
            font-weight: bold;
            margin-left: 10px;
        }
        .tanggal input[type="radio"]:checked + label {
            background-color: #B32C2E;
            color: white;
        }

        input[type="radio"] {
            display: none;
        }


        .waktu {
            display: flex;
            margin-left: 4vw;
            margin-top: 1vw;
        }
        .waktu label{
            font-size: 30px;
        }
        .waktu label {
            padding: 10px 20px;
            border: 2px solid rgb(0, 0, 0);
            border-radius: 5px;
            cursor: pointer;
            color:rgb(0, 0, 0);
            transition: all 0.2s ease-in-out;
            font-weight: bold;
            margin-left: 10px;
        }
        .waktu input[type="radio"]:checked + label {
            background-color: #B32C2E;
            color: white;
        }

        
        #isi_jadwal input[type=submit]{
            width: 15em;
            height: 3em;
            margin-left: 50vw;
            margin-top: 25px;
            border: none;
            background: url('background_merah.png') no-repeat ;
            background-size: contain;
            color: black;
            font-size: 25px;
            padding-bottom: 22px;
            font-weight: bold;
            cursor: pointer;
        }
        
    </style>
</head>
<body>

    <div class= "navbar">
        <h1>AZFATicket.XXI</h1>
        <a href="movie.php">MOVIE</a> 
        <a href="#">CINEMA</a>
        <a href="#">CONTACT</a>
        <div class="navimg2"><a href="profil.php"><img src="userputih.jpg" alt=""></a></div>
    </div>
    
    <center><p class="paragraph">WELCOME THIS MOVIE</p></center>

    <div class="background">
        <div class="movie"><img src="movie/<?= $gambar ?>" alt=""></div>
    
        <div class="posisi">
            <h1><?= strtoupper($judul) ?></h1>
            <h2 id="a"><?= ucfirst($genre)?></h2>
            <h2 id="b"><?= $durasi ?></h2>
        </div>



        <script>
            window.onload = function() {
                document.getElementById('si_nopsi').click();
            };
        </script>
        <div id="sinopsi" onclick= "style_isi_jadwal()">
            <input type="radio" id="si_nopsi"  name="sinopsi" value="sinopsi">
            <label for="si_nopsi">SINOPSI</label>
        </div>

        <div id="jadwal" onclick= "style_deskripsi()">
            <input type="radio" id="ja_dwal"  name="sinopsi" value="jadwal">
            <label for="ja_dwal">JADWAL</label>
        </div>
        <script>
            function style_isi_jadwal() {
                const btn = document.getElementById('isi_jadwal');
                btn.style.display = 'none';
                
                document.getElementById('description').style.display='block';
            }
            
            function style_deskripsi () {
                const btn2 = document.getElementById('description');
                btn2.style.display= 'none';
                btn2.style.background= 'transparent';
                document.getElementById('isi_jadwal').style.display='block';
            }

        </script>
        
        <div id="description"><p><?= ucfirst($description) ?></p><br></div>

        <div id="isi_jadwal">
        <div class="div1"><p>SCHEDULES</p></div>
        <form action="kursi.php" method="post">
            <input type="hidden" name="id_movie" value="<?= $id_movie ?>">
        

            <div class="tanggal">
                <?php while($tanggal = mysqli_fetch_assoc($query3)){
                    $date = new DateTime($tanggal['tanggal']);
                
                    $nm_hari = [
                        'Monday' => 'SENIN', 'Tuesday' => 'SELASA', 'Wednesday' => 'RABU', 'Thursday' => 'KAMIS',
                        'Friday' => 'JUMAT', 'Saturday' => 'SABTU', 'Sunday' => 'MINGGU'
                    ];

                    $day = $date->format('d'); // hari 2 angka, pake nol
                    $bulan = $date->format('M'); // bulan 3 huruf depan
                    $hari = $date->format('l');
                
                    $format = "$day $bulan "; // Output: 1 Feb
                
                    $array_hari = "{$nm_hari[$hari]}";
                ?>
                <input type="radio" id="<?= $day ?>"  name="tanggal" value="<?= $tanggal['tanggal'] ?>">
                <label for="<?= $day ?>"><?= $format ?><br><?= $array_hari ?></label>

                
            <?php } ?>
            </div>
            
            <div class="div2"><p>TIME MOVIE </p></div>
    
            <div class="waktu">
                <?php while($waktu = mysqli_fetch_assoc($query2)){?>
                    <input type="radio" id="<?= $waktu['id_jadwal_waktu'] ?>"  name="waktu" value="<?= $waktu['waktu'] ?>">
                    <label for="<?= $waktu['id_jadwal_waktu'] ?>"><?= $waktu['waktu'] ?></label>
                <?php } ?>

            </div>
            <hr>
            <input type="submit" value="PICK YOUR SEAT">
        </form>

        </div>
    </div>
    <br><br><br><br>
</body>
</html>