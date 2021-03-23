<?php
 include('connect.php');



if ($_POST) {
	$anunciante = $_POST['anunciante1'];
	$inmueble = $_POST['inmueble1'];
	$ambientes = $_POST['ambientes1'];

 if ($anunciante=='' && $inmueble=='' && $ambientes=='') {
 		$queryinmo = "SELECT * FROM `propiedades` LIMIT 10";
 	}else{

 		if ($anunciante!='') {
 			$anuncianteSearch="`Anunciante` LIKE '$anunciante' ";
 		}else {
 			$anuncianteSearch = "`Anunciante` !='NULL'";
 		}

 		if ($inmueble!='') {
 			$inmuebleSearch="`inmueble` LIKE '$inmueble' ";
 		}else {
 			$inmuebleSearch = "`inmueble` !='NULL'";
 		}

 		if ($ambientes!='') {
 			$ambientesSearch="`ambientes` LIKE '$ambientes' ";
 		}else {
 			$ambientesSearch = "`ambientes` !='NULL'";
 		} 
 		$queryinmo= "SELECT * FROM `propiedades` WHERE $anuncianteSearch AND $inmuebleSearch AND $ambientesSearch LIMIT 8";
 	}

 	if ($result = mysqli_query($myDbConnection, $queryinmo)) {
 			while ($inmo = mysqli_fetch_array($result)) {
 				$filteredanunciante = $inmo['anunciante'];
 				$filteredinmueble = $inmo['inmueble'];
 				$filteredambientes = $inmo['ambientes'];
             ?>
				        <div class="col s12 m3">
				          <div class="card">
				            <div class="card-image">
				              <img src="" height="200">
				              <span class="card-title">Food Category</span>
				            </div>
				            <div class="card-content">
				              <p>
				              	 <li><?php echo $filteredanunciante; ?></li>
				              	 <li><?php echo $filteredinmueble; ?></li>
				              	 <li><?php echo $filteredambientes; ?></li>
				              </p>
				            </div>
				            <div class="card-action">
				              <a href="#">Click Here to Buy</a>
				            </div>
				          </div>
				        </div>

             <?php
 			}
 		}	
}
?>