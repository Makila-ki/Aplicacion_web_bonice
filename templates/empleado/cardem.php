<?php
include "./../../includes/config.php";
$peticion = "SELECT * FROM producto WHERE estado = 1";
$respuesta = mysqli_query($conexion, $peticion);
while ($fila = mysqli_fetch_array($respuesta)) {
    ?>

    <div class="card mt-5 col-3" style="border:2;">
        <img src="./../../assets/resources/img/<?php echo $fila['Img']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $fila['Nombre']?></h5>
            <p class="card-text">Precio: $<?php 
            $preci=$fila['Precio']; 
            $precire=number_format($preci,2);
             echo $precire?></p>
            <p class="card-text">Cantidad existente: <?php echo $fila['Cantidad']?></p>
            <input type="text" class="papapapa" id="patata" placeholder="Cantidad">
            <button value="<?php echo $fila['Id']?>" class="btn btn-primary botoncompra">Comprar</button>
        </div>
    </div>

<?php
}
?>