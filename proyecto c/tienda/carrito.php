<?php  

session_start();

$mensaje="";


if(isset($_POST['btnAccion'])){

	switch($_POST['btnAccion']) {
		case 'Agregar':
			if(is_numeric($_POST['id'])){ //
				$ID=($_POST['id']);
				$mensaje.="ok id correcto .....".$ID."<br>";
			}else{
				$mensaje.="upss  id incorrecto .....";
			}

			if(is_string($_POST['nombre'])){ //
				$NOMBRE=($_POST['nombre']);
				$mensaje.="ok Nombre correcto .....".$NOMBRE."<br>";
			}else{ $mensaje.="upss  Nombre incorrecto ....."; break;}

			if(is_numeric($_POST['precio'])){ //
				$PRECIO=($_POST['precio']);
				$mensaje.="ok Precio correcto .....".$PRECIO."<br>";
			}else{ $mensaje.="upss  Precio incorrecto ....."; break;}

			if(is_numeric($_POST['cantidad'])){ //
				$CANTIDAD=($_POST['cantidad']);
				$mensaje.="ok Cantidad correcto .....".$CANTIDAD."<br>";
			}else{ $mensaje.="upss  Cantidad incorrecto ....."; break;}

		if(!isset($_SESSION['CARRITO'])){

			$producto=array(
				'ID'=>$ID,
				'NOMBRE'=>$NOMBRE,
				'PRECIO'=>$PRECIO,
				'CANTIDAD'=>$CANTIDAD
			);
			$_SESSION['CARRITO'][0]=$producto;
			$mensaje="Producto agregado al carrito....";
		}else{
			$idProductos=array_column($_SESSION['CARRITO'], "ID");

			if(in_array($ID,$idProductos)){ 
				echo "<script>alert('El producto ya ha sido seleccionado.....');</script>";
				$mensaje="";
			}else{ 

			$NumeroProductos=count($_SESSION['CARRITO']);
			$producto=array(
				'ID'=>$ID,
				'NOMBRE'=>$NOMBRE,
				'PRECIO'=>$PRECIO,
				'CANTIDAD'=>$CANTIDAD
			);
			$_SESSION['CARRITO'][$NumeroProductos]=$producto;
			$mensaje="Producto agregado al carrito....";

			}
		}

		//$mensaje=print_r($_SESSION,true);


		break;
		case 'Eliminar':
			if(is_numeric($_POST['id'])){ //
				$ID=($_POST['id']);
				foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
					if($producto['ID']==$ID){

						unset($_SESSION['CARRITO'][$indice]);
						echo "<script>alert('Elemento borrado.....');</script>";

					}
				}
			}else{
				$mensaje.="upss  id incorrecto .....";
			}
		break;
		
		
	}


}

	
?>