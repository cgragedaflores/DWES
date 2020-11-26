<?php
include '../forms/bd_connect.php';
include 'header_partner.php';
?>
<div class="content">
    <?php
if (isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 0) {
    ?>
    <form action="" method="POST" autocomplete="off" class="inputForm">
        <div class="grupo-input">
            <input type="text" name="str" id="" placeholder="Tittle or Author" required>
        </div>
        <div class="botones">
            <button type="submit" name="buscarLibro">Search</button>
        </div>
    </form>
    <?php
if (isset($_POST['buscarLibro'])) {

        # code...
        $palabra = $_POST['str'];
        $sql = "SELECT * FROM _33_book WHERE tittle LIKE '%$palabra%' OR author LIKE '%$palabra%' ";
        if ($result = mysqli_query($con, $sql)) {
            $rows = mysqli_num_rows($result);
            if ($rows < 1) {print_r("No se encontraron Resultados");}
            while ($mostrar = mysqli_fetch_array($result)) {
                if ($mostrar['book_status'] == 1) {
                    $estado = 'Available';
                } else {
                    $estado = 'Not Available';
                }
                ?>
    <div class="book">
        <div class="img_containter">
                <img src="../img/splatterbook.svg" alt="">
        </div>
        <div class="overlay">
            <h4><?php echo $mostrar['tittle']; ?></h4>
            <h4><?php echo $mostrar['author']; ?></h4>
        </div>
    </div>
    <?php
}
        }
    } else {
        $con->close();
    }
    ?>
    <?php } else {
    header('Location: ../index.php');

}
?>
</div>
<script type="text/javascript" src="https://remotehost.es/student33/dwes/js/menu_animation.js"></script>
</body>

</html>