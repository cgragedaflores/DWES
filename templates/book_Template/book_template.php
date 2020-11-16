<?php
    include('../../forms/bd_connect_LocalHost.php');
    require('../../header.php');
?>
<div class="content">
    <?php 
        if(isset($_POST['entrar'])) 
    ?>
    <div class="image_book">
    </div>
    <div class="description">
    </div>
    <button>Reservar</button>
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