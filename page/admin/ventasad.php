<?php  
session_start();
if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
?>

<div class="row">
    <h2 class= "Titulos">Historial de ventas</h2>
    <div class="Tabla">
    <?php  include "./../../templates/admin/tabla2his.php";?>
    </div>
</div>

<?php
include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>