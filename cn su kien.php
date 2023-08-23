<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sự kiện</title>
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
</head>
<body>
    <style>
      body{
        background-color: #517c45;
      }
    footer {
      text-align: center;
    }
    .wrapper {
        background-image: url("./img/BDKH.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        border: 0;
      }
      header{
        background-color: rgb(83, 221, 48);
        padding: 10px;
      }
      h1{
        font-size: 35px;
      }
      p {
      color: #555;
    }
      nav ul li {
        float: left;
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
    .discount-badge {
      background-color: #f44336;
      border-radius: 5px;
      color: #fff;
      display: inline-block;
      font-size: 14px;
      margin-bottom: 10px;
      padding: 5px 10px;
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
    footer{
      background-color: #1a7600;
      float: inline-end;
      text-align: center;
      color: #fff;
    }
    </style>
    <body>
      <header>
        <h1 align="center"><font color="white">Sự kiện</font></h1>
      </header>
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
    &emsp;
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
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer >
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
    </style>
</body>
</html>