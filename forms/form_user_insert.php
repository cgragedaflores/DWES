<?php include('../header.php');?>
<div class="content">
<div class="form-update">
        <form action="bd_user_insert.php" class="update-form" autocomplete="on" method = "POST">
        <div class="gp_input_image">
            <label for="">User Photo</label>
            <input type="file" name="cover_book" id="">
            <div class="show_cover_user">
                <img src="../img/user.png" alt="">
            </div>
        </div>
            <div class="gp_input">
                <label for="">Name</label>
                <input type="text" value="" placeholder=" example 'Juan'" name="u_name">

            </div>
            <div class="gp_input">
                <label for="">Last Name</label>
                <input type="text" value="" placeholder = "example 'Martinez'" name="u_last-name">

            </div>
            <div class="gp_input">
                <label for="">NIF</label>
                <input type="text" value="" placeholder= "example '12345678Z'" name="u_nif">

            </div>
            <div class="gp_input">
                <label for="">password</label>
                <input type="password" value="" required name="u_password">

            </div>
            <div class="gp_input">
                <label for="">email</label>
                <input type="email" value="" required placeholder = "example@example.com" name="u_email">

            </div>
            <div class="botones">
                <button type="submit" name="register">Register</button>
            </div>
        </form>
    </div>
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