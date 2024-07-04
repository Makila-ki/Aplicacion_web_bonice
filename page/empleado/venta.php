<?php 
session_start();
$boem=$_GET['boem'];
if(isset($_SESSION['dt5'])){
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador']=0;
    }
include "./../../includes/header.php";?>

<div class="row">
        <h2 class= "Titulos">Productos</h2>
        <?php include "./../../templates/empleado/offpa.php";?>
    <?php include "./../../templates/empleado/cardem.php";?>
</div>
<?php
if($boem==1){
    echo ' <script src="./../../assets/js/alert/alertcom.js"></script>';
}
if($boem==2){
    echo ' <script src="./../../assets/js/alert/alertno.js"></script>';
}
?>
<?php include "./../../includes/footer.php";
}else{
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>