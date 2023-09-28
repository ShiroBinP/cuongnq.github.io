<?php
    $tenhanghoa = $_POST['tenhanghoa'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $iddanhmuc = $_POST['iddanhmuc'];

    $conn = mysqli_connect("localhost", "root", "", "banhang2023");
    $sql = "INSERT INTO hanghoa(tenhanghoa,soluong,gia,iddanhmuc) VALUES ('$tenhanghoa', $soluong, $gia, $iddanhmuc)";

    $ketqua = mysqli_query($conn, $sql);

    header("Location: dshanghoa.php?iddm=$iddanhmuc");
    ?>