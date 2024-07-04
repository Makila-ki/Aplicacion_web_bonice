<?php

include "./../../includes/config.php";

$sql = "UPDATE producto set Nombre='" . $_POST['nom'] . "', Cantidad='" . $_POST['can'] . "',
Precio='" . $_POST['pre'] . "', Color='" . $_POST['col'] . "', Img='" . $_POST['img'] . "',
estado='" . $_POST['est'] . "' where Id= '" . $_POST['id'] . "' ";
$resultado = mysqli_query($conexion, $sql);

header("Location:actualizarad.php?bo=1");