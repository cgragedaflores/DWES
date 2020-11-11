<?php
  require('../header.php');
  require('bd_connect_LocalHost.php');
  
  if(isset($_POST['submit'])){
    $userName = $_POST['user_name'];
    $password = $_POST['password'];
    if(strlen($userName) < 1 && strlen($password) < 1){
        echo "Por favor compruebe los  datos Correctos";
    }else{
      $query = "SELECT * FROM _33_partners where email = '$userName' && passwd = '$password'";
      if($resultado = mysqli_query($con,$query)){     
        $register = mysqli_fetch_array($resultado); 
        if($numRows = mysqli_num_rows($resultado) > 0){
          //Inicio De session
          session_start();
          //Inicializando sesssion como array
          $_SESSION['username'] = array();
          //Asignando datos a session
          $_SESSION['username']['first_name'] = $register['first_name'];
          $_SESSION['username']['last_name'] = $register['last_name'];
          //$_SESSION['username']['address'] = $register['address'];
          $_SESSION['username']['email'] = $register['email'];
          $_SESSION['username']['birthdate'] = $register['birthdate'];
          $_SESSION['username']['member_type'] = $register['member_type'];
          $_SESSION['username']['phone_number'] = $register['phone_number'];
          if($_SESSION['username']['member_type'] == 'bibliotecario'){
            header('location: http://localhost/33biblioteca_Local/templates/admin.php');
          }else if($_SESSION['username']['member_type'] == 'socio'){
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
<div class="content">
    <div class="form-update">
        <form action="<?php $_SERVER['PHP_SELF']?>" class="update-form" autocomplete="on" method="POST">
            <div class="gp_input">
                <label for="">User</label>
                <input type="text" value="" name="user_name">
            </div>
            <div class="gp_input">
                <label for="">Password</label>
                <input type="password" value="" name="password">
            </div>
            <div class="botones">
                <button type="submit" name = "submit">Login</button>
            </div>
        </form>
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