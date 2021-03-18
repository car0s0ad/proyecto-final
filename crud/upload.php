<?php 
include 'conexion.php';
$success  = "";
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
		$cochera = $_POST['cochera'];
		$balcon = $_POST['balcon'];
		$mascotas = $_POST['mascotas'];
		$ninos = $_POST['ninos'];
		
		
		

		$query = "INSERT INTO propiedades (propiedad_titulo, tipo_anunciante, nombre_anunciante, tipo_inmueble, operacion, metros_cuadrados, ambientes, precio, expensas, direccion, otros_detalles, cochera, balcon, mascotas, ninos) VALUES ('$propiedad_titulo', '$tipo_anunciante', '$nombre_anunciante', '$tipo_inmueble', '$operacion', '$metros_cuadrados', '$ambientes', '$precio', '$expensas', '$direccion', '$otros_detalles', '$cochera','$balcon', '$mascotas', '$ninos')";
		
	 
		if (mysqli_query($conn, $query))
		
			$success = "Inmueble cargado exitosamente";
		}
		else 
		{
			echo "Error: " . $query . " " . mysqli_error($conn);
		}
		
        mysqli_close($conn);

?>