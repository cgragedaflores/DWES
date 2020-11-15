<?php
include('../header.php') ?>
<div class="content">
    <div class="form-update">
        <form action="form_book_insert.php"  autocomplete="off"  class="informationForm">
                <label for="">Tittle</label>
                <input type="text" value="">
                <label for="">Author</label>
                <input type="text" value="">
                <label for="">ISBN</label>
                <input type="text" value="">
                <label for="">Editorial</label>
                <input type="text" value="">
                <label for="">Publication Date</label>
                <input type="date" value="">
                <label for="">Book Status</label>
                <select name="book_status" id="s_book">
                    <option value="1">Availible</option>
                    <option value="0">Not Availible</option>
                </select>
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