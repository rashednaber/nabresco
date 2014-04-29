<?php
//Connect to server link
require_once '../includes/connections.php';

//get user_id from URL
//echo $_GET ['user_id']
$project_id = $_GET['project_id'];

if ($project_id){
    $result= mysqli_query($conn, "delete from projects where project_id=$project_id");
    if ($result){
        header("location:projects.php");
        
    } else {
        die(mysql_error());
        
    }
}
        
?>
