<?php
session_start();

$usuario = $_SESSION['dt5'] ;
$contador = 0;


$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$peticion = "SELECT * FROM usuarios where Usuario = '$usuario'";
$respuesta = mysqli_query($conexion, $peticion);
while ($fila = mysqli_fetch_array($respuesta)) {
    $_SESSION['idusuario'] = $fila['Id'];
    $contador++;
}

if ($contador > 0) {
    $peticion2 = "INSERT INTO pedidos VALUES(NULL, " . $_SESSION['idusuario'] . ", NOW(), 1)";
    $respuesta2 = mysqli_query($conexion, $peticion2);

    $peticion3 = "SELECT * FROM pedidos WHERE Id = " . $_SESSION['idusuario'] . " ORDER BY Fecha DESC LIMIT 1";
    $respuesta3 = mysqli_query($conexion, $peticion3);
    while ($fila3 = mysqli_fetch_array($respuesta3)) {
        $_SESSION['idpedido'] = $fila3['Id'];
    }

    for ($i = 0; $i < $_SESSION['contador']; $i++) {
        $peticion5 = "SELECT * FROM producto WHERE Id = " . $_SESSION['producto'][$i] . "";
        $respuesta5 = mysqli_query($conexion, $peticion5);
        if($fila5 = mysqli_fetch_array($respuesta5)){
            $iddd=$fila5['Id'];
            $nomm=$fila5['Nombre'];
            $precii=$fila5['Precio'];
            $can=$fila5['Cantidad'];
            $colo=$fila5['Color'];
        }
        $papane=$_SESSION['canti'][$i]*$precii;
        $peticion4 = "INSERT INTO ventas VALUES (NULL,'" .$nomm. "', " . $_SESSION['canti'][$i] . ",'". $papane."', NOW(), '" . $_SESSION['dt1'] . "')";
        $respuesta4 = mysqli_query($conexion, $peticion4);
        
        $peticion6 = "SELECT * FROM ventas_emple WHERE Nombre_emple = '" . $_SESSION['dt1'] . "'";
        $respuesta6 = mysqli_query($conexion, $peticion6);
        if($fila6 = mysqli_fetch_array($respuesta6)){
            $pa1=$fila6['Id'];
            $pa=$fila6['Cantidad'];
            $pa2=$pa+$_SESSION['canti'][$i];

            $peticion7 = "UPDATE ventas_emple set Cantidad= ".$pa2." WHERE Nombre_emple = '" . $_SESSION['dt1'] . "'";
            $respuesta7 = mysqli_query($conexion, $peticion7);
        }else{
            $peticion8 = "INSERT INTO ventas_emple VALUES (NULL,'" .$_SESSION['dt1']. "', " . $_SESSION['canti'][$i] . ")";
            $respuesta8= mysqli_query($conexion, $peticion8);
        }

        $peticion9 = "SELECT * FROM ventas_produ WHERE Nombre_pro = '" . $nomm . "'";
        $respuesta9 = mysqli_query($conexion, $peticion9);
        if($fila9 = mysqli_fetch_array($respuesta9)){
            $pa3=$fila9['Id'];
            $pa6=$fila9['Nombre_pro'];
            $pa4=$fila9['Cantidad_pro'];
            $pa5=$pa4+$_SESSION['canti'][$i];

            $peticion10 = "UPDATE ventas_produ set Cantidad_pro= ".$pa5." WHERE Nombre_pro = '" . $pa6 . "'";
            $respuesta10 = mysqli_query($conexion, $peticion10);
        }else{
            $peticion11 = "INSERT INTO ventas_produ VALUES (NULL,'" .$nomm. "', " . $_SESSION['canti'][$i] .", '".$colo."', NOW())";
            $respuesta11= mysqli_query($conexion, $peticion11);
        }
        $can2=$can-$_SESSION['canti'][$i];
        $peticion12 = "UPDATE producto set Cantidad= ".$can2." WHERE Nombre = '" .$nomm. "'";
        $respuesta12 = mysqli_query($conexion, $peticion12);
    }
    header("Location:venta.php?boem=1");
    

} else {
    header("Location:venta.php?boem=2");
}
?>