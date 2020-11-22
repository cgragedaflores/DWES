<?php
include 'bd_connect_LocalHost.php';
include '../templates/header_admin.php';
if (isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 1) {
    require '../templates/header_admin.php';
    ?>
<div class="content">
    <form action="form_book_insert.php" autocomplete="off" class="inputForm">
        <div class="grupo-input">
            <label for="">Tittle</label>
            <input type="text" value="">
        </div>
        <div class="grupo-input">
            <label for="">Author</label>
            <input type="text" value="">
        </div>
        <div class="grupo-input">
            <label for="">ISBN</label>
            <input type="text" value="">
        </div>
        <div class="grupo-input">
            <label for="">Editorial</label>
            <input type="text" value="">
        </div>
        <div class="grupo-input">
            <label for="">Publication Date</label>
            <input type="date" value="">
        </div>
        <div class="grupo-input">
            <label for="">Book Status</label>
            <select name="book_status" id="s_book">
                <option value="1">Availible</option>
                <option value="0">Not Availible</option>
            </select>
        </div>
        <div class="botones">
            <button type="submit">Insert Book</button>
        </div>
    </form>
</div>
<?php } else {
    header('Location: log_user.php');
}?>
<script type="text/javascript">
$(document).ready(function() {
    $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
    });
});
</script>
</body>

</html>