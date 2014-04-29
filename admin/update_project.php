<?php
require_once '../includes/connections.php';
//we got the user_id which is unique
$project_id = $_GET['project_id'];
//update the data but only for the one we want to update
//post from the html
$data_update = mysqli_query($conn, "update projects set
                                    project_description = '{$_POST['description']}',
                                    project_client = '{$_POST['client']}',
                                    project_location    = '{$_POST['location']}',
                                    project_country    = '{$_POST['country']}',
                                    project_year    = '{$_POST['year']}'    
                                    where project_id=$project_id");
//if we do not put the where userid then it will edit all accounts                                    
if($data_update){
    header("location:projects.php");
}else{
    die(mysql_error());
}

?>

