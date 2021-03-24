<?php include("conexion.php") ?> 
<?php include("header.php") ?>

    <html class="h-100">
        <body class="h-100">
               <br>
               <br>
               <br>
               <br>
               <section class= "recuadro col-5 mx-auto py-2">
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="container-fluid col">
                                        <input type="text" name="propiedad_titulo" class="form-control" placeholder="Título" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <select class="form-select" name="anunciante">
                                            <option selected>Anunciante</option>
                                            <option value="Dueño directo">Dueño directo</option>
                                            <option value="Inmobiliaria">Inmobiliaria</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="nombre_anunciante" class="form-control" placeholder="Nombre Anunciante" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="correo" class="form-control" placeholder="Correo" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="Telefono" class="form-control" placeholder="Telefono" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <select class="form-select" name="inmueble">
                                            <option selected>Tipo de Inmueble</option>
                                            <option value="Casa">Casa</option>
                                            <option value="Departamento">Departamento</option>
                                            <option value="Local comercial">Local comercial</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <select class="form-select" name="operacion">
                                            <option selected>Operación</option>
                                            <option value="Alquiler">Alquiler</option>
                                            <option value="Venta">Venta</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="metros_cuadrados" class="form-control" placeholder="M²" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <select class="form-select" name="ambientes">
                                            <option selected>Ambientes</option>
                                            <option value="Monoambiente">Monoambiente</option>
                                            <option value="2 ambientes">2 ambientes</option>
                                            <option value="3 ambientes">3 ambientes</option>
                                            <option value="4 ambientes">4 ambientes</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="precio" class="form-control" placeholder="Precio" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="expensas" class="form-control" placeholder="Expensas" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="direccion" class="form-control" placeholder="Dirección" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="latitud" class="form-control" placeholder="Latitud" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <input type="text" name="longitud" class="form-control" placeholder="Longitud" autofocus><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <select class="form-select" name="cochera">
                                            <option selected>¿Tiene cochera?</option>
                                            <option value="No tiene cochera">Si</option>
                                            <option value="Tiene cochera">No</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <select class="form-select" name="balcon">
                                            <option selected>¿Tiene balcón?</option>
                                            <option value="No tiene balcón">Si</option>
                                            <option value="Tiene balcón">No</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <select class="form-select" name="mascotas">
                                            <option selected>¿Se permiten mascotas?</option>
                                            <option value="No se permiten mascotas">Si</option>
                                            <option value="Se permiten mascotas">No</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <select class="form-select" name="ninos">
                                            <option selected>¿Se permiten niños?</option>
                                            <option value="No se permiten niños">Si</option>
                                            <option value="Se permiten niños">No</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <textarea name="otros_detalles" rows="5" cols="70">Escribe aquí otros detalles</textarea><br>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid justify-content-center">
                                    <input type="file" name="Fotos"> 
                                    </div>
                                <br>
                                <br>
                                <br>
                                <div class="row justify-content-center">
                                    <div class="container-fluid">
                                        <div class="col">
                                            <input type="submit" name="guardar" value="Guardar"></a>
                                        </div>
                                    </div>
                                </div>
                     </form>
                </section>
        </body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php include("footer.php") ?>
    </html>

    