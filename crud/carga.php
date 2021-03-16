<?php include("conexion.php") ?> 
<?php include("header.php") ?>
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
<?php endif ?>
    <html class="h-100">
        <body>
            <div align="center" class="container">
                <div class="row">
                    <div class="col-md-4">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <section class= "offset-md-1 col-md-5 mr-md-6">
                                                <div class="recuadrito">
                                                    <div class="row">
                                                        <div class="container-fluid col-9">
                                                            <input type="text" name="propiedad_titulo" class="form-control" placeholder="Título" autofocus><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="container-fluid">
                                                            <select class="form-select col-9">
                                                                <option selected>Anunciante</option>
                                                                <option value="1">Dueño directo</option>
                                                                <option value="2">Inmobiliaria</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="container-fluid col-9">
                                                        <input type="text" name="Nombre anunciante" class="form-control" placeholder="Nombre Anunciante" autofocus><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="container-fluid">
                                                        <select class="form-select col-9">
                                                            <option selected>Tipo de Inmueble</option>
                                                            <option value="1">Cualquier tipo de propiedad</option>
                                                            <option value="2">Casa</option>
                                                            <option value="3">Departamento</option>
                                                            <option value="4">Local comercial</option>
                                                            <option value="5">Terreno</option>
                                                            <option value="6">Oficina/Consultorio</option>
                                                            <option value="7">Depósito</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="container-fluid">
                                                        <select class="form-select col-9">
                                                            <option selected>Operación</option>
                                                            <option value="1">Alquiler</option>
                                                            <option value="2">Venta</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="container-fluid col-9">
                                                        <input type="text" name="m2" class="form-control" placeholder="M²" autofocus><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="container-fluid">
                                                        <select class="form-select col-9">
                                                            <option selected>Ambientes</option>
                                                            <option value="1">Monoambiente</option>
                                                            <option value="2">2 ambientes</option>
                                                            <option value="3">3 ambientes</option>
                                                            <option value="4">4 ambientes</option>
                                                            <option value="5">5 ambientes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="container-fluid col-9">
                                                        <input type="text" name="precio" class="form-control" placeholder="Precio" autofocus><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="container-fluid col-9">
                                                        <input type="text" name="expensas" class="form-control" placeholder="Expensas" autofocus><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="container-fluid col-9">
                                                        <input type="text" name="direccion" class="form-control" placeholder="Dirección" autofocus><br>
                                                    </div>
                                                </div>
                                                    <div class="container-fluid col-9">
                                                        <input class="form-check-input" type="checkbox" value="1" name="cochera">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    ¿Tiene cochera?
                                                                </label>
                                                                <input class="form-check-input" type="hidden" value="0" name="cochera" disabled>
                                                                <label class="form-check-label" for="flexCheckDisabled">
                                                                </label>
                                                    </div>
                                                    <div class="container-fluid col-9">
                                                        <input class="form-check-input" type="checkbox" value="1" name="balcon">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    ¿Posee balcón?
                                                                </label>
                                                                <input class="form-check-input" type="hidden" value="0" name="balcon" disabled>
                                                                <label class="form-check-label" for="flexCheckDisabled">
                                                                </label>
                                                    </div>
                                                    <div class="container-fluid col-9">
                                                        <input class="form-check-input" type="checkbox" value="1" name="mascotas">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    ¿Se permiten mascotas?
                                                                </label>
                                                                <input class="form-check-input" type="hidden" value="0" name="mascotas" disabled>
                                                                <label class="form-check-label" for="flexCheckDisabled">
                                                                </label>
                                                    </div>
                                                    <div class="container-fluid col-9">
                                                        <input class="form-check-input" type="checkbox" value="1" name="niños">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    ¿Se permiten niños?
                                                                </label>
                                                                <input class="form-check-input" type="hidden" value="0" name="niños" disabled>
                                                                <label class="form-check-label" for="flexCheckDisabled">
                                                                </label>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                    <div class="container-fluid col-9">
                                                        <textarea name="otros_detalles" rows="5" cols="20">Escribe aquí otros detalles</textarea><br>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row col-9">
                                                    <div class="container-fluid justify-content-center">
                                                    <input type="file" name="my_image"> 
                                                    </div>
                                                <br>
                                                <div class="row col-9">
                                                    <div class="container-fluid justify-content-center">
                                                        <input type="submit" value="Guardar"></a>
                                                    </div>
                                                </div>
                                               
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                        </div>
                                    </div>
                             </div> 
                </form>
            </section>
        </body>
    </html>