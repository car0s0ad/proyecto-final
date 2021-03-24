<?php include("includes/header.php") ?>
<?php include("includes/bootstrap.html") ?>
<?php 
include_once "conexion.php";

$query = "SELECT * FROM `propiedades`";
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
                <section class= "col- mx-auto pt-5">
                   <div clas="row">
                       <div class="col-">
                         <h1 class="titulo_detalle"><?php echo $propiedad_titulo;  ?></h1>
                       </div>
                   </div>
                </section>
                <section class= "col-md-8 mx-auto">
                    <div class="row align-items-center mx-5">
                            <div class="col- py-5">
                                    <div class="shadow">
                                            <div id="carouselControls" class="carousel slide" data-ride="carousel">
                                               <div class="carousel-inner">
                                                        <div class="carousel-item active align-items-center justify-content-center">
                                                             <img src="<?php echo $propiedad_img; ?>" class="img-fluid" alt="propiedad">
                                                        </div>
                                                        <div class="carousel-item">
                                                             <img class="d-block w-100" src="..." alt="Second slide">
                                                         </div>
                                                         <div class="carousel-item">
                                                              <img class="d-block w-100" src="..." alt="Third slide">
                                                         </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                 </div>
                                            </div>
                                            <div class="box-content text-center py-4">
                                                <h4 class="precio">Precio: $<?php echo $precio; ?></h4>
                                                <h4 class="expensas">Expensas/gastos: $<?php echo $expensas; ?></h4>
                                                <h4 class="direccion">Dirección: <?php echo $direccion; ?></h4>
                                                <h4 class="ambientes">Ambientes: <?php echo $ambientes; ?></h4>                        
                                                <h4 class="metros_cuadrados">Metros cuadrados: <?php echo $metros_cuadrados; ?></h4>
                                                <h4 class="cochera">Cochera: <?php echo $cochera; ?></h4>
                                                <h4 class="balcon">Balcón: <?php echo $balcon; ?></h4>
                                                <h4 class="mascotas">Pet-friendly <i class="las la-dog"></i> : <?php echo $mascotas; ?></h4>
                                                <h4 class="niños">Family-friendly <i class="las la-baby-carriage"></i> : <?php echo $ninos; ?></h4>
                                                <h4 class="otros_detalles">Otros Detalles: <?php echo $otros_detalles; ?></h4>
                                            </div>                                                
                                     </div>
                             </div>
                    </div>
                </section>
          </main>  
      </body>
    <?php include("includes/footer.php") ?>
    </html>