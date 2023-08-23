<!DOCTYPE html>
<html>
<head>
  <title>Ưu Đãi Của Hệ Đào Tạo Ngoại Ngữ AVOCADO Cho Trẻ</title>
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
    main {
      padding: 20px;
    }
    
    .offer-card {
      border-radius: 5px;
      margin-bottom: 20px;
      overflow: hidden;
      padding: 20px;
      background-color: aqua;
    }
    
    .offer-card h2 {
      font-size: 24px;
      margin: 0;
    }
    
    .offer-card p {
      font-size: 16px;
    }

.button-payment {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
}

.button-payment:hover {
    background-color: #45a049;
}

.button-payment:active {
    background-color: #3e8e41;
}

.button-payment:focus {
    outline: none;
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
      .wrapper {
        background-image: url("./img/BDUD.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
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
        <li><a href="Trang chu.html">Home</a></li>
        <li><a href="Gói cước.html">Course</a></li>
        <li><a href="Su kien.html">Event</a></li>
        <li><a href="ưu đãi.html">Endow</a></li>
        <li><a href="Thông tin liên hệ.html">Contact</a></li> 
        <li><a href="Dang ky.html">Register</a></li>
        <li><a href="Dang nhap.html">Log In</a></li>
      </ul>
    </nav>
</div>
<div class="wrapper">
  <br>
  <h2 align="center" class="blink">Ưu Đãi Của AVOCADO</h2>
  <main>
    <div class="offer-card">
        <h2>Chương trình học tiếng Anh cho trẻ từ 5-14 tuổi</h2>
        <p>Trẻ được học ngoại ngữ từ nhỏ sẽ mang lại nhiều lợi ích về phát triển trí tuệ cũng như đạt hiệu quả cao trong phát âm, tiếp thu từ vựng…</p>
        <p>Hãy đăng ký ngay để con bạn được hưởng ưu đãi <span class="discount-badge">Giảm giá 30%</span> khi tham gia chương trình học tiếng Anh cho trẻ từ 5-14 tuổi trong 6 tháng đầu!</p>
        <button onclick="redirectToPayment()">Thanh toán</button>
    </div>
    <div class="offer-card">
        <h2>Chương trình song ngữ cho trẻ du học</h2>
        <p>Nghiên cứu đã chỉ ra rằng người nói song ngữ thường có khả năng ghi nhớ tên gọi, sự định hướng và nhận diện vật dụng tốt hơn người nói một ngôn ngữ.</p>
        <p>Hãy đăng ký ngay để con bạn được hưởng ưu đãi <span class="discount-badge">Giảm giá 50%</span> khi tham gia chương trình song ngữ cho trẻ du học cho 50 bé đăng ký trước ngày 21/07/2023</p>
        <button  onclick="redirectToPayment()"><font clor="blue">Thanh toán</font></button>
      </div>
    <div class="offer-card">
        <h2>Chương trình luyện IELTS cho bé</h2>
        <p>Lợi ích thiết thực của IELTS mang tới cho học sinh cấp 2, cấp 3 là nâng cao khả năng tiếng Anh, tự tin giao tiếp, kể cả trong môi trường du học. Bài thi IELTS mang đến kiến thức, kiểm tra 4 kỹ năng nên bài học ở trường cũng không còn là trở ngại.</p>
        <button onclick="redirectToPayment()">Thanh toán</button>
      </div>
      <script>
        function redirectToPayment() {
            window.location.href = 'Thanh toán.php';
        }
    </script>
  </main>
  <div id="content">
    <h4><b>Thông Tin Liên Hệ</b></h4>
  <li>
  <b>ADDRESSb:</b> Số 14 Đường Nguyễn Thị Thập Phường Tân Hiển Quận 7 TP HCM
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
