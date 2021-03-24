<?php 
include 'conexion.php';
$success  = "";
	if (isset($_POST['guardar'])){
		$propiedad_titulo = $_POST['propiedad_titulo'];
		$anunciante = $_POST['anunciante'];
		$nombre_anunciante = $_POST['nombre_anunciante'];
		$correo = $_POST['correo'];
		$inmueble = $_POST['inmueble'];
		$operacion = $_POST['operacion'];
		$metros_cuadrados = $_POST['metros_cuadrados'];
		$ambientes = $_POST['ambientes'];
		$precio = $_POST['precio'];
		$expensas = $_POST['expensas'];
		$direccion = $_POST['direccion'];		
		$latitud = $_POST['latitud'];
		$longitud = $_POST['longitud'];
		$otros_detalles = $_POST['otros_detalles'];
		$cochera = $_POST['cochera'];
		$ninos= $_POST['ninos'];
		$balcon = $_POST['balcon'];
		$mascotas = $_POST['mascotas'];
		

		$query = "INSERT INTO propiedades (propiedad_titulo, anunciante, nombre_anunciante, correo, inmueble, operacion, metros_cuadrados, ambientes, precio, expensas, direccion, latitud, longitud, otros_detalles, cochera, balcon, mascotas, ninos) VALUES ('$propiedad_titulo', '$anunciante', '$nombre_anunciante','$correo', '$inmueble', '$operacion', '$metros_cuadrados', '$ambientes', '$precio', '$expensas', '$direccion', '$latitud', '$longitud', '$otros_detalles', '$cochera','$balcon', '$mascotas', '$ninos')";
		
	 
		if (mysqli_query($conn, $query))
		
			$success = "Inmueble cargado exitosamente";
		}
		else 
		{
			echo "Error: " . $query . " " . mysqli_error($conn);
		}
		
        mysqli_close($conn);

?>