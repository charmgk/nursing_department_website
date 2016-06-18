<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("nursing")or die("Sorry unable to connect to database"); 

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL 
$fname = $_POST['firstname']; 
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$pass = $_POST['password'];
$idnum = $_POST['idnumber'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
if($fname !=''||$lname !=''||$uname !=''||$pass !=''||$idnum !=''||$age !=''||$gender !=''||$phone !=''||$email !=''||$date !=''){
//Insert Query of SQL
$query = mysql_query("INSERT INTO newstudents(firstname, lastname, username, password, idnumber, age, gender, phone, email, date ) 
values ('$fname', '$lname', '$uname', '$pass', '$idnum', '$age', '$gender', '$phone', '$email', '$date')");
header( 'Location:registration.php');
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
mysql_query($query);
}
mysql_close(); 
// Closing Connection with Server
//header( 'Location:registration.php'); 
?>