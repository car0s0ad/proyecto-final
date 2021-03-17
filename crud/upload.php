<?php 
include ("conexion.php");

	if (isset($_POST['guardar'])){
		$propiedad_titulo = $_POST['propiedad_titulo'];
		$tipo_anunciante = $_POST['tipo_anunciante'];
		$nombre_anunciante = $_POST['nombre_anunciante'];
		$tipo_inmueble = $_POST['tipo_inmueble'];
		$operacion = $_POST['operacion'];
		$metros_cuadrados = $_POST['metros_cuadrados'];
		$ambientes = $_POST['ambientes'];
		$precio = $_POST['precio'];
		$expensas = $_POST['expensas'];
		$direccion = $_POST['direccion'];
		$otros_detalles = $_POST['otros_detalles'];

	$checkbox=$_POST


    $query = "INSERT INTO propiedades(propiedad_titulo, tipo_anunciante, nombre_anunciante, tipo_inmueble, operacion, metros_cuadrados, ambientes, precio, expensas, direccion, cochera, balcon, mascotas, niños, otros detalles) VALUES ('$propiedad_titulo', '$tipo_anunciante', '$nombre_anunciante', '$tipo_inmueble', '$operacion', '$metros_cuadrados', '$ambientes', '$precio', '$expensas', '$direccion', '$cochera', '$balcon', '$mascotas', '$niños', '$otros_detalles')";
    $result = mysqli_query($conn, $query);
	if (!$result) {
		die("Error en la consulta");
}


}
?>