<?php include("includes/header.php") ?>
<?php include("includes/bootstrap.html") ?>
    <html class="h-100">
    <body class="d-flex flex-column h-100">
        <main role="main"></main>        
         
         <section>
            <div class="container-fluid container-md py-5">  
               <div class="row align-items-center col-12">
                  <h1>Propiedades</h1>
               </div>
            </div>
               <div class="row align-items-center mx-5">
                  <div class="col-sm-6 col-md-3 pb-4">
                      <div class="shadow">
                          <div class="box-image d-flex align-items-center justify-content-center py-5">
                             <img class="logo"  src="./recursos/ICONOS/pin1.png" href="#" width=20 height=27 alt="logo">
                          </div>
                          <div class="box-content text-center py-4">
                              <h4>Datos del inmueble</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 pb-4">
                      <div class="shadow">
                          <div class="box-image d-flex align-items-center justify-content-center py-5">
                             <img class="logo"  src="./recursos/ICONOS/pin1.png" href="#" width=20 height=27 alt="logo">
                          </div>
                          <div class="box-content text-center py-4">
                              <h4>Datos del inmueble</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 pb-4">
                      <div class="shadow">
                          <div class="box-image d-flex align-items-center justify-content-center py-5">
                             <img class="logo"  src="./recursos/ICONOS/pin1.png" href="#" width=20 height=27 alt="logo">
                          </div>
                          <div class="box-content text-center py-4">
                              <h4>Datos del inmueble</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 pb-4">
                      <div class="shadow">
                          <div class="box-image d-flex align-items-center justify-content-center py-5">
                             <img class="logo"  src="./recursos/ICONOS/pin1.png" href="#" width=20 height=27 alt="logo">
                          </div>
                          <div class="box-content text-center py-4">
                              <h4>Datos del inmueble</h4>
                          </div>
                      </div>
                  </div>
              </div>
         </section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php 
    if(isset($_GET['id'])) {
        $idmiembro = $_GET['id'];
        $query = "SELECT * FROM inmobd.propiedades WHERE id = $id";
        $result = mysqli_query($conn, $query);


    while($property_result = mysqli_fetch_assoc($result)){
        $id = $property_result['propiedad_id'];
        $propiedad_titulo = $property_result['propiedad_titulo'];
        $tipo_anunciante = $property_result['tipo_anunciante'];
        $tipo_inmueble = $property_result['tipo_inmueble'];
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
        $niños = $property_result['niños'];
        $otros_detalles = $property_result['otros_detalles'];
    }
		
?>
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $propiedad_img; ?>" class="img-responsive" alt="properties">
        </div>
        <h4><a href="detallepropiedad.php?id=<?php echo $id; ?>"><?php echo $propiedad_titulo;  ?></a></h4>
        <p class="price">Precio: $<?php echo $precio; ?></p>
        <p class="direccion">Dirección: <?php echo $direccion; ?></p>
        <p class="ambientes">Ambientes: <?php echo $ambientes; ?></p>
        <div class="listing-detail">
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="cochera"><?php echo $cochera; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="balcon"><?php echo $balcon; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="mascotas"><?php echo $mascotas; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="niños"><?php echo $niños; ?></span> 
        </div>
        <a class="btn btn-primary" href="detallepropiedad.php?id=<?php echo $id; ?>">Ver Detalle</a>
      </div>
      </div>
      <?php } ?>
    
    </body>
    <?php include("includes/footer.php") ?>
    </html>