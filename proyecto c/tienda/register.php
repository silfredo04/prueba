<?php
	include 'global/config.php';
	include 'global/conexion.php';
 ?>

<?php

if(isset($_POST["register"])){

	if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['id']) && !empty($_POST['email']) && !empty($_POST['telefono'])) {

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$id=$_POST['id'];
		$email=$_POST['email'];
		$telefono=$_POST['telefono'];

		
		$link = new mysqli('localhost','root','','tienda');
		$query= "SELECT * FROM usuario WHERE email='$email'";
		$result = $link->query($query);	

		if($result == true) {

			$sql="INSERT INTO usuario(nombre, apellido, id, email, telefono) VALUES ('$nombre','$apellido', '$id', '$email', '$telefono')";
			$result=$link->query($sql);

			if($result){
				$message = "Cuenta Correctamente Creada";
			} else {
				$message = "Error al ingresar datos de la informacion!";
			}

			} else {
				$message = "El correo ya existe! Por favor, intenta con otro!";
			}

			} else {
				$message = "Todos los campos no deben de estar vacios!";
			}
		}
	?>
<center>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>
</center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<center>
	<br><br><br>

<div class="container mregister">
<div id="login">

<h1>Realiza tu registro</h1>
<br><br><br>
<form name="registerform" id="registerform" action="register.php" method="post">


<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
  <div class="col-sm-10">
    <input type="text" name="nombre" id="nombre" class="form-control form-control-lg" size="30" value="" placeholder="Ingresa tu nombre">
  </div>
</div>
<br><br>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Apellido</label>
  <div class="col-sm-10">
    <input type="text" name="apellido" id="apellido" class="form-control form-control-lg" size="30" value="" placeholder="Ingresa tu Apellido">
  </div>
</div>
<br><br>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Identificacion</label>
  <div class="col-sm-10">
    <input type="text" name="id" id="id" class="form-control form-control-lg" size="11" value="" placeholder="Ingresa tu Identificacion">
  </div>
</div>
<br><br>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Telefono</label>
  <div class="col-sm-10">
    <input type="text" name="telefono" id="telefono" class="form-control form-control-lg" size="15" value="" placeholder="Ingresa tu Telefono">
  </div>
</div>
<br><br>

<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">E-mail</label>
  <div class="col-sm-10">
    <input type="text" name="email" id="email" class="form-control form-control-lg" size="32" value="" placeholder="Ingresa tu E-mail">
  </div>
</div>
<br><br>
<div class="d-grid gap-2">
  <button type="submit" name="register" id="register" class="btn btn-primary" >Registrar</button>
</div>
<br><br>
<p class="regtext">Ya tienes una cuenta? <a href="login.php" >Realiza tu compra ingresando aqui!</a>!</p>
</form>

</div>
</div>
</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>