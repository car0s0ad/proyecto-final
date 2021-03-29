<?php
 include('conexion.php');

if ($_POST) {
	$anunciante = $_POST['anunciante1'];
	$inmueble = $_POST['inmueble1'];
	$ambientes = $_POST['ambientes1'];

 if ($anunciante=='' && $inmueble=='' && $ambientes=='') {
 		$queryinmo = "SELECT * FROM `propiedades` LIMIT 10";
 	}else{

 		if ($anunciante!='') {
 			$anuncianteSearch="`Anunciante` LIKE '$anunciante' ";
 		}else {
 			$anuncianteSearch = "`Anunciante` !='NULL'";
 		}

 		if ($inmueble!='') {
 			$inmuebleSearch="`inmueble` LIKE '$inmueble' ";
 		}else {
 			$inmuebleSearch = "`inmueble` !='NULL'";
 		}

 		if ($ambientes!='') {
 			$ambientesSearch="`ambientes` LIKE '$ambientes' ";
 		}else {
 			$ambientesSearch = "`ambientes` !='NULL'";
 		} 
 		$queryinmo= "SELECT * FROM `propiedades` WHERE $anuncianteSearch AND $inmuebleSearch AND $ambientesSearch LIMIT 8";
 	}
?>

<?php $query = "SELECT * FROM `propiedades`";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error";
}
?>

    <?php 
     while($property_result = mysqli_fetch_assoc($result)){
        $id = $property_result['propiedad_id'];
        $propiedad_titulo = $property_result['propiedad_titulo'];
        $tipo_anunciante = $property_result['anunciante'];
        $nombre_anunciante = $property_result['nombre_anunciante'];
        $tipo_inmueble = $property_result['inmueble'];
        $operacion = $property_result['operacion'];
        $metros_cuadrados = $property_result['metros_cuadrados'];
        $ambientes = $property_result['ambientes'];
        $precio = $property_result['precio'];
        $expensas = $property_result['expensas'];
        $direccion = $property_result['direccion'];
        $propiedad_img = $property_result['propiedad_img'];
        $propiedad_img2 = $property_result['propiedad_img2'];
        $propiedad_img3 = $property_result['propiedad_img3'];
        $cochera = $property_result['cochera'];
        $balcon = $property_result['balcon'];
        $mascotas = $property_result['mascotas'];
        $ninos = $property_result['ninos'];
        $otros_detalles = $property_result['otros_detalles'];
    }
?>
	 <html class="h-100">
     <body class="d-flex flex-column h-100">
            <main role="main"></main>    
                    <section>
                            <div class="container-fluid">
                                    <div class="row align-items-center mx-5">
                                            <?php 
                                                if ($result = mysqli_query($con, $queryinmo)) {
                                                    while ($inmo = mysqli_fetch_array($result)) {
                                                        $filteredanunciante = $inmo['anunciante'];
                                                        $filteredinmueble = $inmo['inmueble'];
                                                        $filteredambientes = $inmo['ambientes'];
                                                        $fotos = $inmo['propiedad_img'];
                                                        $id = $inmo['propiedad_id'];
                                             ?>
                                                            <div class="col-sm-6 col-md-3 pb-5">
                                                                <div class="shadow">
                                                                    <div class="box-image d-flex align-items-center justify-content-center">
                                                                        <img src="<?php echo $fotos ?>" class="img-fluid" alt="propiedad">
                                                                    </div>
                                                                    <div class="box-content text-center py-4">
                                                                        <h4><a href="detallepropiedad.php?id=<?php echo $id; ?>"><?PHP echo $inmo['propiedad_titulo'] ?></a></h4>
                                                                        <br>
                                                                        <h4 class="price">Precio: $<?PHP echo $inmo['precio'] ?> </h4>
                                                                        <h4 class="direccion">Dirección: <?PHP echo $inmo['direccion'] ?></h4>
                                                                        <h4 class="ambientes">Ambientes: <?PHP echo $inmo['ambientes'] ?></h4>
                                                                        <br>
                                                                        <a href="detallepropiedad.php?id=<?php echo $id; ?>">
                                                                        <input type="submit" value="Ver detalles"><a href="detallepropiedad.php?id=<?php echo $id; ?>"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
 			                                                }
 		                                                    }	
                                                            }
                                                            ?>
                                    </div>
                            </div>
                    </section>
            </main>
      </body>
</html>