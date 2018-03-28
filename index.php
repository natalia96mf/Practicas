<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/sc.js"></script>
<!-- <?php
// include('modelo/funciones.php');
?> -->


	<div class="miform">
			<form enctype="multipart/form-data">

<!-------------------CODIGO POSTAL------------------------>

						<div class="form-group">
							<p>Código Postal:</p>
								<!--Campo que recibirá el id-->
								<input class="form-control" type="hidden" name="id" id="id" value="">
								<!--Campo de busqueda-->
								<input class="form-control"
												type="text"
												name="cp" id="cp"
												placeholder="CP"
												onkeyup="autocompletar()"
												autocomplete="off">
								<ul id="lista"></ul>
							</div>
							<input class="btn btn-primary" type="submit" id="btn_submit" value="Buscar municipio">

						<hr>

<!---------------------MUNICIPIO--------------------------->
			<div class="form-group">
			 <p>Municipio:</p>
			 		<input id="municipio"
								 type="text"
								 name="municipio"
								 readonly="readonly"
								 value="<?php include('modelo/funciones.php');
								 echo $mun['municipio'];?>">
								 <br/>
			</div>

<!---------------------PROVINCIA--------------------------->

			<div class="form-group">
				<p>Provincia</p>
					<input id="provincia"
								 type="text"
								 name="provincia"
								 value="">
								 <br/>
			</div>

			</form>
	</div>
