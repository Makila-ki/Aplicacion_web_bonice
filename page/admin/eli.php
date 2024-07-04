<?php 
$eliminar = $_GET['elimi'];

include "./../../includes/config.php";
$sql ="DELETE FROM usuarios WHERE Id='".$eliminar."'";
$resultado =mysqli_query($conexion,$sql);

header("Location:actuad.php?boe=2");