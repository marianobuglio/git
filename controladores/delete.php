 <?php  
 //delete.php  

 include('conexion.php');

 if(!empty($_GET["id"]))  
 {  
      if(unlink("../".$_GET["ruta"]))  
      {  
      	$idImg = $_GET["id"] ;
          $conexion->query("DELETE FROM imagenes where idImagen = ".$idImg." ");
      }  
 }  

	
   	

   
   
 ?>