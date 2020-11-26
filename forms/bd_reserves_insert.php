<?php
include 'bd_connect_LocalHost.php';
if (isset($_POST['register'])) {
    $user_id = $_POST['r_user'];
    $book_id = $_POST['r_book'];
    $startR = $_POST['r_begin'];
    $endR = $_POST['r_end'];
    //Insert user's on BD
    $sql_query = "INSERT INTO _33_reservations() VALUES('0','$user_id','$book_id','$startR','$endR','$endR',now())";
    if (mysqli_query($con, $sql_query)) {
        //Success
        $sql_query_log = "INSERT INTO _33_reservations_log() VALUES('0','$user_id','$book_id','$startR',0)";
        if (mysqli_query($con, $sql_query_log)) {
            //[Penalty 0 -> none] [Penalty 1 -> 1 week]
            if (isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 1) {
                echo "datos insertados correctamente";
                echo "<a href = " . "../templates/admin.php" . " >Volver al Inicio</a>";

            } else {
                header('Location: log_user.php');
            }
        }

    } else {
        echo "query error" . mysqli_error($con);
    }
}
