<?php  
session_start();
if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
?>

<div class="row">
    <h2 class= "Titulos">Opciones del Almacen</h2>
    <div class="Menualmacen">
    <h4> Estas son las multiples acciones que se pueden realizar en tu pagina, con base al almacen</h4> 
    <div>
       <?php  include "./../../templates/admin/carmenu.php";?>
    </div>
    </div>
</div>

<?php
include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>