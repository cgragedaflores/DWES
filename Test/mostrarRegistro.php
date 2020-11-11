<?php
                include('../forms/bd_connect_LocalHost.php');
                $sql = "SELECT * FROM _33_book where book_id = 3 ORDER BY inserted_on";
                if (mysqli_query($con, $sql)) {
                    $result = mysqli_query($con, $sql);
                    while ($mostrar = mysqli_fetch_array($result)) {
                        $imagen = $mostrar['imageName'];
                        if ($mostrar['book_status'] == 1) {
                            $estado = 'Availible';
                        } else {
                            $estado = 'Not Available';
                        }
                        echo $mostrar['tittle']."</br>";
                        echo $mostrar['author']."</br>";
                        echo $mostrar['isbn']."</br>";
                        echo $mostrar['editorial']."</br>";
                        echo $mostrar['publication_date']."</br>";
                        echo $estado."</br>";
                        echo $imagen."</br>";

                    }
                }
            ?>