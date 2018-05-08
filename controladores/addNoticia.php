<?php
	include('includes/controlSesion.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include('includes/header.php') ?>
		  
	</head>
	<body>
		<div style=" margin-top: 70px;" >
			<?php include('includes/nav.php') ?>
		</div>
		<div class="container" >
			<div class="row">
				<div class=" col-md-6 col-md-offset-3" >
					<form class="form-signin center" method="POST" action="subirNoticia.php" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group ">
							<label for="inputTitulo" class="">Titulo</label>
							<div class="">
								<input type="text" class="form-control" id="inputTitulo" placeholder="Titulo" name="titulo" value="" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputSubtitulo" class=" ">Subtitulo</label>
							<div class="">
								<input type="text" class="form-control" id="inputSubtitulo" placeholder="Subtitulo" name="subtitulo" required>
							</div>
						</div>
						<div class="form-group ">
							<label for="inputCuerpo" class="">Cuerpo</label>
							<div class="">
								<textarea type="text" class="form-control" id="inputCuerpo" placeholder="Cuerpo" name="Cuerpo" required></textarea>
								
							</div>
						</div>
						<div class="form-group ">
							<label for="inputFecha" class="">Fecha</label>
							<div class="">
								<input type="" id="dateTime" name="fecha" class="form-control" required placeholder="Haga click para seleccionar fecha">
							</div>
						</div>
						
						<div class="form-group ">
							<label for="img" class="col-md-2 control-label">Selecciona imagen </label>
							<div class=" form-inline col-sm-10">
								<input type="file" class="form-control " id="img" required multiple name="imagen[]">
								<h3 align="center" id="prev" hidden="true">previsualizacion</h3>
								<div id="image_preview" >
								</div>
							</div>
						</div>
						<div class="form-group ">
							<input id="pac-input" class="controls type-selector" type="text" placeholder="Ingrese una direccion" name="direccion" required>
							<div id="map" ></div>
						</div>
						<br>
						<br>
						<center><button class="btn btn-info" type="submit" name="btn1">Guardar</button>
						</center>
					</form>
				</div>
			</div>
		</div>
<?php include('includes/footer.php'); ?>
	</body>
</html>