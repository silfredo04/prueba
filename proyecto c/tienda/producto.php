<?php
  include 'global/config.php';
  include 'global/conexion.php';
  include 'carrito.php';
  include 'templates/cabecera.php'
?>

    <?php  if($mensaje!="") { ?>
    <div class="alert alert-success">
      <center>
      
      <?php 
        //print_r($_POST);
        echo $mensaje;   
      ?>

      <a href="mostrarCarrito.php" class="badge badge-success">ver carrito</a>
      </center>
   </div>
  <?php }  ?>
  <div class="row">
<?php
        
       
        $sentencia=$pdo->prepare("SELECT * FROM productos");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos);   
?>
<?php foreach ($listaProductos as $producto) { ?>
        <div class="col-3">
          <div class="card">
              <img

              title="<?php echo $producto['Nombre'];?>" 
              alt="<?php echo $producto['Nombre'];?>"
              class="card-img-top" 
              src="<?php echo $producto['Imagen'];?>"
              data-toggle="popover"
              data-trigger="hover"
              data-content="<?php echo $producto['Descripcion'];?>"
              height="317px"
              >
              <div class="card-body">
                <span><?php echo $producto['Nombre'];?></span>
                  <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
                  <p class="card-text">DESCRIPCION</p>


                <form action="" method="POST">

                <input type="hidden" name="id" id="id" value="<?php 
                echo $producto['ID'];?>"> 
                
                <input type="hidden" name="nombre" id="nombre" value="<?php 
                echo $producto['Nombre'];?>">  
                
                <input type="hidden" name="precio" id="precio" value="<?php 
                echo $producto['Precio'];?>"> 
                

                <input type="hidden" name="cantidad" id="cantidad" value="<?php 
                echo 1;?>"> 
                


                  <button class="btn btn-primary" 
                  name="btnAccion"
                  value="Agregar"
                  type="submit"
                  >
                  agregar al carrito
                  </button>

              </form>

                  

              </div>
          </div>
      </div>
<?php   } ?>
  </div>
  
    <script>
      $(function () {
        $('[data-toggle="popover"]').popover()
      })
    </script>
<?php  

include 'templates/pie.php'

?>

