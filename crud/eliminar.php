<?PHP
    include ("conexion.php");

    if (isset($_GET['idmiembro'])) {
        $idmiembro = $_GET['idmiembro'];
        $query = "DELETE FROM miembros WHERE idmiembro = $idmiembro";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Error en la consulta");

        }

        $_SESSION['message'] = 'Miembro eliminado';
        $_SESSION['message_type'] = 'danger';



        header("Location: index.php") ;
    }

    ?>