<?php
    $serverName = "localhost";
    $dataBase = "_33_biblioteca";
    $userName = "root";
    $passwd = "";
    //CREAR CONEXION
    $con = mysqli_connect($serverName,$userName,$passwd,$dataBase);
    if (!$con) die("Connection failed : ".mysqli_connect_error());
?>