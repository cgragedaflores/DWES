<?php
include '../templates/header_admin.php';
?>
<div class="content">
    <form action="bd_reserves_insert.php" class="inputForm" autocomplete="off" method="POST">
        <div class="grupo-input">
            <label for="">Book ID</label>
            <input type="text" value="" name="r_book" required>
        </div>
        <div class="grupo-input">
            <label for="">Member ID</label>
            <input type="text" value="" name="r_user" required>
        </div>
        <div class="grupo-input">
            <label for="">Initial Date</label>
            <input type="date" value="" name="r_begin" required>
        </div>
        <div class="grupo-input">
            <label for="">Return Date</label>
            <input type="date" value="" name="r_end" required>
        </div>
        <div class="botones">
            <button type="submit" name="register"><i class="fas fa-cart-arrow-down"></i></button>
        </div>
        </form>
        <div class="tablaLibro">

        <table>
            <caption><h3>Bookings Recently Added</h3></caption>
            <thead>
                <th>Booking ID</th>
                <th>Book ID</th>
                <th>User ID</th>
                <th>Inital Date</th>
                <th>Return Date</th>
                <th>Action<th>
            </thead>
            <tbody>
                <?php
    include 'bd_connect_Localhost.php';
    $sql = "SELECT * FROM _33_reservations";
    if ($result = mysqli_query($con, $sql)) {
        while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td data-label = "Booking ID"><?php echo $mostrar['reservation_id']; ?></td>
                    <td data-label = "Book ID"><?php echo $mostrar['partner_id']; ?></td>
                    <td data-label = "User ID"><?php echo $mostrar['book_id']; ?></td>
                    <td data-label = "Inital Date"><?php echo $mostrar['inital_date']; ?></td>
                    <td data-label = "Return Date"><?php echo $mostrar['return_date']; ?></td>
                    <td data-label = "Action">
                        <form action="form_reserve_action.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $mostrar['reservation_id']; ?>">
                            <button type="submit" name='enviar'><i class="fas fa-pen"></i></button>
                    </form>
                    </td>
                </tr>
                <?php
}
    }
    ?>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>