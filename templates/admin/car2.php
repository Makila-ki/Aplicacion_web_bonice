<?php
include "./../../includes/config.php";
$peticion = "SELECT * FROM producto ";
$respuesta = mysqli_query($conexion, $peticion);
while ($fila = mysqli_fetch_array($respuesta)) {
    ?>
<div class="card mt-5 col-3" style="border:2;">
  <img src="./../../assets/resources/img/<?php echo $fila['Img']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Informacion del producto</h5>
    <p class="card-text"><strong>Nombre: </strong><?php echo $fila['Nombre']?></p>
    <p class="card-text"><strong>Precio: $</strong><?php
    $preci=$fila['Precio']; 
    $precire=number_format($preci,2);
     echo $precire?></p>
    <p class="card-text"><strong>Cantidad: </strong><?php echo $fila['Cantidad']?></p>
    <p class="card-text"><strong>Color: </strong><input type="color" class="form-control form-control-color" id="exampleColorInput" value="<?php echo $fila['Color']?>" title="<?php echo $fila['Nombre']?>"></p>
    <p class="card-text"><strong>Estado: </strong><?php 
    $vava=$fila['estado'];
    if($vava==1){
      echo "En venta";
    }else{
      echo "Sin vender";
    }
     ?></p>
    <a href="./../../page/admin/actualizarad.php?bo=0" class="btn btn-primary">Actualizar</a>
  </div>
</div>
<?php
}
?>