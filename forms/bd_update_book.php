<?php
    include('bd_connect_LocalHost.php');
    if(isset($_POST['update'])){
        $location = $_POST['localizacion'];
        $book_ID = $_POST['libro'];
        $tittle = $_POST['titulo'];
        $author = $_POST['autor'];
        $isbn = $_POST['isbn'];
        $publication_Date = $_POST['fecha_publicacion'];
        $editorial = $_POST['editorial'];
        $book_status = $_POST['estado_libro'];
        $sql = "UPDATE _33_book SET tittle = '$tittle', author = '$author',
        isbn = '$isbn', publication_date = '$publication_Date', editorial = '$editorial',
        book_status = '$book_status' where book_id = '$book_ID' ";
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
        $book_ID = $_POST['libro'];
        $sql = "DELETE FROM  _33_book where book_id = '$book_ID' ";
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