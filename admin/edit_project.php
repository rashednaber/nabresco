<?php
//Connect to server link
require_once '../includes/connections.php';
include '../includes/admin_header.php';

//get user_id from URL
//echo $_GET ['user_id']
$project_id = $_GET['project_id'];

if ($project_id) {
    $query = mysqli_query($conn, "SELECT * FROM projects where project_id=$project_id");
//make sure the query got the correct information
    $userSet = mysqli_fetch_array($query);
}
?>
<!-- Line of our company images and partners-->
<img class="companyline" src="../images/nabresco.png" alt='nabresco logo'>
<img class ="companyline" src="../images/alarz.png" alt="al arz logo">
<img class ="companyline" src="../images/nawras.png" alt="nawras logo">
<img class ="companyline" src="../images/takhlees.png" alt="naber international forwarders logo">
<img class ="companyline" src="../images/zoomlion.png" alt="zoomlion logo">
<img class ="companyline" src="../images/traklink.png" alt="traklink logo">

<!-- Start page title -->
<h1 class='nabresco-title'>Nabresco Admin Panel</h1>
<h2 class="content-title"><b> Edit Projects </b></h2>

<form method="post" action="update_project.php?project_id=<?php echo $project_id ?>" class="contact-form" id="add-user">

    <p class="contact-form">
        <label>Project Description: <span class="required">(required)</span></label>
        <input type="text" name="description" value="<?php echo $userSet['project_description'] ?>"/>
    </p>

    <p class="contact-form">
        <label>Client Name: <span class="required">(required)</span></label>
        <input type="text" name="client" value="<?php echo $userSet['project_client'] ?>"/>
    </p>

    <p class="contact-form">
        <label>Location: <span class="required">(required)</span></label>
        <input type="text" name="location" value="<?php echo $userSet['project_location'] ?>"/>
    </p>

    <p class="contact-form">
        <label>Country: <span class="required">(required)</span></label>
        <input type="text" name="country" value="<?php echo $userSet['project_country'] ?>"/>
    </p>

    <p class="contact-form">
        <label>Year: <span class="required">(required)</span></label>
        <input type="text" name="year" value="<?php echo $userSet['project_year'] ?>"/>
    </p>
    <p class="button-default">
        <button type="submit" name="submit">Update</button>
    </p>

</form><!--/ .contact-form-->

<?php
include '../includes/admin_footer.php';
?>