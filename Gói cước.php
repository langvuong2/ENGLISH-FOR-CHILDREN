<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gói cước</title>
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
        h1 {
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 38vh;
        font-size: 45px;
      }

      body{
          background-color: #b1c78d;
        }
      .h1-text {
        text-align: center;
        font-size: 80px;
      }
    .wrapper {
    background-image: url("./img/BDKH.png ");
    background-repeat: no-repeat;
    background-size: 100% 100%;
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
    .package {
      margin: auto;
      padding: 20px;
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
    p {
      color: #555;
    }
    .price {
      font-size: 24px;
      color: #f44336;
      margin-bottom: 10px;
    }
    input[type="submit"] {
    padding: 8px 16px;
    border-radius: 4px;
    border: none;
    background-color: #1e41de;
    color: rgb(223, 226, 231);
    font-weight: bold;
    cursor: pointer;
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
      header {
        background-image: url("./img/HDTC.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 80%;
        border: 0;
      }
      .pa {
        width: 20%;
      }
  </style>
</head>
<body>
  <header>
    <h1 class="blink">AVOCADO ENGLISH</h1>
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
  <div class="wrapper">
  <div class="package pa">
    <p class="price"></p>
  <div class="package 02">
    <h2>Gói cước Tiếng Anh Trẻ em 5-10 tuổi</h2>
    <p class="price"><del>6.500.000-14.500.000VND &nbsp;</del> 4.500.000 - 12.500.000 VND</p>
    <p>Thông tin của gói cước:</p>
    <ul>
      <p> Trẻ sẽ có cơ hội tiếp thu ngôn ngữ mới một cách nhanh chóng và tự tin hơn trong giao tiếp. <br> Việc học tiếng Anh từ sớm cũng giúp trẻ phát triển kỹ năng nghe và nói tốt hơn.</p>
    </ul>
    <button onclick="redirectToPayment()">Đăng ký ngay</button>
  </div>
  </div>
  <div class="package pa">
    <p class="price"></p>
  <div class="package 02">
    <h2>Gói cước Tiếng Anh Trẻ em 10-14 tuổi</h2>
    <p class="price"><del>14.500.000-18.500.000VND &nbsp;</del>12.500.000 - 16.500.000 VND</p>
    <p>Thông tin của gói cước:</p>
    <ul>
      <p>Kỹ năng ngôn ngữ thứ hai sẽ giúp trẻ mở rộng vốn từ vựng và hiểu biết về thế giới xung quanh . Ngoài ra, việc học tiếng Anh cũng giúp trẻ phát triển kỹ năng đọc và viết.</p>
    </ul>
    <button onclick="redirectToPayment()">Đăng ký ngay</button>
  </div>
  </div>
  <div class="package pa">
    <h2></h2>
    <p class="price"></p>
    <p></p>
  <div class="package 02">
    <h2>Gói cước Tiếng Anh Luyện IETLS cho trẻ</h2>
    <p class="price"><del>18.500.000 VND</del>16.500.000 VND</p>
    <p>Thông tin của gói cước:</p>
    <ul>
      <li>Cải thiện kỹ năng ngôn ngữ</li> 
      <li>Mở rộng kiến thức và tầm hiểu biết</p>
      <li>Cải thiện khả năng học tập</li>
      <li>Tạo cơ hội học tập và công việc</li>
      <li>Phát triển kỹ năng toàn diện</li>
      <li>Mở rộng tầm nhìn và giao tiếp văn hóa</li>
    </ul>
    <button onclick="redirectToPayment()">Đăng ký ngay</button>
  </div>
  </div>
  <div class="package pa">
    <h2></h2>
    <p class="price"></p>
    <p></p>
  <div class="package 02">
    <h2>Gói cước Tiếng Anh trẻ du học</h2>
    <p class="price"><del>18.500.000 VND</del>16.500.000 VND</p>
    <p>Thông tin của gói cước:</p>
    <ul>
      <p>Công cụ giúp trẻ tự tin <br> trò chuyện, giao lưu,tìm hiểu văn hoá <br> với người bản địa một cách <br>suôn sẻ và hiệu quả. <br>Khi có tiếng Anh làm vốn, <br>chúng taở hữu chiếc chìa khóa mở cánh cửa kho tàng tri thức <br> và khoa học thế giới</p>
    </ul>
    <button onclick="redirectToPayment()">Đăng ký ngay</button>
  </div>
  </div>
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
<script>
        function redirectToPayment() {
            window.location.href = 'Dang ky.php';
        }
    </script>
  </div>
</body>
</html>
