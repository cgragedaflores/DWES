<?php include('../header.php');?>
<div class="content">
<div class="centrarForm">
        <form action="bd_user_insert.php" class="update-form" autocomplete="off" method = "POST"  class="informationForm">
            <div class="inputgp">
                <label for="">Name</label>
                <input type="text" value="" placeholder=" example 'Juan'" name="u_name">
                <label for="">Last Name</label>
                <input type="text" value="" placeholder = "example 'Martinez'" name="u_last-name">
                <label for="">NIF</label>
                <input type="text" value="" placeholder= "example '12345678Z'" name="u_nif">
                <label for="">password</label>
                <input type="password" value="" required name="u_password">
                <label for="">email</label>
                <input type="email" value="" required placeholder = "example@example.com" name="u_email">
            </div>
            <div class="botones">
                <button type="submit" name="register">Register</button>
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