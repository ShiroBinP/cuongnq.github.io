<?php

    $tenhanghoa = $_POST['tenhanghoa'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $iddanhmuc = $_POST['iddanhmuc'];
    $id = $_POST['id'];

    $conn = mysqli_connect("localhost","root","","banhang2023");
    $sql = $sql = "UPDATE hanghoa SET tenhanghoa = '$tenhanghoa' , soluong = '$soluong', gia = '$gia', iddanhmuc = '$iddanhmuc' WHERE id=$id";

    $ketqua = mysqli_query($conn, $sql);
    
    header("Location: dshanghoa.php?iddm=$iddanhmuc");
?>