<?PHP
    include ("conexion.php");

    if (isset($_GET['propiedad_id'])) {
        $idmiembro = $_GET['propiedad_id'];
        $query = "DELETE FROM `propiedades` WHERE propiedad_id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Error en la consulta");

        }

        $_SESSION['message'] = 'Propiedad eliminada';
        $_SESSION['message_type'] = 'danger';



        header("Location: index.php") ;
    }

    ?>