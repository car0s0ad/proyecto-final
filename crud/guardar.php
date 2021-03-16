<?PHP

include ("conexion.php");


    if(isset ($_POST['guardar'])) {
       $nombre = $_POST['nombre'];
       $apellido = $_POST['apellido'];
       $dni = $_POST['dni'];
       $turno = $_POST['turno'];
       $email = $_POST['email'];
       $direccion = $_POST['direccion'];
       $edad = $_POST['edad'];

      $query = "INSERT INTO miembros(nombre, apellido, dni, turno, email, direccion, edad) VALUES ('$nombre', '$apellido', '$dni', '$turno', '$email', '$direccion', '$edad')";
      $result = mysqli_query($conn, $query);
      if (!$result) {
         die("Error en la consulta");

      }

      $_SESSION['message'] = 'Guardado';
      $_SESSION['message_type'] ='success';


      header("Location: index.php") ;

   }
 ?>