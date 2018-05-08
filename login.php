<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php include('includes/header.php') ?>

<!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
 
 	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<p class="bg-danger ">
 		<?php 
 		session_start();
		ob_start();
		$_SESSION['registrado'] = null;
		if(is_null(	$_SESSION['registrado']))
				$_SESSION['registrado'] = 0;

	 	if(	$_SESSION['registrado']==1)
				header('Location:index.php'); 

 		
 		
		if ($_SESSION['registrado'] ==3)  {
 				echo "DATOS ERRONEOS";
 		}
 		 ?>

 	</p>
        <form action="controladores/verificar.php" method="POST">
        	<div class="form-group " >
				    <label for="inputNombre" class="">Usuario</label>
				    <div class="">
				      <input type="text" class="form-control" id="inputNombre" placeholder="Usuario" name="user" required>
				    </div>
				 </div>	

				 <div class="form-group">
				    <label for="inputApellido" class=" ">contraseña</label>
				    <div class="">
				      <input type="password" class="form-control" id="inputApellido" placeholder="Contraseña" name="pass" required>
				    </div>

				 <center>
					<input type="submit"  class="btn  btn-success">
						</center>
				 </div>	
        </form>
    </div>
    </div>
</body>
</html>