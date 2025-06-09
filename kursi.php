<?php
include "koneksi.php";

if(!isset($_POST['id_movies']) || !isset($_POST['tanggal']) || !isset($_POST['waktu'])){
  header("location:jadwal_film.php");
}

$waktu = $_POST['waktu'];
$tanggal = $_POST['tanggal'];

$id_movies = $_POST['id_movies'];
$sql = "SELECT * FROM movies WHERE id_movies = '$id_movies'";
$query = mysqli_query($koneksi, $sql);

$date = new DateTime($tanggal);

$bulan = $date->format('F'); 
$tanggal_hari = $date->format('d'); 
$nama_hari = $date->format('l'); 

$i = 1;
$a = 1;
$b = 1;
$c = 1;
$d = 1;
$e = 1;

$sql2 = "SELECT seats_booked FROM bookings WHERE id_movies = '$id_movies'";
$query2 = mysqli_query($koneksi,$sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* navbar dan body */
    @font-face {
      src: url('font/KeaniaOne.ttf') format('truetype');
      font-family: 'KeaniaOne';
      font-weight: normal;
      font-style: normal;
    }
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

    .posisi {
      text-align: center;
    }
    .font {
      font-family: 'KeaniaOne';
      font-size: 29px;
      margin-top: 30px;
      
    }
    .border {
      width: 20%;
      margin: 5px auto;
      border: 2px solid black;

    }

    .judul {
      margin-top: 20px;
      color:rgba(0, 0, 0, 0.69);
    }

    .judul .kecil{
      font-size: 15px;
    }

    /* kursi */
    .box {
      display: inline-block;
      padding: 15px;
      background-repeat: no-repeat;
      background-size: cover;
      color: white;
    }

    .background {
            margin-left: 215px;
            background: linear-gradient(#17037d,#54488f,#999999) no-repeat; 
            width: 1100px;
            height: 320px;
            border-radius: 15px;
            padding: 20px;
        }
        .background h4{
            color: white;
            font-size: 15px;
            background:rgba(153, 153, 153, 0);
            border: solid 2px white;
            border-radius: 5px;
            width: 13px;
            height: 20px;
            padding: 7px 12px;
            
        }

        
         input[type="checkbox"]:checked + label {
            background-color:rgb(92, 60, 248);
            color: white;
            border: 2px solid rgb(255, 255, 255);
        }
         label {
            padding: 7px 12px;
            border: 2px solid rgb(255, 255, 255);
            border-radius: 5px;
            cursor: pointer;
            color:rgb(252, 252, 252);
            transition: all 0.2s ease-in-out;
            font-weight: bold;
            
            margin-left: 10px;
        }
        input[type="checkbox"] {
            display: none;
        }

        .A1 {
            position: absolute;
            left: 400px;
            top: 409px;
        }

        .A2 {
            position: absolute;
            left: 800px;
            top: 409px;
        }

        .B1 {
            position: absolute;
            left: 350px;
            top: 468px;
        }

        .B2 {
            position: absolute;
            left: 800px;
            top: 468px;
        }

        .C1 {
            position: absolute;
            left: 350px;
            top: 526px;
        }

        .C2 {
            position: absolute;
            left: 800px;
            top: 526px;
        }

        .D1 {
            position: absolute;
            left: 400px;
            top: 583px;
        }

        .D2 {
            position: absolute;
            left: 800px;
            top: 583px;
        }

        .E1 {
            position: absolute;
            left: 350px;
            top: 641px;
        }

        .E2 {
            position: absolute;
            left: 800px;
            top: 641px;
        }
        
        input[type="checkbox"]:disabled + label {
            background-color:rgb(201, 199, 199);
        }

        input[type="submit"] {
            width: 300px;
            height: 60px;
            margin-left: 750px;
            border-radius: 10px;
            border: none;
            background:rgba(74, 9, 144, 0.23);
            color: white;
            font-size: 25px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            left: 200px;
            top: 730px;
        }


        .kosong {
            padding: 7px 12px;
            border: 2px solid rgb(255, 255, 255);
            border-radius: 5px;
            width: 10px;
            height: 18px;
            position: absolute;
            left: 1200px;
            top: 500px;
            
        }
        .tempat1 {
            color: white;
            font-weight: bold;
            font-size: 20px;
            position: absolute;
            left: 1250px;
            top: 480px;
        }

        .memilih {
            padding: 7px 12px;
            background-color:rgb(92, 60, 248);
            border: 2px solid rgb(255, 255, 255);
            border-radius: 5px;
            width: 10px;
            height: 18px;
            position: absolute;
            left: 1200px;
            top: 550px;
            
        }
        .tempat2 {
            color: white;
            font-weight: bold;
            font-size: 20px;
            position: absolute;
            left: 1250px;
            top: 530px;
        }

        .terbooking {
            padding: 7px 12px;
            background-color:rgb(201, 199, 199);
            border: 2px solid rgb(255, 255, 255);
            border-radius: 5px;
            width: 10px;
            height: 18px;
            position: absolute;
            left: 1200px;
            top: 600px;
            
        }
        .tempat3 {
            color: white;
            font-weight: bold;
            font-size: 20px;
            position: absolute;
            left: 1250px;
            top: 580px;
        }

    </style>
</head>
<body>
    <!-- header -->
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

  <div class="posisi">
    <h3 class="font">PICK SEATS</h3>
    <hr class="border">
  
    <div class="judul">
      <h3><?= ucwords(mysqli_fetch_assoc($query)['title'])  ?></h3>
      <h3 class="kecil"><?= $tanggal_hari ?> <?= $bulan ?> - <?= $nama_hari ?> - <?= $waktu ?></h3>
    </div>
  </div>
 

  <div class="box">
    <div class="background">
        <h4>A</h4>
        <h4>B</h4>
        <h4>C</h4>
        <h4>D</h4>
        <h4>E</h4>
        <form action="transaksi.php" method="post">
            <input type="hidden" name="id_movies" value="<?= $id_movies ?>">
            <input type="hidden" name="tanggal" value="<?= $tanggal ?>">
            <input type="hidden" name="jam" value="<?= $waktu ?>">

            <div class="A1">
            <?php while($i <= 62){?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $a ?></label>
                    
            <?php 
                if($a== 6){
                    break;
                }
                $i += 1;
                $a += 1;
            } ?>
            </div>

            <div class="A2">
            <?php while($i <= 62){
                if($a== 12){
                    $i += 1;
                    
                    break;
                }
                $i += 1;
                $a += 1;
                ?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $a ?></label>
                    
            <?php } ?>
            </div>


            <div class="B1">
            <?php while($i <= 62){?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $b ?></label>

            <?php 
                if($b== 7){
                    break;
                }
                $i += 1;
                $b += 1;
            } ?>
            </div>

            <div class="B2">
            <?php while($i <= 62){
                if($b== 14){
                    $i += 1;
                
                    break;
                }
                $i += 1;
                $b += 1;?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $b ?></label>
                
            <?php } ?>
            </div>

            <div class="C1">
            <?php while($i <= 62){?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $c ?></label>
               
            <?php 
                if($c== 7){
                    break;
                }
                $i += 1;
                $c += 1;
            } ?>
            </div>

            <div class="C2">
            <?php while($i <= 62){
                if($c== 12){
                    $i += 1;
                
                    break;
                }
                $i += 1;
                $c += 1;?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>" >
                    <label id= "<?= $i ?>" for="<?= $i ?>"><?= $c ?></label>
               
            <?php } ?>
            </div>

            <div class="D1">
            <?php while($i <= 62){?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $d ?></label>
                
            <?php 
                if($d== 6){
                    break;
                }
                $i += 1;
                $d += 1;
            } ?>
            </div>

            <div class="D2">
            <?php while($i <= 62){
                if($d== 11){
                    $i += 1;
                
                    break;
                }
                $i += 1;
                $d += 1;?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $d ?></label>
                
            <?php } ?>
            </div>

            <div class="E1">
            <?php while($i <= 62){?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $e ?></label>
                
            <?php 
                if($e== 7){
                    break;
                }
                $i += 1;
                $e += 1;
            } ?>
            </div>

            <div class="E2">
            <?php while($i <= 62){
                if($e== 13){
                    $i += 1;
                
                    break;
                }
                $i += 1;
                $e += 1;?>
                
                    <input type="checkbox" id="<?= $i ?>"  name="kursi[]" value="<?= $i ?>">
                    <label for="<?= $i ?>"><?= $e ?></label>
                
            <?php } ?>
            </div>

            <input type="submit" value="BELI TIKET">
        </form>
        <script>
                <?php while($css = mysqli_fetch_assoc($query2)){ ?>
                    document.getElementById("<?= $css['seats_booked'] ?>").disabled = true;
                <?php } ?>
        </script>
        <div class="kosong"></div><div class="tempat1"><h5>: Kosong</h5></div>
        <div class="memilih"></div><div class="tempat2"><h5>: Memilih</h5></div>
        <div class="terbooking"></div><div class="tempat3"><h5>: Terbooking</h5></div>
    </div>
  </div>

</body>
</html>