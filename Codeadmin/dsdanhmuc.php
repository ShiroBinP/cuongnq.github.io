<?php
     session_start();
?>
<head>
     <title>Hello PHP!</title>
</head>
<body>
     <?php 
     include("menu.php"); 
     ?> 

     <h1>Danh sách danh mục</h1>

<table>
     <tr>
          <td>STT</td>
          <td>Tên danh mục</td>
     </tr>

     <?php
     $conn = mysqli_connect("localhost", "root", "", "banhang2023");

     $sql = "SELECT * FROM danhmuc";
     $ketqua = mysqli_query($conn, $sql);

     while ($dong = mysqli_fetch_array($ketqua)) {
          echo '<tr>';
          echo '   <td>'.$dong['id'].'</td>';
          echo '   <td><a href="dshanghoa.php?iddm='.$dong['id'].'">'.$dong['tendanhmuc'].'</a></td>';
          echo ' <td><a href="suadanhmuc.php?idhh='.$dong['id'].'">Sửa</a></td>';
          echo ' <td><a href="xoadm.php?idhh='.$dong['id'].'">Xóa</a></td>';
          echo '</tr>';

     }
     ?>
</table>
</body>