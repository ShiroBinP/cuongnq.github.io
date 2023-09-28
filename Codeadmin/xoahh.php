<?php
    //http://localhost/banhang/xoasp/php?idhh=1
    $idhh = $_GET['idhh'];
    $conn = mysqli_connect ('localhost', 'root', '', 'banhang2023');
    $sql = "DELETE FROM hanghoa WHERE id=$idhh";
    $kq = mysqli_query($conn, $sql);

    header("Location: dsdanhmuc.php");
?>