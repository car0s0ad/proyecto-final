<?php
    include("conexion.php");

    if(isset($_GET['idmiembro'])) {
        $idmiembro = $_GET['idmiembro'];
        $query = "SELECT * FROM crud WHERE idmiembro = $idmiembro";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) == 1 ) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $dni = $row['dni'];
            $turno = $row['turno'];
            $email = $row['email'];
            $direccion = $row['direccion'];
            $edad = $row['edad'];

        }




        if(isset($_POST["actualizar"])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $dni = $_POST['dni'];
            $turno = $_POST['turno'];
            $email = $_POST['email'];
            $direccion = $_POST['direccion'];
            $edad = $_POST['edad'];
            $query = "UPDATE miembros set nombre = '$nombre', apellido = '$apellido', dni = '$dni', turno = '$turno', email = '$email', direccion = '$direccion', edad ='$edad' WHERE idmiembro = '$idmiembro'";
            $result = mysqli_query($conn, $query);
            
            $_SESSION['message'] = 'Actualizado con éxito';
            $_SESSION['message_type'] ='success';

            header('Location: crud.php');
        }
    }

    ?>

    <?php include("header.php") ?>
     <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="editar.php?idmiembro=<?php echo $_GET['idmiembro']; ?>" method="POST">
                        <div class="form-group">
                            <input name="title" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Modificar nombre">
                        </div>
                        <div class="form-group">
                            <input name="title" type="text" class="form-control" value="<?php echo $apellido; ?>" placeholder="Modificar apellido">
                        </div>
                        <div class="form-group">
                            <input name="title" type="text" class="form-control" value="<?php echo $dni; ?>" placeholder="Modificar DNI">
                        </div>
                        <div class="form-group">
                        <label> Turno </label>
                        <select class="form-control" name="turno">
                            <option value="Mañana"> Mañana</option>
                            <option value="Tarde"> Tarde</option>
                            <option value="Noche"> Noche</option>
                        </select>
                        </div> 
                        <div class="form-group">
                            <input name="title" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Modificar Email">
                        </div>
                        <div class="form-group">
                            <input name="title" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Modificar dirección">
                        </div>
                        <div class="form-group">
                            <input name="title" type="text" class="form-control" value="<?php echo $edad; ?>" placeholder="Modificar edad">
                        </div>
                        <button class="btn btn-success" name="actualizar">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include("footer.php") ?>