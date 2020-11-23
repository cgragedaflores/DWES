<?php
 if (isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 1) {
    require '../templates/header_admin.php';
 }else{
     require '../header.php';
 }
?>
<div class="content">
    <form action="bd_user_insert.php" class="inputForm" autocomplete="off" method="POST">
        <div class="grupo-input">
            <label for="">Name</label>
            <input type="text" value="" placeholder=" example 'Juan'" name="u_name">
        </div>
        <div class="grupo-input">
            <label for="">Last Name</label>
            <input type="text" value="" placeholder="example 'Martinez'" name="u_last-name">
        </div>
        <div class="grupo-input">
            <label for="">NIF</label>
            <input type="text" value="" placeholder="example '12345678Z'" name="u_nif">
        </div>
        <div class="grupo-input">
            <label for="">password</label>
            <input type="password" value="" required name="u_password">
        </div>
        <div class="grupo-input">
            <label for="">email</label>
            <input type="email" value="" required placeholder="example@example.com" name="u_email">
        </div>
        <div class="botones">
            <button type="submit" name="register">Register</button>
        </div>
    </form>
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