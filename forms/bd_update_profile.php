<?php
    session_start();
    include('bd_connect_LocalHost.php');
    if (isset($_POST['actualizar'])) {
        $user_id = $_POST['user_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['laste_name'];
        $nif = $_POST['nif'];
        $email = $_POST['email'];
        $tel = $_POST['phone_number'];
        $birthdate = $_POST['birthdate'];
        $addres = $_POST['address'];
        $sql = "UPDATE _33_partners set first_name ='$first_name', last_name = '$last_name',
        dni = '$nif', email = '$email', phone_number = '$tel', birthdate = '$birthdate',
        addres = '$addres' WHERE user_id = '$user_id' ";
        if ($con -> query($sql) == true) {
            if (isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 1) {
                
                header('location: ../templates/admin.php');
            } else if(isset($_SESSION['username']) && $_SESSION['username']['member_type'] == 0){

                header('location: ../templates/partner.php');
            } else {echo "suputamadre";}
           
        }else{
            echo "Error Updating ".$con -> error;
        }
        $con -> close();
    }
    if (isset($_POST['eliminar'])) {
        # code...
        $user_id = $_POST['user_id'];
        $sql = "DELETE FROM  _33_partners where user_id = '$user_id' ";
        if ($con -> query($sql) == true) {
            # code...
            header('location: ../templates/admin.php');
        }else{
            echo "Error deleting".$con -> error;
        }
        $con -> close();
    }
?>