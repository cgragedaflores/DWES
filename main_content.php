    <div class="content">
        <form action="templates/book_template/book_result.php" method="POST" autocomplete="off" class="inputForm">
            <div class="grupo-input">
                <input type="text" name="str" id="" placeholder="Tittle or Author" required>
            </div>
            <div class="botones">
                <button type="submit" name="buscarLibro">Search</button>
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