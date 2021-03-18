<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "inmobd";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM propiedades ORDER By propiedad_id LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM propiedades WHERE propiedad_id LIKE '%$q%' LIKE '%$q%' OR propiedad_titulo LIKE '%$q%' OR tipo_anunciante LIKE '%$q%' OR tipo_inmueble LIKE '$q' ";
    }

    $resultado = $conn->query($query);

	

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID</td>
    					<td>Titulo</td>
    					<td>Tipo de Anunciante</td>
    					<td>Tipo de Inmueble</td>
    					<td>Operacion</td>
    				</tr>

    			</thead>
    			

    	<tbody>";


    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['propiedad_id']."</td>
    					<td>".$fila['propiedad_titulo']."</td>
    					<td>".$fila['tipo_anunciante']."</td>
    					<td>".$fila['tipo_inmueble']."</td>
    					<td>".$fila['operacion']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();