<?php
//Connect to server link
require_once '../includes/connections.php';
include '../includes/admin_header.php';

//get user_id from URL
//echo $_GET ['user_id']
$user_id = $_GET['user_id'];

if ($user_id){
$query = mysqli_query($conn, "SELECT * FROM admin_accounts where user_id=$user_id");
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
    <h2 class="content-title"><b> Edit user </b></h2>
    
<form method="post" action="update_user.php?user_id=<?php echo $user_id ?>" class="contact-form" id="add-user">

        <p class="contact-form">
            <label>Username: <span class="required">(required)</span></label>
            <input type="text" name="username" value="<?php echo $userSet['username'] ?>"/>
        </p>

        <p class="contact-form">
            <label>Password: <span class="required">(required)</span></label>
            <input type="password" name="password" value="<?php echo $userSet['password'] ?>"/>
        </p>

        <p class="contact-form">
            <label>First name: <span class="required">(required)</span></label>
            <input type="text" name="fname" placeholder="eg. John" value="<?php echo $userSet['fname'] ?>"/>
        </p>

        <p class="contact-form">
            <label>Last name: <span class="required">(required)</span></label>
            <input type="text" name="lname" placeholder="eg. Smith" value="<?php echo $userSet['lname'] ?>"/>
        </p>

        <p class="contact-form">
            <label>email address <span class="required">(required)</span></label>
            <input type="text" name="email" placeholder="eg. john.smith@gmail.com" value="<?php echo $userSet['email'] ?>"/>
        </p>
        <p class="button-default">
            <button type="submit" name="submit">Update</button>
        </p>

    </form><!--/ .contact-form-->
    
<?php
    include '../includes/admin_footer.php';
?>