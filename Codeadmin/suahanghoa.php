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
          
     <h1>Sửa hàng hóa </h1>

     <form action="xulysuahanghoa.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $dong['id'];?>">
          Tên hàng hóa:
          <input type="text" name="tenhanghoa" value="<?php echo $dong['tenhanghoa'];?>"><br>
          Số lượng:
          <input type="text" name="soluong" value="<?php echo $dong['soluong'];?>"><br>
          Đơn giá:
          <input type="text" name="gia" value="<?php echo $dong['gia'];?>"><br>
          Danh mục:
          <select name="iddanhmuc">

          <?php
          $conn = mysqli_connect("localhost", "root", "", "banhang2023");
          $sql = "SELECT * FROM danhmuc";
          $ketqua = mysqli_query($conn, $sql);

          while ($dongdm = mysqli_fetch_array($ketqua)){
                echo '<option value="'.$dongdm['id'].'"';
                if ($dong['iddanhmuc'] == $dongdm['id']) echo 'selected';
                echo '>'.$dongdm['tendanhmuc'].'</option>';
          }
          ?>
     </select>

          <input type="submit" value="Sửa sản phẩm">
     </form>
</body>
</html>
