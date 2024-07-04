<?php

include "./../../includes/config.php";

if(empty($_POST['nomm'])||empty($_POST['apep'])||empty($_POST['apem'])||
empty($_POST['usu'])||empty($_POST['cont'])||empty($_POST['tel'])||empty($_POST['call'])||
empty($_POST['num'])||empty($_POST['colo'])||empty($_POST['muni'])||empty($_POST['cp'])){
    header("Location:agread.php?boe2=3");
}else{
    $sql ="INSERT INTO usuarios values (null, '".$_POST['nomm']."',
    '".$_POST['apep']."', '".$_POST['apem']."', 'Empleado', '".$_POST['usu']."', '".$_POST['cont']."', '".$_POST['tel']."',
    '".$_POST['call']."', '".$_POST['num']."', '".$_POST['colo']."', '".$_POST['muni']."', '".$_POST['cp']."')";
$resultado=mysqli_query($conexion, $sql);
      if ($resultado){
        header("Location:agread.php?boe2=1");
      }else{
        header("Location:agread.php?boe2=2");
      }
      

}
