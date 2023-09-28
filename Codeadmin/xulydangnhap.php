<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "banhang2023");

    $sql = "SELECT * FROM admin WHERE username ='$username' AND password = '$password'";

    $ketqua = mysqli_query($conn, $sql);
    $dong = mysqli_fetch_array($ketqua);

    if (mysqli_num_rows($ketqua) == 1) {
    	echo "Đăng nhập thành công!";
    	$_SESSION['username'] = $dong['username'];
    	$_SESSION['hoten']    = $dong['hoten'];
    	echo $dong['hoten'];
    }
    else
    	echo "Sai tên đăng nhập hoặc mật khẩu";

    header("Location: dshanghoa.php");
?>