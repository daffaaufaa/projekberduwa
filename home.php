<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AZFATICKET.XXI</title>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #fff;
      font-family: 'Poppins', sans-serif;
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
      from { opacity: 0; transform: translateY(-50px) scale(0.9); }
      to { opacity: 1; transform: translateY(0) scale(1); }
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
      font-weight: 600;
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
      font-family: 'Lora', serif;
      text-align: center;
      font-size: 40px;
      margin: 30px 0;
      color: #c62828;
      animation: fadeInText 1.5s ease-in-out;
    }

    @keyframes fadeInText {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .voucher-container, .movie-list {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 25px;
      margin-bottom: 40px;
      animation: zoomIn 1s ease-in-out;
    }

    @keyframes zoomIn {
      0% { transform: scale(0.8); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }

    .voucher-container img, .movie-list img {
      width: 280px;
      height: auto;
      border-radius: 14px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s;
    }

    .movie-list img {
      height: 360px;
    }

    .voucher-container img:hover, .movie-list img:hover {
      transform: scale(1.07);
    }

    .movie-section, .update-section {
      text-align: center;
      margin-bottom: 60px;
    }

    .movie-section h2, .update-section h2 {
      font-size: 32px;
      font-weight: 600;
      color: #b71c1c;
      margin-bottom: 20px;
    }

    .update-section h3 {
      font-size: 24px;
      margin-bottom: 15px;
      color: #c62828;
    }

    .about-us {
      width: 70%;
      margin: 0 auto;
      font-size: 17px;
      line-height: 1.8;
      color: #333;
      padding: 20px;
      background: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 0 12px rgba(0,0,0,0.08);
      font-family: 'Lora', serif;
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
