<?php
include('includes/controlSesion.php');
include('controladores/conexion.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
      
    <?php include('includes/header.php'); ?>
  
  </head>
  <body>
    <?php include('includes/nav.php'); ?>
    <center><h1>Noticia</h1></center>
    <?php
      $id = $_GET['id'];
      $resultado = $conexion->query(" SELECT * FROM noticias where id_noticia = ".$id." ");?>
    <?php if ($resultado->num_rows > 0) : ?>
    <?php $consulta = $resultado->fetch_array(); ?>
    <?php endif; ?>
    
    <div class="container" >
      <div class="row">
        <div class="col-md-6 col-md-offset-3 " >
          <form class="form-signin center" method="POST" action="controladores/subirNoticia.php" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group ">
              <label for="inputTitulo" class="">Titulo</label>
              <div class="">
                <input type="text" class="form-control" id="inputTitulo" placeholder="Titulo" name="titulo" value=" <?= $consulta['titulo']?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputSubtitulo" class=" ">Subtitulo</label>
              <div class="">
                <input type="text" class="form-control" id="inputSubtitulo" placeholder="Subtitulo" name="subtitulo" value="<?= $consulta['subtitulo']?>" required>
              </div>
            </div>
            <div class="form-group ">
              <label for="inputCuerpo" class="">Cuerpo</label>
              <div class="">
                <textarea type="text" class="form-control" id="inputCuerpo" placeholder="Cuerpo" name="Cuerpo" value="<?= $consulta['contenido']?>" required ><?= $consulta['contenido']?></textarea>
              </div>
            </div>
            <div class="form-group ">
              <label for="inputFecha" class="">Fecha</label>
              <div class="">
                <input id="dateTime" name="fecha" class="form-control" value="<?= $consulta['fecha']?>">
              </div>
            </div>
            <div class="form-group ">
              <input id="pac-input" class="controls" type="text" placeholder="Search Box" value="<?= $consulta['ubicacion']?>" name="direccion" required>
              
              <div id="map"></div>
            </div>
            
            <input type="text" class="form-control" id="inputCoordenadas" placeholder="Mail" name="id" value=" <?= $id?> " style="visibility: hidden;">
            
            <div class="form-group ">
              <label for="img" class="col-md-2 control-label">Selecciona imagen </label>
              <div class=" form-inline col-sm-10">
                <input type="file" class="form-control " id="img" multiple name="imagen[]">
                <h3 align="center" id="prev" hidden="true">previsualizacion</h3>
                <div id="preview" >
                </div>
              </div>
              
              <br>
              <br>
              <center><button class="btn btn-info" type="submit" name="btnActualizar">Guardar</button>
              </center>
            </form>
            <div class="wrapper">
              <div class="container">
                <div class="row">
                  <?php  $imagenes = $conexion->query(" SELECT ruta, idImagen FROM imagenes where fk_idNoticia = ".$id." "); ?>
                  <?php if ($imagenes->num_rows > 0) : ?>
                  <?php while ($consultaImg = $imagenes->fetch_array() ): ?>
                  
                  
                  
                  <div class="col-md-4 resize" id="<?= $consultaImg['idImagen']?>">
                   <div class="thumbnail">
                      <img class="<?= $consultaImg['idImagen']?> img-responsive  " src="<?= $consultaImg['ruta']?>" alt="Lights">
                      <center><button type="button" id="remove_button" name="<?= $consultaImg['idImagen']?>" class="btn btn-danger " >X</button></center>
                    </div>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
              
            </div>
            
       
        
<?php include('includes/footer.php'); ?>

    </body>
  </html>