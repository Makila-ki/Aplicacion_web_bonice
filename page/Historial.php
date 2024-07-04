<?php 
session_start();

include "./../includes/config.php";

$sql ="INSERT INTO inicios values (null, '".$_SESSION['dt1']."', '".$_SESSION['dt2']."', '".$_SESSION['dt3']."',
'".$_SESSION['dt4']."', NOW())";
$resultado=mysqli_query($conexion, $sql);

if($_SESSION['dt4']=="Administrador"){
    $_SESSION['ti']=1;
    header("Location:./admin/inicioad.php");
}else{
    if($_SESSION['dt4']=="Empleado"){
        $_SESSION['ti']=2;
        header("Location:./empleado/inicioem.php");
    }else{
    } 
}
