<?php
include 'header_admin.php';
if (isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 1) {
    ?>
<div class="content">
    <div class="cajas">
        <div class="opciones">
            <a href="" class="link">
                <div class="imgcont">
                    <img src="../img/libros.svg" alt="">
                </div>
                <span>Books</span>
            </a>
        </div>
        <div class="opciones">
            <a href="adminFiles/user_administration.php" class="link">
                <div class="imgcont">
                    <img src="../img/usuario.svg" alt="">
                </div>
                <span>User</span>
            </a>
        </div>
        <div class="opciones">
            <a href="" class="link">
                <div class="imgcont">
                    <img src="../img/calendario.svg" alt="">
                </div>
                <span>Reserves</span>
            </a>
        </div>
    </div>
    <h3>Book's Recently Added</h3>
    <a href="http://localhost/33biblioteca_Local/forms/form_book_insert.php">Add Book</a>
    <div class="tablaLibro">

        <table>
            <thead>
                <th>Title</th>
                <th>isbn</th>
                <th>Author</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
include '../forms/bd_connect_LocalHost.php';
    $sql = "SELECT * FROM _33_book order by inserted_on ";
    if ($result = mysqli_query($con, $sql)) {
        while ($mostrar = mysqli_fetch_array($result)) {
            if ($status = $mostrar['book_status'] == 1) {
                $status = "Available";
            } else {
                $status = "Not Available";
            }
            ?>
                <tr>
                    <td><?php echo $mostrar['tittle']; ?></td>
                    <td><?php echo $mostrar['isbn']; ?></td>
                    <td><?php echo $mostrar['author']; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <form action="http://localhost/33biblioteca_Local/forms/form_book_Action.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $mostrar['book_id']; ?>">
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
<?php } else {
    header('Location: ../index.php');
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