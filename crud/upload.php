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
	$cochera = $_POST['cochera'];
	$balcon = $_POST['balcon'];
	$mascotas = $_POST['mascotas'];
	$niños = $_POST['niños'];
	$otros_detalles = $_POST['otros_detalles'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

    $insertprop = "INSERT INTO propiedades(propiedad_titulo, tipo_anunciante, nombre_anunciante, tipo_inmueble, operacion, metros_cuadrados, ambientes, precio, expensas, direccion, cochera, balcon, mascotas, niños, otros detalles) VALUES ('$propiedad_titulo', '$tipo_anunciante', '$nombre_anunciante', '$tipo_inmueble', '$operacion', '$metros_cuadrados', '$ambientes', '$precio', '$expensas', '$direccion', '$cochera', '$balcon', '$mascotas', '$niños', '$otros_detalles')";
    $result = mysqli_query($conn, $insertprop);
	if (!$result) {
		die("Error en la consulta");
	 }

	$insertimg = "INSERT INTO propiedades_imagen(image_url) VALUES('$new_img_name')";
    $result = mysqli_query($conn, $insertprop);
	if (!$result) {
		die("Error en la consulta");
	 }


?>