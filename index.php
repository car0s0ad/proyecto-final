<?php include("includes/header.php") ?>
<?php include("includes/bootstrap.html") ?>
<?php include('conexion.php'); ?>
    <html class="h-100">
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <main role="main"></main>        
  
         <section class="col- pt-5">
            <div class="container-fluid container-md pt-5">  
               <div class="row align-items-center ml-2 col-md-5">
                <h1>Encontrá</h1>
                <h1>tu nuevo hogar</h1>
            </div>
        </section>
    <br>
    <br>
    <section class= "offset-md-1 col-md-5 mr-md-6">
    <div class="recuadrito">
      <div class="row">
        <div class="container-fluid">
          <select class="form-select col-9" id="anunciante">
            <option value="">Tipo anunciante</option>
            <option value="Dueño directo">Dueño directo</option>
            <option value="Inmobiliaria">Inmobiliaria</option>
          </select>
        </div>
      </div>
    <br>
      <div class="row">
        <div class="container-fluid">
          <select class="form-select col-9" id="inmueble">
            <option value="">Tipo de Inmueble</option>
            <option value="Casa">Casa</option>
            <option value="Departamento">Departamento</option>
            <option value="Local comercial">Local comercial</option>
          </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="container-fluid">
          <select class="form-select col-9" id="ambientes">
            <option value="">Ambientes</option>
            <option value="Monoambiente">Monoambiente</option>
            <option value="2 ambientes">2 ambientes</option>
            <option value="3 ambientes">3 ambientes</option>
            <option value="4 ambientes">4 ambientes</option>
          </select>
        </div>
        
      <br>
      <br>
      <br>
      <br>
      <div class="row col-5">
      <div class="container-fluid justify-content-center">
      <input type="submit" value="Buscar" onclick="filterinmob()"></a>
      </div>
      </div>
      </div>
    </section>
  

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 
    
<div class="row">
      <div id="displayHere">
      <?php
      $queryinmo = "SELECT * FROM `propiedades` LIMIT 10";
  if ($inmoresult = mysqli_query($con, $queryinmo)) {
      while ($inmo = mysqli_fetch_array($inmoresult)) {
        $Unfilteredanunciante = $inmo['anunciante'];
        $Unfilteredinmueble= $inmo['inmueble'];
        $Unfilteredambientes = $inmo['ambientes'];
                
             ?>
                <!-- <div class="col s12 m3">
                  <div class="card">
                    <div class="card-image">
                      <img src="" height="200">
                      <span class="card-title">Food Category</span>
                    </div>
                    <div class="card-content">
                      <p>
                         <li> Anunciante: <?php echo $Unfilteredanunciante ?></li>
                         <li> Tipo de inmueble:<?php echo $Unfilteredinmueble; ?></li>
                         <li> Ambientes:<?php echo $Unfilteredambientes; ?></li>
                      </p>
                    </div>
                    <br>
                    <div class="card-action">
                      <a href="detallepropiedad.php?id=<?php echo $id; ?>">Ver inmueble</a>
                    </div>
                  </div>
                </div>
                <br> -->
             <?php
      }
    }  ?>      
      </div>
    </div>  
     </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
  function filterinmob(){
        var anunciante = document.getElementById('anunciante').value;
        var inmueble = document.getElementById('inmueble').value;
        var ambientes = document.getElementById('ambientes').value;

       $.post('config/filterinmo.php', {anunciante1:anunciante,inmueble1:inmueble,ambientes1:ambientes,}, function(data){
           $('#displayHere').html(data);
        });      
  }


</script>
    </body>
    <?php include("includes/footer.php") ?>
    </html>