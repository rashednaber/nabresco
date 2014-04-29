<?php
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
    <h2 class="content-title"><b> Add new project </b></h2>

    <!--Add users form-->
    <form method="post" action="create_project.php" class="contact-form" id="add-user">

        <p class="contact-form">
            <label>Project Description: <span class="required">(required)</span></label>
            <input type="text" name="description"/>
        </p>

        <p class="contact-form">
            <label>Client Name: <span class="required">(required)</span></label>
            <input type="text" name="client"/>
        </p>

        <p class="contact-form">
            <label>Location: <span class="required">(required)</span></label>
            <input type="text" name="location"/>
        </p>

        <p class="contact-form">
            <label>Country: <span class="required">(required)</span></label>
            <input type="text" name="country"/>
        </p>

        <p class="contact-form">
            <label>Year: <span class="required">(required)</span></label>
            <input type="text" name="year"/>
        </p>
        <p class="button-default">
            <button type="submit" name="submit">Add project</button>
        </p>

    </form><!--/ .contact-form-->	

</div><!--/ .columns-->



<?php

//admin footer
include '../includes/admin_footer.php';
?>