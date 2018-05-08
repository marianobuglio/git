<?php  
include('includes/controlSesion.php');  
include('controladores/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('includes/header.php') ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
</head>
<body>
<?php include('includes/nav.php') ?>
<div class="container">

<div class="row" style="margin-top: 60px;">
	<center><h1>Noticias</h1></center>
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-bordered">
					<thead>
				
				<tr>
					<td>Nùmero </td>
					<td>titulo</td>
					<td>cuerpo</td>
					<td>resumen</td>
					<td>acciones</td>
				</tr>
			</thead>
			<tbody>
					<?php 	include('includes/cargarNoticias.php'); ?>
					<?php if ($resultado->num_rows > 0) :	?>
						<?php while ($consulta = $resultado->fetch_array() ): ?>
    								<tr>	
    									<td><?= $consulta['id_noticia']?></td>
    									<td><?= $consulta['titulo']?></td>
    									<td><?= $consulta['contenido']?></td>
    									<td><?= $consulta['subtitulo']?></td>
    	<td><a  href="controladores/eliminarNoticia.php?id=<?= $consulta['id_noticia']?> " ><button  class="btn btn-danger">eliminar </button></a>
    	<a href="verNoticia.php?id=<?= $consulta['id_noticia']?>"><button class="btn btn-primary">modificar</button></a></td>
    								</tr>
						<?php endwhile; ?>
					<?php 	endif; ?>
			</tbody>
</table>
</div>
</div>
</div>
</div>


</body>
</html>