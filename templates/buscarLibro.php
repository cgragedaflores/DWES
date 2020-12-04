<?php 
session_start();
include '../forms/bd_connect_LocalHost.php';
$salida = "";
$query = "SELECT * FROM _33_book ";
if(isset($_POST["consulta"])){
	$q  = $con -> real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM _33_book WHERE tittle LIKE '%$q%' ";
}
$resultado = $con -> query($query);
if ($resultado ->num_rows > 0) {
	# code...
	while ($fila = $resultado -> fetch_assoc()) {
		# code...
		if(isset($_SESSION['username'])){
			$salida.="
			<div class='book'>
				<div class='img_containter'>
					<img src='https://remotehost.es/student33/dwes/img/splatterbook.svg'>
				</div>
				<div class = 'overlay'>
					<h4>".$fila['tittle']."</h4>
					<h4>".$fila['author']."</h4>
				</div>
				<form action='' method='post'>
						<input type='hidden' name='book' value=".$fila['book_id'].">
					<div class = 'botones'>
						<button type='button' name='reservar'>Reserve</button>
					</div>
				</form>
			</div>";
		}else{
			//IF NOT ONLY LOOK BOOKS
			$salida.="
				<div class='book'>
					<div class='img_containter'>
						<img src='https://remotehost.es/student33/dwes/img/splatterbook.svg'>
					</div>
					<div class = 'overlay'>
						<h4>".$fila['tittle']."</h4>
						<h4>".$fila['author']."</h4>
					</div>
				</div>";
		}
	}
}else{
	$salida .= "No hay Datos :(";
}
echo $salida;
$con -> close();
?>