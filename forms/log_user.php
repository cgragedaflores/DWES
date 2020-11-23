<?php
require('../header.php');
require('bd_connect_LocalHost.php');
?>
<div class="content">
    <?php
  if(isset($_POST['entrar'])){
    $userName = $_POST['user_name'];
    $password = $_POST['passwd'];
    if(strlen($userName) < 1 && strlen($password) < 1){
        echo "Por favor compruebe los  datos Correctos";
    }else{
      $query = "SELECT * FROM _33_partners where email = '$userName' && passwd = '$password' ";
      if($resultado = mysqli_query($con,$query)){     
        $register = mysqli_fetch_array($resultado);
        if($numRows = mysqli_num_rows($resultado) > 0){
         
          //Inicio De session
          //Inicializando sesssion como array
          $_SESSION['username'] = array();
          //Asignando datos a session
          $_SESSION['username']['user_id'] = $register['user_id'];
          $_SESSION['username']['first_name'] = $register['first_name'];
          $_SESSION['username']['last_name'] = $register['last_name'];
          $_SESSION['username']['address'] = $register['address'];
          $_SESSION['username']['nif'] = $register['dni'];
          $_SESSION['username']['email'] = $register['email'];
          $_SESSION['username']['birthdate'] = $register['birthdate'];
          $_SESSION['username']['member_type'] = $register['member_type'];
          $_SESSION['username']['phone_number'] = $register['phone_number'];
          // VALUE 1 ADMINISTRATOR
          if($_SESSION['username']['member_type'] == 1){
            header('location: http://localhost/33biblioteca_Local/templates/admin.php');
          // VALUE 0 PARTNER
          }else if($_SESSION['username']['member_type'] == 0){
            header('location: http://localhost/33biblioteca_Local/templates/partner.php');
          }
        }else{
          echo "Usuario y Contrasena no encontrados";
        }
      }
    }
  }
  mysqli_close($con);
?>
    <form action="<?php $_SERVER['PHP_SELF']?>" class="inputForm" autocomplete="off" method="POST">
        <div class="grupo-input">
            <label for="">email</label>
            <input type="text" value="" name="user_name">
        </div>
        <div class="grupo-input">
            <label for="">Password</label>
            <input type="password" value="" name="passwd">
        </div>
        <div class="botones">
            <button type="submit" name="entrar">Login</button>
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