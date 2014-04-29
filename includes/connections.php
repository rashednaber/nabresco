<?php

require_once '../includes/config.php';
//server connect
//defined variable conn
//mysql function to connect to server takes 1-servername 2-username 3-password
$conn = mysqli_connect(SERVERNAME, DBUSER, DBPASS);

//if statement saying if it does not connect give an error
if (!$conn) {
    //die("cannot connect to Server") one way to give your own error or
    die(mysql_error());
} else {
    //database is the database to be selected and add data to it
    $database = mysqli_select_db($conn, DBNAME);
    if (!$database) {
        die(mysql_error());
    }
}

/* What we needed and did now is
 * Fetch data from form
 * connect to server
 * select DB
 * and now we are going to insert query
 */

