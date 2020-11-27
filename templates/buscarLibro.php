<?php 
$mysqli = new mysqli("localhost","root","","_33_biblioteca");
$salida = "";
$query = "SELECT * FROM _33_book";
if(isset($_POST["consulta"])){
	$q  = $mysqli -> real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM _33_book WHERE tittle LIKE '%$q%' ";
}
$resultado = $mysqli -> query($query);
if ($resultado ->num_rows > 0) {
	# code...
	$salida .= "<table>
	<caption><h3>Book's Recently Added</h3></caption>
	<thead>
		<th>Title</th>
		<th>Author</th>
	</thead>
	<tbody>";
	while ($fila = $resultado -> fetch_assoc()) {
		# code...
		$salida.= "<tr>
			<td data-label = 'Title'>".$fila['tittle']."</td>
			<td data-label = 'Author'>".$fila['author']."</td>
		</tr>";
	}
	$salida="</tbody></table>";

}else{
	$salida .= "No hay Datos :(";
}
echo $salida;
$mysqli -> close();
?>