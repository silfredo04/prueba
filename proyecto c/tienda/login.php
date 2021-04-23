

<?php
	include 'global/config.php';
	include 'global/conexion.php';

	if(isset($_POST["login"])){

		if(!empty($_POST['email']) && !empty($_POST['id'])) {
			$email=$_POST['email'];
			$id=$_POST['id'];

			$link = new mysqli('localhost','root','','tienda');
			$sql = "SELECT * FROM usuario where email = '$email' ";
			$result = $link->query($sql);	

			$fil = $result->fetch_assoc();
			if ($fil['email'] != $email || $fil['id']!=$id) {
				$message = "Nombre de usuario ó contraseña invalida!";
			} else {
				header("Location: producto.php");
			}	
		} 
	}

	if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";}	
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<center>
	<br><br><br>
<div class="container mlogin">
<div id="login">
	<br><br><br>
<h1>LOGIN</h1>
<form name="loginform" id="loginform" action="" method="POST">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="email" value="" size="32" placeholder="name@example.com">
    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identificacion</label>
    <input type="password" name="id" id="id" class="form-control" value="" size="11" placeholder="Identificacion">
  </div>
  
  <button type="submit" name="login" class="btn btn-primary">ingresar</button>
</p>
<p class="regtext">No estas registrado? <a href="register.php" >Realiza tu proceso de registro aqui</a>!</p>
</form>

</div>

</div>

</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
