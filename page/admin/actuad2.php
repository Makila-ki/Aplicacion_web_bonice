<?php

include "./../../includes/config.php";

$sql = "UPDATE usuarios set Nombres='" . $_POST['nomm'] . "', Apellidop='" . $_POST['apep'] . "',
Apellidom='" . $_POST['apem'] . "', Usuario='" . $_POST['usu'] . "', Contraseña='" . $_POST['cont'] . "',
Telefono='" . $_POST['tel'] . "', Calle='" . $_POST['call'] . "', Numero='" . $_POST['num'] . "',
Colonia='" . $_POST['colo'] . "', Municipio='" . $_POST['muni'] . "', CP='" . $_POST['cp'] . "'
where Id= '" . $_POST['id'] . "' ";
$resultado = mysqli_query($conexion, $sql);

header("Location:actuad.php?boe=1");