<?php 
$eliminar = $_GET['eliminar'];

include "./../../includes/config.php";
$sql ="DELETE FROM  producto WHERE Id='".$eliminar."'";
$resultado =mysqli_query($conexion,$sql);

header("Location:actualizarad.php?bo=2");