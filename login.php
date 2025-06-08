<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        /* LOGIN BOX */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            padding: 20px;
        }
        .login-box{
            display : flex;
            background: #f08080;
            border-radius: 40px;
            padding: 40px;
            gap: 40px;
            box-shadow; 0 5px 15px rgba(0,0,0,0.2);
        }
        .login-left{
            text-align: center;
            color: white;
        }
        .login-left img{
            height: 100px;
            margin-bottom: 10px;
        }
        .login-left h2{
            font-size: 24px;
            margin: 0;
        }
        .login-left p{
            margin: 0;
            letter-spacing: 2px;
        }

        /* LOGIN FORM */
        .login-form{
            background: rgba(255,228,225,0.39);
            padding: 30px;
            border-radius: 20px;
            min-width: 250px;
            text-align: center;
        }
        .login-form h3{
            font-size: 22px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #d9534f;
        }
        .login-form form{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .login-form input {
            padding: 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            background: transparent;
            outline: none;
            color: #333;
        }
        .login-form button{
            margin-top: 15px;
            background: #f08080;
            border: none;
            padding: 10px;
            border-radius: 20px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .forgot { 
            display: block;
            margin-top: 10px;
            font-size: 12px;
            color: #d9534f;
            text-decoration: none;
        }

    </style>
</head>
<body>
     
        <!-- HEADER -->
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

    <!-- LOGIN SECTION -->
     <div class="login-container">
        <div class="login-box">
            <!-- LEFT SECTION -->
            <div class="login-left">
                <img src="logo.png" alt="">
                <h2>AZFATICKET.XXI</h2>
                <p>CITY MALL</p>
            </div>

            <!-- RIGHT SECTION: LOGIN FORM -->
             <div class="login-form">
                <h3>Login</h3>
                <form action="proses_login.php" method="post">
                    <input type="text" name="username" placeholder="username" id="">
                    <input type="password" name="password" placeholder="password" id="">
                    <button type="submit">Login</button>
                    <a class="forgot" href="forget_password">Forgot password</a>
                </form>
             </div>
        </div>
     </div>
</body>
</html>