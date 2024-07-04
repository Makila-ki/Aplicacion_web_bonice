<?php  
session_start();
$bo=$_GET['bo'];

if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
?>

<div class="row">
    <h2 class= "Titulos">Actualizar y Eliminar Productos</h2>
    <div class="Tabla">
    <?php  include "./../../templates/admin/tabla2.php";?>
    </div>
</div>
<?php 
if($bo==1){
    echo ' <script src="./../../assets/js/alert/Alertadactu.js"></script>';
}
if($bo==2){
    echo ' <script src="./../../assets/js/alert/Alertadelim.js"></script>';
}

?>

<?php
include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>