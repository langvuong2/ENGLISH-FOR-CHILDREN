<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ưu Đãi</title>
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
</head>
<body>
    <style>
      body{
        background-color: antiquewhite;
      }
        .wrapper{
        background-image: url("./img/HDTC.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 80%;
        border: 0;
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
    
    .button {
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
    
    .button:hover {
      background-color: #45a049;
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
    footer{
      color: #fff;
      background-color: #45a049;
    }
    </style>
    <div class="wrapper">
        <br>
        <h2 align="center" class="blink"><font color="blue">Ưu Đãi Của AVOCADO</font></h2>
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
              <button onclick="redirectToPayment()">Thanh toán</button>
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
        <footer align="center" id="content">
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
</body>
</html>