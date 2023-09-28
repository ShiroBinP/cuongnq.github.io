<html>
<head>
     <title>Hello PHP!</title>
</head>
<body>
     <?php 
         include"menu.php";
     ?> 

    <?php
        $idhh = $_GET['idhh'];
          $conn = mysqli_connect('localhost', 'root', "", 'banhang2023');
          $sql = "SELECT * FROM hanghoa WHERE id=$idhh";
          $ketqua = mysqli_query($conn, $sql);
          $dong = mysqli_fetch_array($ketqua);
    ?>

    <h1>Sửa danh mục</h1>

    <form action="xulysuadanhmuc.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dong['id'];?>">
        Tên danh mục:
        <input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc']; ?>"> <br>
        <input type="submit" value="Sửa danh mục">
    </form>
</body>
</html>