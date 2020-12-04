<?php
include '../forms/bd_connect_LocalHost.php';
include 'header_partner.php';
?>
<div class="content">
    <form action="buscarLibro.php" method="post" class="inputForm">
        <div class="grupo-input">
            <input type="text" name="caja_busqueda" id="caja_busqueda">
        </div>
    </form>
    <div class = "result_book" id="datos">
    </div>
</div>
<script type="text/javascript" src="https://remotehost.es/student33/dwes/js/menu_animation.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>

</html>