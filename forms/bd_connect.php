<?php
    $serverName = "remotehost.es";
    $dataBase = "dweslibrary";
    $userName = "dwes123";
    $passwd = "test1234.";
    //CREAR CONEXION
    $con = mysqli_connect($serverName,$userName,$passwd,$dataBase);
    if (!$con) die("Connection failed : ".mysqli_connect_error());
?>