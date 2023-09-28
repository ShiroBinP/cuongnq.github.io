<html>
     <head>
         <title>Hello PHP!</title>
     </head>
     <body>
         <?php include("menu.php"); ?> 

     <h1>Thêm hàng hóa</h1>

     <form action="xulythemhanghoa.php" method="POST">
          Tên hàng hóa:
          <input type="text" name="tenhanghoa"><br>
          Số lượng:
          <input type="text" name="soluong"><br>
          Đơn giá:
          <input type="text" name="gia"><br>
          Danh mục:
          <select name="iddanhmuc">

          <?php
          $conn = mysqli_connect("localhost", "root", "", "banhang2023");
          $sql = "SELECT * FROM danhmuc";
          $ketqua = mysqli_query($conn, $sql);

          while ($dong = mysqli_fetch_array($ketqua)){
               echo '<option value="'.$dong['id'].'">'.$dong['tendanhmuc'].'</option>';
          }
          ?>
     </select>

          <input type="submit" value="Thêm sản phẩm">
     </form>
</body>
</html>
