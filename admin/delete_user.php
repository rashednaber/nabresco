<?php
//Connect to server link
require_once '../includes/connections.php';

//get user_id from URL
//echo $_GET ['user_id']
$user_id = $_GET['user_id'];

if ($user_id){
    $result= mysqli_query($conn, "delete from admin_accounts where user_id=$user_id");
    if ($result){
        header("location:users.php");
        
    } else {
        die(mysql_error());
        
    }
}
        
?>
