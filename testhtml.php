<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Document</title>
</head>

<body>
    <div class="content">
        <table class="tablaLibros" border="1px solid black" align="center">
            <thead>
                <tr>
                    <th>Book ID </th>
                    <th>ISBN</th>
                    <th>Tittle</th>
                    <th>Author</th>
                    <th>Editorial</th>
                    <th>Location ID</th>
                    <th>Publication Date</th>
                    <th>Insert Date</th>
                    <th>Status</th>
                    <th>Cover Page</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('forms/bd_connect_LocalHost.php');
                $sql = "SELECT * FROM _33_book ORDER BY inserted_on";
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
                        </tr>
                        <td><?php echo $mostrar['book_id']; ?></td>
                        <td><?php echo $mostrar['isbn']; ?></td>
                        <td><?php echo $mostrar['tittle']; ?></td>
                        <td><?php echo $mostrar['author']; ?></td>
                        <td><?php echo $mostrar['editorial']; ?></td>
                        <td><?php echo $mostrar['location_id']; ?></td>
                        <td><?php echo $mostrar['publication_date']; ?></td>
                        <td><?php echo $mostrar['inserted_on']; ?></td>
                        <td><?php echo $estado; ?></td>
                        <td><img src="<?php echo $imagen; ?>" alt="" style="width: 20%;height: 30%;"></td>
                        <td><a href=""><i class="fas fa-pen"></i></a><a href=""><i class="fas fa-trash"></i></a></td>
                        <tr>
                    <?php
                    }
                }
                    ?>

            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav_btn').click(function() {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>
</body>

</html>