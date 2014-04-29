<?php
if (!isset($_SESSION['user_id'])) { 
   header("location:login.php");
}
?>
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
                        <a href="logout.php" id="logout">
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