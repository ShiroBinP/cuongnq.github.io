<?php
    $tendanhmuc = $_POST['tenhanghoa'];

    $conn = mysqli_connect("localhost","root","","banhang2023");
    $sql = $sql = "INSERT INTO danhmuc(tendanhmuc) VALUES ('$tendanhmuc')";

    $kq = mysqli_query($conn, $sql);
    
    header("Location: dsdanhmuc.php");
?>