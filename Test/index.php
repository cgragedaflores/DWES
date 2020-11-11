<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TEST FORM UPDATE</title>
</head>

<body>
    <div class="form-update">
        <?php
                include('../forms/bd_connect_LocalHost.php');
                $sql = "SELECT * FROM _33_book where book_id = 8";
                if (mysqli_query($con, $sql)) {
                    $result = mysqli_query($con, $sql);
                    while ($mostrar = mysqli_fetch_array($result)) {
                        $imagen = $mostrar['imageName'];
                        if ($mostrar['book_status'] == 1) {
                            $estado = 'Availible';
                        } else {
                            $estado = 'Not Available';
                        }
        ?>
        <div class="gp_input_image">
            <label for="">Cover Page</label>
            <input type="file" name="cover_book" id="">
            <div class="show_cover">
                <img src="<?php echo $imagen?>" alt="">
            </div>
        </div>
        <form action="" class="update-form" autocomplete="off">
            <div class="gp_input">
                <label for="">Tittle</label>
                <input type="text" value="<?php echo $mostrar['tittle'];?>">

            </div>
            <div class="gp_input">
                <label for="">Author</label>
                <input type="text" value="<?php echo $mostrar['author'];?>">

            </div>
            <div class="gp_input">
                <label for="">ISBN</label>
                <input type="text" value="<?php echo $mostrar['isbn'];?>">

            </div>
            <div class="gp_input">
                <label for="">Editorial</label>
                <input type="text" value="<?php echo $mostrar['editorial'];?>">

            </div>
            <div class="gp_input">
                <label for="">Publication Date</label>
                <input type="date" value="<?php echo $mostrar['publication_date'];?>">

            </div>
            <div class="gp_input">
                <label for="">Book Status</label>
                <select name="book_status" id="s_book">
                    <option value="<?php echo $mostrar['book_status'];?>"><?php echo $estado?></option>
                    <option value="0">Not Availible</option>

                </select>
            </div>
            <?php
                }
            }
           ?>
            <div class="botones">
                <button type="submit">Update</button>
                <button type="submit">Delete</button>
            </div>
        </form>
    </div>
</body>

</html>