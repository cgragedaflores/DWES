<?php
include 'bd_connect_LocalHost.php';
include '../templates/header_admin.php';
?>
<div class="content">
    <?php
if (isset($_POST['enviar'])) {
    $user_id = $_POST['id'];
    $sql = "SELECT * FROM _33_partners WHERE user_id = '$user_id' ";
    if ($consulta = mysqli_query($con, $sql)) {
        $fila = mysqli_fetch_assoc($consulta);
    }
    ?>
    <form action="bd_update_profile.php" method="POST" class="inputForm">
        <div class="grupo-input">
            <label for="">User ID</label>
            <input type="text" name="user_id" id="" value="<?php echo $fila['user_id']; ?>" readonly>
        </div>
        <div class="grupo-input">
            <label for="">First Name</label>
            <input type="text" name="first_name" id="" value="<?php echo $fila['first_name']; ?>"><span></span>
        </div>
        <div class="grupo-input">
            <label for="">Last Name</label>
            <input type="text" name="last_name" id="" value="<?php echo $fila['last_name']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">NIF</label>
            <input type="text" name="nif" id="" value="<?php echo $fila['dni']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">email</label>
            <input type="email" name="email" id="" value="<?php echo $fila['email']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Phone Number</label>
            <input type="tel" name="phone_number" id="" value="<?php echo $fila['phone_number']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">BirthDate</label>
            <input type="date" name="birthdate" id="" value="<?php echo $fila['birthdate']; ?>">
        </div>
        <div class="grupo-input">
            <label for="">Address</label>
            <input type="text" name="address" id="" value="<?php echo $fila['addres']; ?>">
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