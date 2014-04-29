<?php

//admin header
include '../includes/admin_header.php';
?>

<!-- form -->

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
    <h2 class="content-title"><b> Add new users </b></h2>

    <!--Add users form-->
    <form method="post" action="create_user.php" class="contact-form" id="add-user">

        <p class="contact-form">
            <label>Username: <span class="required">(required)</span></label>
            <input type="text" name="username"/>
        </p>

        <p class="contact-form">
            <label>Password: <span class="required">(required)</span></label>
            <input type="password" name="password"/>
        </p>

        <p class="contact-form">
            <label>First name: <span class="required">(required)</span></label>
            <input type="text" name="fname" placeholder="eg. John"/>
        </p>

        <p class="contact-form">
            <label>Last name: <span class="required">(required)</span></label>
            <input type="text" name="lname" placeholder="eg. Smith"/>
        </p>

        <p class="contact-form">
            <label>email address <span class="required">(required)</span></label>
            <input type="text" name="email" placeholder="eg. john.smith@gmail.com"/>
        </p>
        <p class="button-default">
            <button type="submit" name="submit">Add</button>
        </p>

    </form><!--/ .contact-form-->	

</div><!--/ .columns-->



<?php

//admin footer
include '../includes/admin_footer.php';
?>