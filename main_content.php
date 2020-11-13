    <div class="content">
        <form action="templates/book_template/book_result.php" method="POST" autocomplete="off">
            <input type="text" name="str" id="" placeholder="Tittle or Author" required>
            <button type="submit" name="buscarLibro">Search</button>
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