<?php
session_start();
$boe2 = $_GET['boe2'];

if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
    ?>

    <div class="row">
        <h2 class="Titulos">Actualizar Empleado</h2>
        <div class="formtt">
            <form action="cread.php" method="post">
                <label for="exampleInputEmail1" class="form-label">Nombre del usuario: </label>
                <input type="text" name="nomm" placeholder="Nombre">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno: </label>
                <input type="text" name="apep" placeholder="Apellido Paterno">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno: </label>
                <input type="text" name="apem" placeholder="Apellido Materno">
                <label for="exampleInputEmail1" class="form-label">Usuario: </label>
                <input type="text" name="usu" placeholder="Usuario">
                <label for="exampleInputEmail1" class="form-label">Contraseña: </label>
                <input type="text" name="cont" placeholder="Contraseña">
                <label for="exampleInputEmail1" class="form-label">Numero de telefono: </label>
                <input type="text" name="tel" placeholder="Telefono">
                <label for="exampleInputEmail1" class="form-label">Calle del usuario: </label>
                <input type="text" name="call" placeholder="calle">
                <label for="exampleInputEmail1" class="form-label">Numero del domicilio: </label>
                <input type="text" name="num" placeholder="Numero">
                <label for="exampleInputEmail1" class="form-label">Nombre de la Colonia: </label>
                <input type="text" name="colo" placeholder="Colonia">
                <label for="exampleInputEmail1" class="form-label">Nombre del Municipio: </label>
                <input type="text" name="muni" placeholder="Municipio">
                <label for="exampleInputEmail1" class="form-label">Codigo Postal: </label>
                <input type="text" name="cp" placeholder="CP">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="submit" class="Guardar" value="Guardar">
            </form>
        </div>
    </div>
    <?php 
if($boe2==1){
    echo ' <script src="./../../assets/js/alert/Alertadagrb.js"></script>';
}
if($boe2==2){
    echo ' <script src="./../../assets/js/alert/Alertadagrm.js"></script>';
}
if($boe2==3){
    echo ' <script src="./../../assets/js/alert/Alertadagrf.js"></script>';
}

?>

    <?php
    include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>