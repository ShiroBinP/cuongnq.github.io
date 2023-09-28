<div id="menu">
	<a href="#">Trang Chủ</a> |
	<a href="dsdanhmuc.php">Danh Mục</a> |
	<a href="nhapthongtin.php">Nhập thông tin</a> |
    <a href="dangky.php">Đăng ký</a> |
    <a href="dangnhap.php">Đăng nhập</a> | 
    <a href="upanh.php">Up Ảnh</a> | 
    
    <hr>
    <?php

       if (isset($_SESSION["hoten"])) {
       	  echo 'Xin chào ' . $_SESSION["hoten"];
       	  echo ' | <a href="thoat.php">Thoát</a>';
       }
       else
       	echo '<a href="dangnhap.php">Đăng nhập</a>';
    ?>
</div>