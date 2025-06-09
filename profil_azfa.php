<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Elegant Profil</title>
  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: linear-gradient(to bottom right, #ffe3e3, #ffccd5);
      min-height: 100vh;
    }

    /* NAVBAR */
    .navbar {
      background: linear-gradient(to right, #f44336, #f48fb1);
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .navbar .logo {
      font-weight: bold;
      font-size: 24px;
      color: white;
    }

    .navbar .nav-links {
      display: flex;
      gap: 30px;
      color: white;
      font-size: 18px;
      cursor: pointer;
    }

    .profile {
      position: relative;
      cursor: pointer;
    }

    .profile img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      border: 2px solid white;
    }

    .dropdown {
      position: absolute;
      top: 65px;
      right: 0;
      background: rgba(255,255,255,0.9);
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      backdrop-filter: blur(8px);
      padding: 10px;
      opacity: 0;
      visibility: hidden;
      transform: translateY(-10px);
      transition: 0.3s ease;
      z-index: 100;
    }

    .dropdown.active {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .dropdown button {
      display: block;
      background: linear-gradient(to right, #ff8a80, #ff5252);
      color: white;
      font-size: 18px;
      font-weight: 500;
      padding: 12px 20px;
      margin: 10px 0;
      width: 200px;
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .dropdown button:hover {
      background: linear-gradient(to right, #ff1744, #e53935);
      transform: scale(1.05);
    }

    /* PROFILE CARD */
    .card {
      max-width: 600px;
      margin: 60px auto;
      background: rgba(255, 255, 255, 0.9);
      padding: 40px 30px;
      border-radius: 30px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
      text-align: center;
      backdrop-filter: blur(10px);
    }

    .card .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #f44336;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.15);
    }

    .card h2 {
      color: #c2185b;
      margin-bottom: 30px;
      font-size: 26px;
    }

    .form-group {
      text-align: left;
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #f44336;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 12px 18px;
      border: 1px solid #ffcdd2;
      border-radius: 12px;
      background: #fffafa;
      font-size: 16px;
      transition: 0.2s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: #f06292;
      box-shadow: 0 0 8px rgba(240,98,146,0.3);
    }

    .form-group textarea {
      height: 100px;
      resize: none;
    }

    .submit-btn {
      margin-top: 20px;
      background: linear-gradient(to right, #f44336, #ff6e40);
      color: white;
      padding: 14px 40px;
      font-size: 18px;
      border: none;
      border-radius: 15px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .submit-btn:hover {
      transform: scale(1.05);
      background: linear-gradient(to right, #e53935, #ff7043);
    }

  </style>
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <div class="logo">AZFATICKET.XXI</div>
    <div class="nav-links">
      <div>MOVIE</div>
      <div>CINEMA</div>
      <div>CONTACT</div>
    </div>
    <div class="profile" onclick="toggleDropdown()">
      <img src="https://i.ibb.co/fMkv8NH/sample-user.jpg" alt="profile">
      <div class="dropdown" id="dropdownMenu">
        <button>My Profile</button>
        <button>Logout</button>
      </div>
    </div>
  </div>

  <!-- PROFIL FORM -->
  <div class="card">
    <img src="https://i.ibb.co/fMkv8NH/sample-user.jpg" class="profile-pic" alt="profile">
    <h2>Update Your Profile</h2>
    <form>
      <div class="form-group">
        <label>Name</label>
        <input type="text" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="text" placeholder="Enter your phone number">
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" placeholder="Enter your Gmail">
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea placeholder="Tell us something about yourself..."></textarea>
      </div>
      <button type="submit" class="submit-btn">Save</button>
    </form>
  </div>

  <script>
    function toggleDropdown() {
      document.getElementById("dropdownMenu").classList.toggle("active");
    }

    window.onclick = function(e) {
      if (!e.target.closest('.profile')) {
        document.getElementById("dropdownMenu").classList.remove("active");
      }
    }
  </script>

</body>
</html>
