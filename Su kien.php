<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Su Kien</title>
  <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
</head>
<body>
  
</body>
</html>
  <style>
    @keyframes blink {
            50% {
                opacity: 0;
            }
        }
        .blink {
            animation: blink 1s infinite;
        }
        @keyframes link {
            50% {
                opacity: 0;
            }
        }
        .link {
            animation: blink 1s infinite;
            color: #c62028;
        }

        body{
          background-color: #b1c78d;
        }
      .event-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .event {
      text-align: center;
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 10px;
    }

    .blink {
      background-color: #1a7600;
      border: none;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      font-size: 16px;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .discount-badge {
      background-color: #f44336;
      border-radius: 5px;
      color: #fff;
      display: inline-block;
      font-size: 14px;
      margin-bottom: 10px;
      padding: 5px 10px;
    }
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color: #4b796c;
        overflow: hidden;
      }

      .package {
      margin: auto;
      padding: 10px;
      border: 1.5px solid #060000;
      border-radius: 4px;
      text-align: center;
      float: left;
      margin-left: 2%;
      margin-top: 5%;
      background-color: #ffffff;
    }
    .package .p2 {
      float: left;
    }
    h2 {
      color: #333;
    }

    .button {
      background-color: #1a7600;
      border: none;
      border-radius: 4px;
      color: #fff;
      cursor: pointer;
      font-size: 16px;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    p {
      color: #555;
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
      main {
      padding: 20px;
    }
      nav ul li a:hover {
        background-color: #6f905ee3;
      }
      header {
        background-image: url("./img/HDTC.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 80%;
        border: 0;
      }
      
        .link {
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
      .wrapper {
    background-image: url("./img/BDKH.png ");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    }
    footer {
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1 class="link" style="color: #c62028;">AVOCADO ENGLISH</h1>
  </header>
  <div>
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
  </div>
  <div align="center" class="wrapper">
    <div class="package pa">
      <h2></h2>
      <p class="price"></p>
      <p></p>
    <div class="package 02">
      <h2>Đăng ký ngay</h2>
      <p class="price"><del>Từ 6.500.000 VND - 16.500.000 vnd</del> còn 4.500.000 vnd-12.500.000 vnd</p>
      <p>Đăng ký ngay</p>
      <p>Nhận ngay ưu đãi <span class="discount-badge">Giảm 30%</span>Khi đăng ký gói cho trẻ từ 5 - 14 tuổi</p>
      <button onclick="redirectToPayment()">Thanh toán</button>
    </div>
    </div>
    <div  align="right" class="wrapper">
      <div class="package pa">
        <h2></h2>
        <p class="price"></p>
        <p></p>
      <div class="package 02">
        <h2>Đăng ký ngay</h2>
        <p>Từ ngày 13/08/2023 - 13/10/2023</p>
        <p class="price"><del>Từ 14.500.000 vnd</del> còn 12.500.000 vnd</p>
        <p>Đăng ký ngay</p>
        <p>Nhận ngay ưu đãi <span class="discount-badge">Giảm 20%</span>Khi đăng ký gói luyện IETLS cho trẻ</p>
        <button onclick="redirectToPayment()">Thanh toán</button>
      </div>
      <script>
        function redirectToPayment() {
            window.location.href = 'Thanh toán.php';
        }
    </script>
      </div>
        <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br><br><br>
        <footer>
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
</footer>
</div>
</body>
</html>
