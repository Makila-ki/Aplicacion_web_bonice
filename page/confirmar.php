<?php
session_start();
include "./../includes/config.php";

$usua= $_POST['usu'];
$cont= $_POST['con'];

$sql="SELECT * FROM usuarios where Usuario = '".$usua."'
 and Contraseña  = '".$cont."' and Puesto = 'Administrador'";

 $resultado = mysqli_query($conexion, $sql);

 if ($fila = mysqli_fetch_array($resultado)) {

    $_SESSION['dt1'] = $fila['Nombres'];
    $_SESSION['dt2'] = $fila['Apellidop'];
    $_SESSION['dt3'] = $fila['Apellidom'];
    $_SESSION['dt4'] = $fila['Puesto'];
    $_SESSION['dt5'] = $fila['Usuario'];


    header('Location:Historial.php');

 }else{
    $sql2="SELECT * FROM usuarios where Usuario = '".$usua."'
    and Contraseña  = '".$cont."' and Puesto = 'Empleado'";

    $resultado2 = mysqli_query($conexion, $sql2);
    if ($fila = mysqli_fetch_array($resultado2)) {
        $_SESSION['dt1'] = $fila['Nombres'];
        $_SESSION['dt2'] = $fila['Apellidop'];
        $_SESSION['dt3'] = $fila['Apellidom'];
        $_SESSION['dt4'] = $fila['Puesto'];
        $_SESSION['dt5'] = $fila['Usuario'];
        header('Location:Historial.php');
    }else{
        
        header("Location:Login.php?alerta=1&conta=1");
    }

 }
