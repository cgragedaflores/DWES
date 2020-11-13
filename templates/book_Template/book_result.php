<?php
    require('../../forms/bd_connect_LocalHost.php');
    require('../../header.php');
?>
<div class="content">
    <?php
        if (isset($_POST['buscarLibro'])) {
            # code...
            $palabra = $_POST['str'];
            $sql = "SELECT * FROM _33_book WHERE tittle LIKE '%$palabra%' OR author LIKE '%$palabra%' ";
            if ($result = mysqli_query($con, $sql)) {
            $rows = mysqli_num_rows($result);
            if($rows < 1){print_r("No se encontraron Resultados");}
            while ($mostrar = mysqli_fetch_array($result)) {
                if($mostrar['book_status'] == 1){
                    $estado = 'Available';
                }else{
                    $estado = 'Not Available';
                }
    ?>
    <div class="book">
        <div class="img_containter">
                <img src="../../img/portadas/Patria.jpg" alt="">
        </div>
        <div class="overlay">
            <h4><?php echo $mostrar['tittle']; ?></h4>
            <h4><?php echo $mostrar['author']; ?></h4>
            <form action="../workInProgress.php" method = "POST">
                <button type="submit" value = "<?php $mostrar['book_id']?>">Reserve</button>
            </form>
        </div>
    </div>
    <?php 
                }    
            }
        }else{
            echo "no funciona bro";
            $con -> close();
        }
    ?>
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