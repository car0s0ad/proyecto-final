<?php include("conexion.php") ?> 
<?php include("header.php") ?>


<div align="center" class="container">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?=$_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php session_unset(); } ?>
            <form action="guardar.php" method="post">
                <section class= "offset-md-1 col-md-5 mr-md-6">
                    <div class="recuadrito">
                            <div class="row">
                                <div class="container-fluid">
                                    <input type="text" name="titulo" class="form-control" placeholder="Título" autofocus><br>
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
                        <div class="container-fluid">
                        <input type="text" name="Nombre anunciante" class="form-control" placeholder="Nombre Anunciante" autofocus><br>
                        </div>
                    </div>
                    <br>
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
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row col-5">
                    <div class="container-fluid justify-content-center">
                    <input type="submit" value="Guardar"></a>
                    <br>
                    <br>
                    <br>
         </div>
        </div>
      </div>
    </section>
</form>
  

</div>
</div>
</div>
</div>
</div>
<?php include("footer.php") ?>
