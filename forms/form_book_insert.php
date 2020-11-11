<?php
include('../header.php') ?>
<div class="content">
    <div class="form-update">
    
        <form action="form_book_insert.php" class="update-form" autocomplete="off">
        <div class="gp_input_image">
            <label for="">Cover Page</label>
            <input type="file" name="cover_book" id="">
            <div class="show_cover">
                <img src="" alt="">
            </div>
        </div>
            <div class="gp_input">
                <label for="">Tittle</label>
                <input type="text" value="">

            </div>
            <div class="gp_input">
                <label for="">Author</label>
                <input type="text" value="">

            </div>
            <div class="gp_input">
                <label for="">ISBN</label>
                <input type="text" value="">

            </div>
            <div class="gp_input">
                <label for="">Editorial</label>
                <input type="text" value="">

            </div>
            <div class="gp_input">
                <label for="">Publication Date</label>
                <input type="date" value="">

            </div>
            <div class="gp_input">
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