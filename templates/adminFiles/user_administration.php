<?php
    require('../header_admin.php');
?>
<div class="content">
    <div class="cajas">
        <div class="opciones">
            <a href="" class="link">
                <div class="imgcont">
                    <img src="../../img/libros.svg" alt="">
                </div>
                <span>Books</span>
            </a>
        </div>
        <div class="opciones">
            <a href="#" class="link">
                <div class="imgcont">
                    <img src="../../img/usuario.svg" alt="">
                </div>
                <span>User</span>
            </a>
        </div>
        <div class="opciones">
            <a href="" class="link">
                <div class="imgcont">
                    <img src="../../img/calendario.svg" alt="">
                </div>
                <span>Reserves</span>
            </a>
        </div>
    </div>
    <div class="tablaLibro">
        <table>
            <thead>
                <th>Picture</th>
                <th>Email</th>
                <th>NIF</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    include('../../forms/bd_connect_LocalHost.php');
                    $sql = "SELECT * FROM _33_partners order by joined_on ";
                    if ($result = mysqli_query($con, $sql)) {
                        while ($mostrar = mysqli_fetch_array($result)) {
                            if($status = $mostrar['partners_status'] == 1){
                                $status = "Available";
                            }else{
                                $status = "Not Available";
                            }
                ?>
                <tr>
                    <td><img src="../../img/user.png" alt=""></td>
                    <td><?php echo $mostrar['email']; ?></td>
                    <td><?php echo $mostrar['dni']; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <form action="http://localhost/33biblioteca_Local/forms/form_user_Action.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $mostrar['user_id']; ?>">
                            <button type="submit" name='enviar'><i class="fas fa-user-edit"></i></button>
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
<script type="text/javascript">
$(document).ready(function() {
    $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
    });
});
</script>
</body>

</html>