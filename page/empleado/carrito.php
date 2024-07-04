<?php
session_start();
$suma=0;

if(isset($_GET['p'])){
    $_SESSION['producto'][$_SESSION['contador']]=$_GET['p'];
    $_SESSION['canti'][$_SESSION['contador']]=$_GET['a'];
    $_SESSION['contador']++;
}
$conexion = mysqli_connect("localhost", "root", "", "proyecto");
echo "<table class='table table-dark table-striped>'";
echo "<tr><th scope='col'>Nombre</th> <th scope='col'>Precio</th> <th scope='col'>Cantidad</th></tr>";

for($i=0; $i<$_SESSION['contador'];$i++){
    $peticion = "SELECT * FROM producto where Id= ".$_SESSION['producto'][$i]."";
    $respuesta = mysqli_query($conexion,$peticion);
    while ($fila = mysqli_fetch_array($respuesta)){
        $preci=$fila['Precio']; 
        $precire=number_format($preci,2);
        echo "<tr><td>".$fila['Nombre']."</td><td>".$precire."</td><td>".$_SESSION['canti'][$i]."</td></tr>";
        $suma += $fila['Precio'];

    }
    
}
echo "<tr><td>Suma</td><td>".number_format($suma,2)."</td></tr>";
echo "<tr><td><a href='./borrar.php'><button>Borrar</button></a></td><td><a href='agregarem.php'><button>Confirmar compra</button></a></td></tr>";
echo "</table>";
?>