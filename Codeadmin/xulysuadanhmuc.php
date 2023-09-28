<?php

    $tendanhmuc = $_POST['tendanhmuc'];
    $id = $_POST['id'];

    $conn = mysqli_connect("localhost","root","","banhang2023");
    $sql = $sql = "UPDATE danhmuc SET tendanhmuc = '$tendanhmuc' WHERE id = $id";

    $kq = mysqli_query($conn, $sql);
    
    header("Location: dsdanhmuc.phpphp?idhh=$idhanghoa");
?>
