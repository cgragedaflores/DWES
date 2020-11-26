<?php
include 'bd_connect_LocalHost.php';
include '../templates/header_admin.php';
?>
<div class="content">
    <?php
if (isset($_POST['enviar'])) {
    $r_id = $_POST['id'];
    $sql = "SELECT * FROM _33_reservations WHERE reservation_id = '$r_id' ";
    if ($consulta = mysqli_query($con, $sql)) {
        $fila = mysqli_fetch_assoc($consulta);
    }
    ?>
    <form action="bd_update_reserves.php" method="POST" class="inputForm">
        <div class="grupo-input">
            <label for="">Booking ID</label>
            <input type="text" name="r_id" id="" value="<?php echo $fila['reservation_id']; ?>" readonly>
        </div>
        <div class="grupo-input">
            <label for="">User ID</label>
            <input type="text" name="r_pid" id="" value="<?php echo $fila['partner_id']; ?>"><span></span>
        </div>
        <div class="grupo-input">
            <label for="">Book ID</label>
            <input type="text" name="r_bid" id="" value="<?php echo $fila['book_id']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Booking Start Date</label>
            <input type="date" name="r_sdate" id="" value="<?php echo $fila['inital_date']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Booking Return Date</label>
            <input type="date" name="r_edate" id="" value="<?php echo $fila['return_date']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Real Bookin Return Date</label>
            <input type="date" name="r_rdate" id="" value="<?php echo $fila['real_return_date']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Real Booking Date</label>
            <input type="date" name="r_ron" id="" value="<?php echo $fila['reserved_on']; ?>">
        </div>
        <div class="botones">
            <button type="submit" name="actualizar"><i class="fas fa-edit"></i></button>
            <button type="submit" name="eliminar"><i class="fas fa-trash"></i></button>
        </div>
    </form <?php
} else {
    echo "Algo ha salido mal";
}
?> </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.nav_btn').click(function() {
            $('.mobile_nav_items').toggleClass('active');
        });
    });
    </script>
    </body>

    </html>