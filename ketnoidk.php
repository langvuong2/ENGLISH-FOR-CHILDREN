<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'dangky';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Xử lý đăng ký khi nhấn nút Đăng ký
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ biểu mẫu đăng ký
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $package = $_POST['package'];

    $sql = "INSERT INTO dang_ky (name, age, dob, phone, email, package) 
            VALUES ('$name', $age, '$dob', '$phone', '$email', '$package')";

    $result = mysqli_query($connection, $sql);
    if ($result) {
        //đăng ký thành công//
    } else {
        //đăng ký thất bại//
    }
}

mysqli_close($connection);
?>