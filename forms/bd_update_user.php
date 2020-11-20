<?php
    include('bd_connect_LocalHost.php');
    if(isset($_POST['update'])){
        $user_id = $_POST['user_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $nif = $_POST['nif'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $birthdate = $_POST['birthdate'];
        $addres = $_POST['address'];
        $sql = "UPDATE _33_partenrs SET first_name = '$first_name', last_name = '$last_name',
        dni = '$nif', email = '$email', phone_number = '$phone_number',
        birthdate = '$birthdate' addres = '$addres' where user_id = '$user_id' ";
        if ($con -> query($sql) == true) {
            # code...
            echo "Record updated successfully";
            header('location: ../templates/admin.php');
        }else{
            echo "Error Updating".$con -> error;
        }
        $con -> close();
    }
    if (isset($_POST['delete'])) {
        # code...
        $user_id = $_POST['user_id'];
        $sql = "DELETE FROM  _33_book where user_id = '$user_id' ";
        if ($con -> query($sql) == true) {
            # code...
            echo "Record updated successfully";
            header('location: ../templates/admin.php');
        }else{
            echo "Error Updating".$con -> error;
        }
        $con -> close();
    }
?>