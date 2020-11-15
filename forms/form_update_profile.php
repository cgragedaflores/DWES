<?php
include 'bd_connect_LocalHost.php';
include '../templates/header_admin.php';
?>
<div class="content">
    <?php
if (strlen($_SESSION['username']['address']) < 1) {
    # code...
    $_SESSION['username']['address'] = "";
}
if (strlen($_SESSION['username']['birthdate']) < 1) {
    # code...
    $_SESSION['username']['birthdate'] = "";
}
if (strlen($_SESSION['username']['phone_number']) < 1) {
    # code...
    $_SESSION['username']['phone_number'] = "";
}
?>
    <div class="centrarForm">
    <form action="bd_update_profile.php" method="post"  class="informationForm">
        <div class="inputgp">
            <label for="">First Name</label>
            <input type="text" name="" id="" value="<?php echo $_SESSION['username']['first_name']; ?>">
            <label for="">Last Name</label>
            <input type="text" name="" id="" value="<?php echo $_SESSION['username']['last_name']; ?>">
            <label for="">NIF</label>
            <input type="text" name="" id="" value="<?php echo $_SESSION['username']['nif']; ?>">
            <label for="">email</label>
            <input type="email" name="" id="" value="<?php echo $_SESSION['username']['email']; ?>">
            <label for="">Phone Number</label>
            <input type="tel" name="" id="" value="<?php echo $_SESSION['username']['phone_number']; ?>">
            <label for="">BirthDate</label>
            <input type="date" name="" id="" value="<?php echo $_SESSION['username']['birthdate']; ?>">
            <label for="">Address</label>
            <input type="text" name="" id="" value="<?php echo $_SESSION['username']['address']; ?>">
        </div>
        <div class="botones">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['username']['user_id']; ?>">
            <button type="submit" name="actualizar">Update</button>
            <button type="submit" name="changePasswd">Change Password</button>
        </div>
    </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
    });
});
</script>
</body>
</html>