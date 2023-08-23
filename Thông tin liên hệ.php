<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin liên hệ giáo viên</title>
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
      header {
        background-image: url("./img/HDTC.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 80%;
        border: 0;
      }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .teacher {
            background-color: rgb(247, 247, 247);
            padding: 30px;
            margin-bottom: 20px;
        }

        .teacher img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            float: left;
            margin-right: 20px;
        }

        .teacher h3 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .teacher h4 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .teacher h5 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }
        .teacher p {
            margin: 0;
            font-size: 16px;
            color: #777;
        }

        .teacher .contact {
            margin-top: 10px;
        }

        .teacher .contact a {
            display: inline-block;
            margin-right: 10px;
            color: #777;
            text-decoration: none;
        }

        .teacher .contact a:hover {
            text-decoration: underline;
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
        background-image: url("./img/BDLH.png ");
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
    <div class="container">
        <div class="teacher">
            <img src="./img/tam.jpg" alt="Teacher 1">
            <div>
                <h3>LÊ THANH TÂM</h3>
                <p>English Teacher</p>
                <div class="contact">
                    <a href="mailoto:tam.le@avocado.com">tam.le@avocado.com</a>
                    <a href="tel:+05689001916">(056) 900-1916</a>
                    <br><a href="tam.php">contact</a>
                </div>
            </div>
        </div>

        <div class="teacher">
            <img src="./img/huy.jpg" alt="Teacher 2">
            <div>
                <h3>Vũ Đức Huy</h3>
                <p>English Teacher</p>
                <div class="contact">
                    <a href="mailoto:huy.vu@avocado.com">huy.vu@avocado.com</a>
                    <a href="tel.+0356987859">(035) 698-7859</a>
                   <br> <a href="huy.php">contact</a>
                </div>
            </div>
        </div>

        <div class="teacher">
            <img src="./img/linh.jpg" alt="Teacher 3">
            <div>
                <h4>Nguyễn Văn Lĩnh</h4>
                <p>English Teacher</p>
                <div class="contact">
                    <a href="mailto:linh.nguyen@avocado.com">linh.nguyen@avocado.com</a>
                    <a href="tel:+056987563">(056) 987-563</a>
                  <br>  <a href="linh.php">contact</a>
                </div>
            </div>
        </div>

        <div class="teacher">
            <img src="./img/bao.jpg" alt="Teacher 4">
            <div>
                <h5>Nguyễn Trường Gia Bảo</h5>
                <p>English Teacher</p>
                <div class="contact">
                    <a href="mailto:bao.nguyen@avocado.com">bao.nguyen@avocado.com</a>
                    <a href="tel:+0895623568">(089) 562-3568</a>
                  <br>  <a href="bao.php">contact</a>
                </div>
            </div>
        </div>

        <!-- Thêm thông tin liên hệ của các giáo viên khác tại đây -->
    </div>
    <div id="content">
        <h4>Thông Tin Liên Hệ</h4>
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
