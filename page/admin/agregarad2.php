<?php  
session_start();
$bo2=$_GET['bo2'];
if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
?>

<div class="row">
    <h2 class= "Titulos">Agregar un producto</h2>
    <div class="formularioo">
    <form action="crearad.php" method="post">
    <label for="exampleInputEmail1" class="form-label">Nombre del producto: </label>
    <input type="text" name="no" placeholder="Nombre">
    <label for="exampleInputEmail1" class="form-label">Cantidad de producto: </label>
    <input type="text" name="ca" placeholder="Cantidad en numeros">
    <label for="exampleInputEmail1" class="form-label">Precio del producto: </label>
    <input type="text" name="pr" placeholder="Precio con numeros">
    <label for="exampleInputEmail1" class="form-label">Color caracteristico del bonice</label>
    <input type="color" name="co" class="form-control form-control-color" id="exampleColorInput" value="#563d7c"
        title="Choose your color">
    <label for="exampleInputEmail1" class="form-label">Selecciona la imagen del producto:</label>
    <input class="form-control" name="im" type="file" id="formFile">
    <label for="exampleInputEmail1" class="form-label">¿Este producto esta a la venta?</label>
    <select class="form-select form-select-lg mb-3" name="es" aria-label=".form-select-lg example">
        <option value="1">si</option>
        <option value="0">No</option>
    </select>
    <input type="submit" class="guardar" value="Guardar">
</form>
    </div>
</div>
<?php 
if($bo2==1){
    echo ' <script src="./../../assets/js/alert/Alertadagrb.js"></script>';
}
if($bo2==2){
    echo ' <script src="./../../assets/js/alert/Alertadagrm.js"></script>';
}
if($bo2==3){
    echo ' <script src="./../../assets/js/alert/Alertadagrf.js"></script>';
}

?>

<?php
include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>