<?php
include '../includes/admin_header.php';
?>

<div class="container_12">



    <!-- Dashboard icons -->
    <div class="grid_7">
        <a href="projects.php" class="dashboard-module">
            <img src="../images/Crystal_Clear_write.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_write.gif" width="64" height="64" alt="edit" />
            <span>Manage Projects</span>
        </a>

        <a href="" class="dashboard-module">
            <img src="../images/Crystal_Clear_file.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_file.gif" width="64" height="64" alt="edit" />
            <span>Upload file</span>
        </a>

        <a href="" class="dashboard-module">
            <img src="../images/Crystal_Clear_files.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_files.gif" width="64" height="64" alt="edit" />
            <span>Articles</span>
        </a>

        <a href="" class="dashboard-module">
            <img src="../images/Crystal_Clear_calendar.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_calendar.gif" width="64" height="64" alt="edit" />
            <span>Calendar</span>
        </a>

        <a href="users.php" class="dashboard-module">
            <img src="../images/Crystal_Clear_user.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_user.gif" width="64" height="64" alt="edit" />
            <span>Manage Users</span>
        </a>

        <a href="https://www.google.com/analytics/web/?hl=en#report/visitors-overview/a48161738w79618103p82342746/" class="dashboard-module">
            <img src="../images/Crystal_Clear_stats.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_stats.gif" href width="64" height="64" alt="edit" />
            <span>Analytics</span>
        </a>

        <a href="" class="dashboard-module">
            <img src="../images/Crystal_Clear_settings.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_settings.gif" width="64" height="64" alt="edit" />
            <span>Settings</span>
        </a>
        <div style="clear: both"></div>
    </div> <!-- End .grid_7 -->

    <!-- Account overview -->
    <div class="grid_5">
        <div class="module">
            <h2><span>Account overview</span></h2>

            <div class="module-body">

                <p>
                    <strong>User: </strong>User X<br />
                    <strong>Your last visit was on: </strong>20 January 2010,<br />
                    <strong>From IP: </strong>000.000.00.00
                </p>

                <div>
                    <div class="indicator">
                        <div style="width: 23%;"></div><!-- change the width value (23%) to dynamically control your indicator -->
                    </div>
                    <p>Your storage space: 23 MB out of 100MB</p>
                </div>

                <div>
                    <div class="indicator">
                        <div style="width: 100%;"></div><!-- change the width value (100%) to dynamically control your indicator -->
                    </div>
                    <p>Your bandwidth (January): 1 GB out of 1 GB</p>
                </div>

                <p>
                    Need to switch to a bigger plan?<br />
                    <a href="">click here</a><br />
                </p>

            </div>
        </div>
        <div style="clear:both;"></div>
    </div> <!-- End .grid_5 -->

    <div style="clear:both;"></div>


    <!-- dynamic way to include the footer -->    
    <?php
    include '../includes/admin_footer.php';
    ?>