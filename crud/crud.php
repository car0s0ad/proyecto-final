<?php include("conexion.php") ?> 
<?php include("header.php") ?>
 <html class="h-100">
    <body>
        <main role="main"></main>        
    

<br>
<br>
<a href="carga.php?"type=button class="btn btn-success btn-lg">Agregar miembro</a><br>
<br>
<br>

<div class="col-md-8"><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Miembro</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</sth>
                <th>Turno</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM crud";
            $result_crud = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result_crud)) { ?>
                <tr>
                    <td> <?PHP echo $row['idmiembro'] ?> </td>
                    <td> <?PHP echo $row['nombre'] ?> </td>
                    <td> <?PHP echo $row['apellido'] ?> </td>
                    <td> <?PHP echo $row['dni'] ?> </td>
                    <td> <?PHP echo $row['turno'] ?> </td>
                    <td> <?PHP echo $row['email'] ?> </td>
                    <td> <?PHP echo $row['direccion'] ?> </td>
                    <td> <?PHP echo $row['edad'] ?> </td>
                    <td>
                        <a href="editar.php?idmiembro=<?php echo $row['idmiembro']?>">
                        <i class="fas fa-pen"></i>
                        </a>
                        <a href="eliminar.php?idmiembro=<?php echo $row['idmiembro']?>">
                        <i class="fas fa-trash-alt"></i>
                        </a>
                </tr>
            <?PHP } ?>
        </tbody>
    </table>
</div>
</div>

</div>

   </body>
    <?php include("footer.php") ?>
    </html>
 
