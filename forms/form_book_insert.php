<?php
include 'bd_connect_LocalHost.php';
require '../templates/header_admin.php';
if (isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 1) {
?>
<div class="content">
    <form action="bd_book_insert.php" autocomplete="off" class="inputForm" method="POST">
    <div class="grupo-input">
            <label for="">Location</label>
            <input type="text" value="" name="b_loc" maxlength ="1">
        </div>    
    <div class="grupo-input">
            <label for="">Tittle</label>
            <input type="text" value="" name="b_title">
        </div>
        <div class="grupo-input">
            <label for="">Author</label>
            <input type="text" value="" name="b_author">
        </div>
        <div class="grupo-input">
            <label for="">ISBN</label>
            <input type="text" value="" name="b_isbn">
        </div>
        <div class="grupo-input">
            <label for="">Editorial</label>
            <input type="text" value="" name="b_editorial">
        </div>
        <div class="grupo-input">
            <label for="">Publication Date</label>
            <input type="date" value="" name="b_Pdate">
        </div>
        <div class="grupo-input">
            <label for="">Book Status</label>
            <select name="book_status" id="s_book">
                <option value="1">Availible</option>
                <option value="0">Not Availible</option>
            </select>
        </div>
        <div class="botones">
            <button type="submit" name="agregar">Insert Book</button>
        </div>
    </form>
</div>
<?php } else {
    echo "Algo ha salido mal";
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