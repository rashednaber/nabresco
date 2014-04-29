<?php
include '../includes/admin_header.php';
require_once '../includes/connections.php';
?>
<div>
    <!-- Line of our company images and partners-->
    <img class="companyline" src="../images/nabresco.png" alt='nabresco logo'>
    <img class ="companyline" src="../images/alarz.png" alt="al arz logo">
    <img class ="companyline" src="../images/nawras.png" alt="nawras logo">
    <img class ="companyline" src="../images/takhlees.png" alt="naber international forwarders logo">
    <img class ="companyline" src="../images/zoomlion.png" alt="zoomlion logo">
    <img class ="companyline" src="../images/traklink.jpg" alt="traklink logo">

    <!-- Start page title -->
    <h1 class='nabresco-title'>Nabresco Admin Panel</h1>
    <h2 class="content-title"><b> Manage Users </b></h2>	

</div><!--/ .columns-->
<div class="bottom-spacing">                
    <!-- Button -->
    <div>
        <a href="add_user.php">
            <span>New User <img width="12" height="9" alt="New article" src="../images/plus-small.gif"></span>
        </a>
    </div>
</div>
<div class="module">
    <h2><span></span></h2>
    <div class="module-table-body">
        <form action="">
            <table class="tablesorter" id="myTable">
                <thead>
                    <tr>
                        <th style="width:5%" class="header">ID</th>
                        <th style="width:20%" class="header">Username</th>
                        <th style="width:21%" class="header">Password</th>
                        <th style="width:13%" class="header">First Name</th>
                        <th style="width:13%" class="header">Last Name</th>
                        <th style="width:13%" class="header">email</th>
                        <th style="width:13%" class="header">Edit</th>
                        <th style="width:13%" class="header">Delete</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr class="even">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM admin_accounts");
                        while ($row = mysqli_fetch_array($query)) {
                            $conn;
                            echo "<tr>";
                            echo "<td>{$row['user_id']}</td>";
                            echo "<td>{$row['username']}</td>";
                            echo "<td>{$row['password']}</td>";
                            echo "<td>{$row['fname']}</td>";
                            echo "<td>{$row['lname']}</td>";
                            echo "<td>{$row['email']}</td>";
                            //here we make the selection query. When we make edit we want it to select the user_id that
                            //we want to edit or delete
                            //in the reference we add a question mark to add a query string and then to pick user_id of that row
                            //php code in curly brackets as usual in order to not to mix code and use of ' and "
                            echo "<td><a href='edit_user.php?user_id={$row['user_id']}'>Edit</td>";
                            echo "<td><a href='delete_user.php?user_id={$row['user_id']}'>Delete</td>";
                            echo "</tr>";
                        }
                        ?>

                    </tr>
                </tbody>
            </table>
        </form>                                                
        <div style="clear: both"></div>
    </div> <!-- End .module-table-body -->
</div>
<div style="clear: both"></div>
<?php include '../includes/admin_footer.php'; ?>
