<?php
require_once '../includes/connections.php';
//we got the user_id which is unique
$user_id = $_GET['user_id'];
//update the data but only for the one we want to update
$data_update = mysqli_query($conn, "update admin_accounts set
                                    username = '{$_POST['username']}',
                                    password = '{$_POST['password']}',
                                    fname    = '{$_POST['fname']}',
                                    lname    = '{$_POST['lname']}',
                                    email    = '{$_POST['email']}'    
                                    where user_id=$user_id");
//if we do not put the where userid then it will edit all accounts                                    
if($data_update){
    header("location:users.php");
}else{
    die(mysql_error());
}

?>

