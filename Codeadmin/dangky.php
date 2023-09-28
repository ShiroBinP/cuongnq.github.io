<?php
session_start();
?>

<head>
    <title>Document</title>
    
</head>
<body>
    <?php include("menu.php"); ?>
    <h1>Đăng ký tài khoản</h1>

    <form action="xulydangky.php" method="POST">
        Họ tên :
        <input type="text" name="hoten" id=""> <br>
        Username :
        <input type="text" name="username" id=""> <br>
        Password :
        <input type="text" name="password" id=""> <br>

        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>