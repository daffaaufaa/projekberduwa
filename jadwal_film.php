<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Siksa Neraka - Jadwal Tayang</title>
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

.movie-container {
  text-align: center;
  margin-top: 30px;
}

.movie-container h2 {
  font-family: 'Courier New', monospace;
  font-size: 1.6rem;
}

.divider {
  width: 50%;
  margin: 10px auto;
  border: 1px solid black;
}

.movie-card {
  background-color: #fddede;
  margin: 30px auto;
  padding: 20px;
  width: 90%;
  max-width: 1000px;
  height: 90vh;
  border-radius: 10px;
}
.movie-jarak{
    
  display: flex;
  gap: 30px;
  justify-content: center;
}

.poster {
  width: 200px;
  height: 50%;
  border-radius: 8px;
}

.info {
  text-align: left;
  flex-grow: 1;
}
.info h3{
    margin-top: 15px;
}


.tabs {
  display: flex;
  margin-top: 120px;
  gap: 20px;
  font-size: 22px;
}

.tabs span {
  font-weight: bold;
  cursor: pointer;
}

.tabs .active {
  color: red;
  border-bottom: 2px solid red;
}

.jarak{
    margin-top: 40px;
    text-align: left;
  flex-grow: 1;
}

.schedules {
  margin-top: 10px;
}

.days, .times {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin: 10px 0;
}

.days button, .times button {
  background-color: white;
  border: 2px solid #ccc;
  border-radius: 10px;
  padding: 5px 10px;
  font-weight: bold;
  cursor: pointer;
}

.pick-button {
  display: inline-block;
  margin-top: 15px;
  background-color: red;
  color: white;
  text-decoration: none;
  padding: 10px 25px;
  font-weight: bold;
  border-radius: 5px;
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

  <main class="movie-container">
    <h2>WELCOME THIS MOVIE</h2>
    <hr class="divider">

    <section class="movie-card">
        <div class="movie-jarak">
            <img class="poster" src="movie/1.jpg" alt="">
            <div class="info">
            <h3>SIKSA NERAKA</h3>
            <p><strong>Horor</strong><br>98 minutes</p>

            <div class="tabs">
            <span class="active">JADWAL</span>
            <span class="inactive">SINOPSIS</span>
            </div>
            </div>
        </div>
      
        <div class="jarak">
        <div class="schedules">
          <strong>SCHEDULES</strong>
          <div class="days">
            <button>Mon <br> 5</button>
            <button>Mon <br> 5</button>
            <button>Mon <br> 5</button>
            <button>Mon <br> 5</button>
            <button>Mon <br> 5</button>
            <button>Mon <br> 5</button>
          </div>

          <strong>TIME MOVIE</strong>
          <div class="times">
            <button>10:50</button>
            <button>13:00</button>
            <button>10:50</button>
            <button>10:50</button>
            <button>10:50</button>
            <button>10:50</button>
          </div>
        </div>
        <hr>
        <a href="#" class="pick-button">PICK YOUR SEAT</a>
      </div>
    </section>
  </main>
</body>
</html>
