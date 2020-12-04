<?php if(isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 1 ){

?>
<div class="content">
    <h1>USER DOC</h1>
</div>
<?php 
    }else {
        echo "Ingresa con un usuario Valido";
        echo "<a href = " . "../forms/log_user.php" . " >Volver al Inicio</a>";
    }
?>
<script type="text/javascript" src="https://remotehost.es/student33/dwes/js/menu_animation.js"></script>
</body>

</html>