<?php include("conexion.php") ?> 
<?php include("header.php") ?>

    <html class="h-100">
        <body class="h-100">
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
                                        <select class="form-select col" name="tipo_anunciante">
                                            <option selected>Anunciante</option>
                                            <option value="1">Dueño directo</option>
                                            <option value="2">Inmobiliaria</option>
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
                                        <select class="form-select" name="tipo_inmueble">
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
                                        <select class="form-select" name="operacion">
                                            <option selected>Operación</option>
                                            <option value="1">Alquiler</option>
                                            <option value="2">Venta</option>
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
                                <div class="row ml-2">
                                    <div class="container-fluid">
                                                <input type="hidden" name="cochera" value="0">
                                                <input type="checkbox" name="cochera" value="1">
                                                <a> ¿Tiene cochera? </a>
                                    </div>
                                    <div class="container-fluid">
                                                <input type="hidden" name="balcon" value="0">
                                                <input type="checkbox" name="balcon" value="1">
                                                <a> ¿Tiene balcón? </a>
                                    </div>
                                    <div class="container-fluid">
                                                <input type="hidden" name="mascotas" value="0">
                                                <input type="checkbox" name="mascotas" value="1">
                                                <a> ¿Se permiten mascotas? </a>
                                    </div>
                                    <div class="container-fluid">
                                                <input type="hidden" name="niños" value="0">
                                                <input type="checkbox" name="niños" value="1">
                                                <a> ¿Se permiten niños? </a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid">
                                        <textarea name="otros_detalles" rows="5" cols="43">Escribe aquí otros detalles</textarea><br>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid justify-content-center">
                                    <input type="file" name="fotos"> 
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
    </html>