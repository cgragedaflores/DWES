<?php
    include('bd_connect_LocalHost.php');
    if(isset($_POST['actualizar'])){
        $reserveID = $_POST['r_id'];
        $reserverPartenerID = $_POST['r_pid'];
        $reserveBookID = $_POST['r_bid'];
        $reserveStartDate = $_POST['r_sdate'];
        $reserveEndDate = $_POST['r_edate'];
        $realReturnDate = $_POST['r_rdate'];
        $insertedOn = $_POST['r_ron'];
        $sql = "UPDATE _33_reservations SET partner_id = '$reserverPartenerID', book_id = '$reserveBookID',
        inital_date = '$reserveStartDate', return_date = '$reserveEndDate', real_return_date = '$realReturnDate',
        reserved_on = '$insertedOn' where reservation_id = '$reserveID' ";
        if ($con -> query($sql) == true) {
            # code...
            echo "Record updated successfully";
            header('location: ../templates/admin.php');
        }else{
            echo "Error Updating".$con -> error;
        }
        $con -> close();
    }
    if (isset($_POST['eliminar'])) {
        # code...
        $reserveID = $_POST['r_id'];
        $sql = "DELETE FROM  _33_reservations where reservation_id = '$reserveID' ";
        if ($con -> query($sql) == true) {
            # code...
            echo "Record updated successfully";
            header('location: ../templates/admin.php');
        }else{
            echo "Error Deleting".$con -> error;
        }
        $con -> close();
    }
?>