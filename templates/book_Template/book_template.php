<?php
include '../../forms/bd_connect_LocalHost.php';
require '../../header.php';
?>
<div class="content">
<?php
if (isset($_POST['reservar'])) {
    $book_id = $_POST['libro'];
    $sql = "SELECT * FROM _33_book WHERE book_id = '$book_id' ";
    if ($result = mysqli_query($con, $sql)) {
        $libro = mysqli_fetch_assoc($result);

        ?>
    <div class="image_book">
        <img src="../../img/portadas/AdiosAlfrio.jpg" alt="">
    </div>
    <div class="description">
        <h3>Title <span><?php echo $libro['tittle']; ?></span></h3>
        <h3>Author <span><?php echo $libro['author']; ?></span></h3>
        <h3>ISBN <span><?php echo $libro['isbn']; ?></span></h3>
        <h3>Publication Date<span><?php echo $libro['publication_date']; ?></span></h3>
        <h3>Editorial <span><?php echo $libro['editorial']; ?></span></h3>
    </div>
    <button>Reservar</button>
</div>
<?php
} else {
        echo "No se han encontrado Resultados";
    }

} else {
    echo "No funciona bro recepcion";
}
?>
<script type="text/javascript">
$(document).ready(function() {
    $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
    });
});
</script>
</body>

</html>