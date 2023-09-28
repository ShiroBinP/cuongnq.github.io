<?php
    $hoten = $_POST['hoten'];
    $tk = $_POST['username'];
    $mk = $_POST['password'];

    $conn = mysqli_connect("localhost","root","","banhang2023");
    $sql =  "INSERT INTO admin (hoten,username,password) VALUES ( '$hoten', '$username', '$password')";

    $kq = mysqli_query($conn, $sql);
    
    echo "Đăng kí thành công";

    //header("Location: dshanghoa.php");
?>