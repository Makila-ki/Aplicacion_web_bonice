<?php  
session_start();

if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
?>

<div class="row">
    <h2 class= "Titulos">Lista de productos</h2>
    <?php  include "./../../templates/admin/car2.php";?> 
    
</div>

<?php
include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>