<?php
// imported
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("nursing")or die("Sorry unable to connect to database"); 


if(isset($_POST['submit'])){ 

$name = $_POST['username'];
$pass = $_POST['password'];

if($pass=='' || $name == ''){
echo"<script> alert('Please fill in both the password and the username fields!')</script>";
exit();
}

$check_user = "SELECT * FROM newstudents WHERE username ='$name' AND Password='$pass'";
$run = mysql_query($check_user);
if(mysql_num_rows($run)>0){
header( 'Location:displaydata.php');
}
else{ 
echo "<script>alert('Username or password is incorrect!' '')</script>";
}

mysql_close();
}
?>