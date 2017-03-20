<?php


session_start();
if($_SESSION['logged_in'] == true){
    header("location:admin.php");
}
?>
<html>
<body>
Login Successful
</body>
</html>
