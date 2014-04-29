<?php

//as we said before the method from forms are either get or post
//post more secure and wont show in url
require_once '../includes/connections.php';

//now we want to insert the values into the db table
//insert into table name followed by (the values inside the table from mysql) followed be values from html4
//$_POST [username] to get username value from form
//username in '' because its a string
//{$_POST} between post because its a php code
//'' outside the php post because the value in the database is a varchar


if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email'])) {

    $result = mysqli_query($conn, "INSERT INTO admin_accounts (username, password, fname, lname, email) values('{$_POST['username']}', '{$_POST['password']}','{$_POST['fname']}','{$_POST['lname']}','{$_POST['email']}')");
} else {
    die("Please fill out the required fields");
}


//this we redirect to users.php tables 
if ($result) {
    header("location:users.php");
} else {
    die(mysql_error());
}
?>

