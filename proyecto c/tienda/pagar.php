<?php
  include 'global/config.php';
  include 'global/conexion.php';
  include 'carrito.php';
  include 'templates/cabecera.php'
?>


<?php  

if($_POST){
	$total=0;
	$SID=session_id();
	$Correo=$_POST['email'];
	foreach ($_SESSION['CARRITO'] as $indice=>$producto) {

		$total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
	}

		$sentencia=$pdo->prepare("INSERT INTO `ventas` 
							(`ID`, `ClaveTransacciones`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
		VALUES (NULL, :ClaveTransacciones, '', NOW(), :Correo, :Total, 'pendiente');");


		$sentencia->bindParam(":ClaveTransacciones",$SID);
		$sentencia->bindParam(":Correo",$Correo);
		$sentencia->bindParam(":Total",$total);
		$sentencia->execute();
		$idVenta=$pdo->lastInsertId();


	echo "<h3>".$total."</h3>";
}

?>




<?php  

include 'templates/pie.php'

?>