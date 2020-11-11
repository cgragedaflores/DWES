<?php
include('bd_connect_LocalHost.php');
if (isset($_POST['register'])) {
    $nif = $_POST["u_nif"];
    $name = $_POST["u_name"];
    $last_name = $_POST["u_last-name"];
    $email = $_POST["u_email"];
    $passwd = $_POST['u_password'];

    //Insert user's on BD
    $sql_query = "INSERT into _33_partners(dni,first_name,last_name,email,passwd,member_type,joined_on,partners_status)
    VALUES('$nif','$name','$last_name','$email','$passwd','Socio',NOW(),1)";
    if (mysqli_query($con, $sql_query)) {
        //Success
        echo "datos insertados correctamente";
    } else {
        echo "query error" . mysqli_error($con);
    }
}
?>
