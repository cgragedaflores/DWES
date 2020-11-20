<?php
include 'header_partner.php';
?>
<div class="content">
<?php
if (isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 0) {
    ?>
    <h1>WELCOME PARTNER</h1>
    <?php } else {
    header('Location: ../index.php');
}
?>
</div>
</body>
</html>