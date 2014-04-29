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


if (!empty($_POST['description']) && !empty($_POST['client']) && !empty($_POST['location']) && !empty($_POST['country']) && !empty($_POST['year'])) {
//echo "INSERT INTO projects ('project_description', 'project_client', 'project_location', 'project_country', 'project_year') values ('{$_POST['description']}','{$_POST['client']}','{$_POST['location']}', '{$_POST['country']}', '{$_POST['year']}')";
    $result = mysqli_query($conn, "INSERT INTO projects (project_description, project_client, project_location, project_country, project_year) values ('{$_POST['description']}','{$_POST['client']}','{$_POST['location']}', '{$_POST['country']}', '{$_POST['year']}')");
    //this we redirect to users.php tables 
if ($result) {
    header("location:projects.php");
    
} else {
    die(mysql_error());
}
} else {
    die("Please fill out the required fields");
}

?>

