<?php

include_once '../header.php';
//include_once'check_login.php';
?>









<html>
<title>
    login
</title>
<head>
<!--    <link rel="stylesheet" href="css/style.css">-->

</head>
<body class="loginbody">
<form  action="admin/checklogin.php" method="post">


    <div style="margin-left: 1000px; margin-top: 20px">

  <p><h2 style="color: #000000; font-size: 15px">For Viewers Username:        guest</h2></p>
  <p><h2 style="color: #000000; font-size: 15px">For Viewers Password:     123456</h2></p>
</div>
    <div id="login">
<h2>Administrator Login</h2>

       username <input type="text" name="username" id="username" class="t1"><br/><br/>

       password <input type="password" id="password" name="password" class="t1"><br/><br/>
        <input type="submit" name="submit" value="Login" class="log"><br/>
        <div id="smg" style="color: red;">
        <?php

        echo @$_GET['msg'];
        ?>
        </div>
    </div>



</form>
</body>
</html>