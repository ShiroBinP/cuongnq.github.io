<?php
     session_start();
?>
<head>
     <title>Hello PHP!</title>
</head>
<body>
     <?php include("menu.php"); ?> 

     <h1>Danh sách hàng hóa  </h1>

<table>
     <thead>
          <tr>
               <td>STT</td>
               <td>Tên hàng hóa </td>
               <td>Số lượng </td>
               <td>Đơn giá </td>
               
          </tr>
     </thead>
<body>
     <?php
     $iddm = 1;
     if (isset($_GET['iddm'])) $iddm = $_GET['iddm'];

     $current_page = 1;
     if (isset($_GET['page'])) $current_page = $_GET['page'];
     $limit = 3;

     // Tính tổng số sản phẩm 
     $conn = mysqli_connect("localhost", "root", "", "banhang2023");
     $sql = "SELECT count(id) as total FROM hanghoa WHERE iddanhmuc=$iddm";
     $ketqua = mysqli_query($conn, $sql);
     $dong = mysqli_fetch_array($ketqua);
     $total_record = $dong['total'];
     $total_page = ceil($total_record/$limit);

     $start = ($current_page - 1) * $limit;


     $sql = "SELECT * FROM hanghoa WHERE iddanhmuc=$iddm LIMIT $start, $limit";
     $ketqua = mysqli_query($conn, $sql);


     $stt = 1; //Thêm số thứ tự vào cột đầu tiên
     while ($dong = mysqli_fetch_array($ketqua)) {
          echo '<tr>';
          echo '   <td>'.$stt.'</td>';
          echo '   <td>'.$dong['tenhanghoa'].'</td>';
          echo '   <td>'.$dong['soluong'].'</td>';
          echo '   <td>'.$dong['gia'].'</td>';
          echo ' <td><a href="xoahh.php?idhh='.$dong['id'].'">Xóa</a></td>';
          echo ' <td><a href="suahanghoa.php?idhh='.$dong['id'].'">Sửa</a></td>';
          echo '</tr>';
          $stt++;

     }
     ?>

</body>
</table>
</body>
          <p> 
          <?php
          for ($i = 1; $i<=$total_page; $i++)
               echo '<a href="dshanghoa.php?page='.$i.'">'.$i.'</a> |'; 
          
          ?>
          </p>

