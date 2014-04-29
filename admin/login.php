<?php
session_start();
//include '../includes/admin_header.php';
require_once '../includes/connections.php';
//refer to the comment just above the form
//php code to make the page know that the login button was pressed

if (isset($_POST["submit"])) {
    /* now we want to make sure we can get the user and pass from the form itself    
     * echo "username:". $_POST['username_login']."<br>";
     * echo "password:". $_POST['password_login'];
     * this showed that both inputs can be seen ok
     * so now we want to check if user and pass are the same from the admin accounts DB 
     */

    //user_id which is the auto increment is selected where the user and pass the same from form
    //if select * from admin_accounts will give me all the data
    $result = mysqli_query($conn, "select user_id from admin_accounts where username='{$_POST['username_login']}' AND password='{$_POST['password_login']}'");
    //when num_rows is true that means they match
    if ($result->num_rows == 1) {
        $authentication = mysqli_fetch_array($result);
        $user_id = $authentication['user_id'];
        //session start in order to have a session while logged in to get info of the current user
        //it is a superglobal hence an associative array
        
        //start the session with the user id
        $_SESSION['user_id']=$user_id;
        //after the session starts we redirect to the main page
        header("location:index.php");
    } else {
        $error = "account does not exist";
    }
}
?>
<!-- we added the header statically because of the error -->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Magic Admin. Advanced, Beautiful and Customizable Admin Template.</title>

        <!-- Fluid 960 Grid System - CSS framework -->
        <link rel="stylesheet" type="text/css" href="../css/grid.css" tppabs="http://www.xooom.pl/work/magicadmin/css/grid.css" media="screen" />
        <!-- Main stylesheet -->
        <link rel="stylesheet" type="text/css" href="../css/styles.css" tppabs="http://www.xooom.pl/work/magicadmin/css/styles.css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_8">
                        &nbsp;
                    </div>
                    <div class="grid_4">
                        <a href="" id="logout">
                            Logout
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->

            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li><a href="index.php">Dashboard</a></li>
                                <li><a href="add_user.php">Add User</a></li>
                                <li><a href="add_project.php">Add Project</a></li>
                                <li><a href="">Truck Circulation</a></li>
                                <li><a href="">Settings</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>           
        </div>
<div>
    <!-- Line of our company images and partners-->
    <img class="companyline" src="../images/nabresco.png" alt='nabresco logo'>
    <img class ="companyline" src="../images/alarz.png" alt="al arz logo">
    <img class ="companyline" src="../images/nawras.png" alt="nawras logo">
    <img class ="companyline" src="../images/takhlees.png" alt="naber international forwarders logo">
    <img class ="companyline" src="../images/zoomlion.png" alt="zoomlion logo">
    <img class ="companyline" src="../images/traklink.png" alt="traklink logo">

    <!-- Start page title -->
    <h1 class='nabresco-title'>Nabresco Admin Panel</h1>
    <h2 class="content-title"><b> Login panel </b></h2>
    <!-- here the action takes you back the same page unlike before where it takes you to another page -->
    <?php
    if(isset($error)){
        echo "<h2 style='color:red' >$error</h2>";
    }
    ?>
    <form method="post" action="login.php" class="login" id="login">

        <p class="contact-form">
            <label>Username: <span class="required">(required)</span></label>
            <input type="text" name="username_login"/>
        </p>

        <p class="contact-form">
            <label>Password: <span class="required">(required)</span></label>
            <input type="password" name="password_login"/>
        </p>

        <p class="button-default">
            <button type="submit" name="submit">Login</button>
        </p>

</div>