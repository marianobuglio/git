<?php 
include("conexion.php");
if (isset($_POST['btn1']) && isset($_FILES['imagen']) ) {
	

	$titulo =$_POST['titulo'];
	$subtitulo =$_POST['subtitulo'];
	$cuerpo =$_POST['Cuerpo'];
	$fecha =$_POST['fecha'];
	$direccion =$_POST['direccion'];
	
	


if($conexion->query("INSERT INTO noticias (titulo,subtitulo,contenido,fecha,ubicacion) VALUES ('$titulo','$subtitulo','$cuerpo','$fecha','$direccion')")){
 $last_id = $conexion->insert_id;
	foreach($_FILES['imagen']['name'] as $file)
	{
		// for easy access
		$fileName     = 'imagenes/'.$file;
		echo $fileName;
		$conexion->query("INSERT INTO imagenes (fk_idNoticia,ruta) VALUES ('$last_id','$fileName')");
		
	}

	
if (!empty($_FILES)) {

// loop through the array of files
	
	foreach($_FILES['imagen']['name']  as $key => $file)
	{
		// for easy access
		$fileName     = $file;
		// for easy access
		$fileTempName = $_FILES['imagen']['tmp_name'][$key];
		// check if there is an error for particular entry in array
	
 
	
		if(!empty($fileTempName) && is_uploaded_file($fileTempName))
		{ 

		
			move_uploaded_file($fileTempName, "../imagenes/" . $fileName);
			
				}
			}
		
		}
	}

}

if (isset($_POST['btnActualizar'])) {
	$titulo =$_POST['titulo'];
	$subtitulo =$_POST['subtitulo'];
	$cuerpo =$_POST['Cuerpo'];
	$fecha =$_POST['fecha'];
	$direccion =$_POST['direccion'];
	$id =$_POST['id'];


	if($conexion->query("UPDATE  noticias SET titulo ='$titulo' ,subtitulo = '$subtitulo',contenido = '$cuerpo',fecha = '$fecha',ubicacion='$direccion' where id_noticia = '$id'")){


	//error 0 indica que se subio el archivo y ademas sin ningun error 4 es existe error
if ($_FILES['imagen']['size'][0] != 0) {

	foreach($_FILES['imagen']['name'] as $file)
	{
		// for easy access
		$fileName     = 'imagenes/'.$file;
	
		$conexion->query("INSERT INTO imagenes (fk_idNoticia,ruta) VALUES ('$id','$fileName')");
		
	}
// loop through the array of files
	
	foreach($_FILES['imagen']['name']  as $key => $file)
	{
		// for easy access
		$fileName     = $file;
		// for easy access
		$fileTempName = $_FILES['imagen']['tmp_name'][$key];
		// check if there is an error for particular entry in array
	
 
	
		if(!empty($fileTempName) && is_uploaded_file($fileTempName))
		{ 

		
			move_uploaded_file($fileTempName, "../imagenes/" . $fileName);
			
				}
	}
		
		}
	}
		 
}
header('Location:../index.php');	

 ?>