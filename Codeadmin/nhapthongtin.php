<?php
     session_start();
?>
</head>
<body>
    <?php include("menu.php"); ?>
    <h1>Thêm hàng hoá</h1>

    <form action="xulythemhanghoa.php" method="POST">
        Tên hàng hoá:
        <input type="text" name="tenhanghoa" id=""> <br>
        Số lượng:
        <input type="text" name="soluong" id=""> <br>
        Đơn giá:
        <input type="text" name="gia" id=""> <br>
        Danh mục:
        <select name="iddanhmuc" id="">
            <?php
                $conn = mysqli_connect("localhost","root","","banhang2023");
                $sql = "SELECT * FROM danhmuc";
                $ketqua = mysqli_query($conn, $sql);

                while ($dong = mysqli_fetch_array($ketqua)){
                    echo '<option value="'.$dong['id'].'">'.$dong['tendanhmuc'].'</option>';
                }
            ?>
        </select>

        <input type="submit" value="Thêm sản phẩm">
    </form>
         
    <h1>Thêm danh mục</h1>
    <form action="xulythemdanhmuc.php" method="POST">
        Tên danh muc:
        <input type="text" name="tenhanghoa" id="">        
        <input type="submit" value="Thêm danh mục">
    </form>
            

</body>
</html>