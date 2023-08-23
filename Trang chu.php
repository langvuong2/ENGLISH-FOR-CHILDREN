<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVOCADO ENGLISH</title>
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
      <style>
      @keyframes blink {
            50% {
                opacity: 0;
            }
        }
        .blink {
            animation: blink 1s infinite;
            color: #c62028;
        }

        body{
          background-color: #b1c78d;
        }
      .body {
        font-family: Arial, sans-serif;
        margin: 1;
        padding: 0;
        text-emphasis: none;
      }
      
      header {
        background-image: url("./img/HDTC.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 80%;
        border: 0;
      }
  
      h1 {
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 38vh;
        font-size: 45px;
      }

      .h1-text {
        text-align: center;
        font-size: 80px;
      }

      nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color: #4b796c;
        overflow: hidden;
      }
  
      nav ul li {
        float: left;
      }
  
      nav ul li a {
        display: block;
        color: white;
        padding: 20px 20px;
        text-decoration: none;
      }
  
      nav ul li a:hover {
        background-color: #6f905ee3;
      }
  
      .main {
        background-image: url("./img/BDTC.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
  
      section {
        margin-bottom:auto;
      }
  
      h2 {
        margin-top:auto;
      }
  
      footer {
        background-color: #ffffff;
        color: #ffffff;
        padding: 2px;
        text-align: center;
      }

      .container {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
      text-align: center;
    }
    
    h2 {
      text-align: center;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      text-align: center;
    }
    .wrapper {
        background-image: url("./img/BDTC.png");
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    h4 {
      font-size: 17px;
      color: #000000;
    }
    li{
      font-size: 17px;
      color: #000000;
    }
    </style>
  </head>
  
  <body>
    <header>
      <h1 class="blink">AVOCADO ENGLISH</h1>
    </header>
  <div class="wrapper">
    <nav>
      <ul>
        <li><a href="Trang chu.php">Home</a></li>
        <li><a href="Gói cước.php">Course</a></li>
        <li><a href="Su kien.php">Event</a></li>
        <li><a href="ưu đãi.php">Endow</a></li>
        <li><a href="Thông tin liên hệ.php">Contact</a></li> 
        <li><a href="Dang ky.php">Register</a></li>
        <li><a href="Dang nhap.php">Log In</a></li>
      </ul>
    </nav>
  
    <main>
    <section id="Trang chủ.html">
      <h2 style="color: #0000FF; font-size: 40px;">Chào mừng đến với Hệ Đào Tạo Ngoại Ngữ AVOCADO!</h2>
      </section> 
      <section id="Dang nhap"></section>
      <div class="container">
        <h2>Log In</h2>
        <form id="login-form">
          <div class="form-group">
            <label for="username"><b>User name</b></label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password"><b>Password</b></label>
            <input type="password" id="password" name="password" required>
          </div>
          <button type="submit">Đăng nhập</button>
        </form>
        <script src="dang nhap.js"></script>
      </div>
      <br><br><br><br><br><br><br><br>
      <div align="center" id="content">
       <h4><b>Thông Tin Liên Hệ</b></h4>
     <li>
     <b>ADDRESS:</b> Số 14 Đường Nguyễn Thị Thập Phường Tân Hiển Quận 7 TP HCM
     </li>
     <li>
       <b>CONTACT:</b> MR HOÀNG LÂM
     </li>
     <li>
       <b>HOTLINE:</b> 023 569 9756
     </li>
     <li>
       <b>Email:</b> avocado@gmail.com
     </li>
    </div>
  </div>
</body>
</html>