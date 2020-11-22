<?php
include 'bd_connect_LocalHost.php';
include '../templates/header_admin.php';
?>
<div class="content">
    <form action="bd_update_book.php" class="inputForm" autocomplete="off" method="POST">
        <?php
            include '../forms/bd_connect_LocalHost.php';
            if (isset($_POST['enviar'])) {
                $book_ID = $_POST['id'];
                $sql = "SELECT * FROM _33_book where book_id = $book_ID";
                $result = mysqli_query($con, $sql);
                if (!empty($result)) {
                    $resultado = mysqli_fetch_assoc($result);
        ?>
        <div class="grupo-input">
            <label for="">Location</label>
            <input type="text" name="localizacion" value="<?php echo $resultado['location_id']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Tittle</label>
            <input type="text" name="titulo" value="<?php echo $resultado['tittle']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Author</label>
            <input type="text" name="autor" value="<?php echo $resultado['author']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">ISBN</label>
            <input type="text" name="isbn" value="<?php echo $resultado['isbn']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Editorial</label>
            <input type="text" name="editorial" value="<?php echo $resultado['editorial']; ?>">
        </div>

        <div class="grupo-input">
            <label for="">Publication Date</label>
            <input type="date" name="fecha_publicacion" value="<?php echo $resultado['publication_date']; ?>">
        </div>
        <div class="grupo-input">

            <label for="">Book Status</label>
            <select name="estado_libro" id="s_book">
                <option value="1">Availible</option>
                <option value="0">Not Availible</option>

            </select>
        </div>
        <?php
} else {
        echo "No funciona";
    }
}
?>
        <div class="botones">
            <input type="hidden" name="libro" value="<?php echo $resultado['book_id']; ?>">
            <button type="submit" name="actualizar"><i class="fas fa-edit"></i></button>
            <button type="submit" name="eliminar"><i class="fas fa-trash"></i></button>
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