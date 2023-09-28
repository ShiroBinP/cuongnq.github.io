<?php
     session_start();
?>
<html>
     <head>
     	  <title>Hello PHP!</title>
     </head>
    <body>
    	<?php include("menu.php"); ?>

    	<h1> Đăng nhập </h1>

<form action="xulydangnhap.php" method="POST">

     Username:
     <input type="text" name="username"><br>
     Password:
     <input type="password" name="password"><br>

     <input type="submit" value="Đăng nhập">
</form>
</body>
</html>