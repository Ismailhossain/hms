<?php



$host="localhost"; // Host name 
$username="ismail_hms"; // Mysql username
$password="09876"; // Mysql password
$db_name="ismail_hms"; // Database name
$tbl_name="admin"; // Table name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

  session_start();

$_SESSION['logged_in'] = true;
$_SESSION['username'] = $username;

header("location:login_success.php");
}
else {


header("location:login.php? msg=username or password is invalid");
}
?>



