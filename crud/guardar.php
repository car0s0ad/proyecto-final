<?PHP

include ("conexion.php");


    if(isset ($_POST['guardar'])) {
       $id = $_POST['propiedad_id'];
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
       $propiedad_img= $_POST['propiedad_img'];       
       $cochera = $_POST['cochera'];
       $balcon = $_POST['balcon'];
       $mascotas= $_POST['mascotas'];       
       $niños = $_POST['niños'];
       $otros_detalles = $_POST['otros_detalles'];

      $query = "INSERT INTO `propiedades`(`propiedad_id`, `propiedad_titulo`, `tipo_anunciante`, `nombre_anunciante`, `tipo_inmueble`, `operacion`, `metros_cuadrados`, `ambientes`, `precio`, `expensas`, `direccion`, `propiedad_img`, `cochera`, `balcon`, `mascotas`, `niños`, `otros_detalles`) VALUES ('$id', '$propiedad_titulo', '$tipo_anunciante', '$nombre_anunciante', '$tipo_inmueble', '$operacion', '$metros_cuadrados', '$ambientes', '$precio', '$expensas', '$direccion', '$propiedad_img', '$cochera', '$balcon', '$mascotas', '$niños', '$otros_detalles')";
      $result = mysqli_query($conn, $query);
      if (!$result) {
         die("Error en la consulta");

      }

      $_SESSION['message'] = 'Guardado';
      $_SESSION['message_type'] ='success';


      header("Location: index.php") ;

   }
 ?>
