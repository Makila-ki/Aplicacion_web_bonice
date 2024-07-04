<?php

include "./../../includes/config.php";

if(empty($_POST['no'])||empty($_POST['ca'])||empty($_POST['pr'])||
empty($_POST['co'])||empty($_POST['im'])||empty($_POST['es'])){
    header("Location:agregarad2.php?bo2=3");
}else{
    $sql ="INSERT INTO producto values (null, '".$_POST['no']."',
'".$_POST['ca']."', '".$_POST['pr']."', '".$_POST['co']."', '".$_POST['im']."', '".$_POST['es']."')";
$resultado=mysqli_query($conexion, $sql);
      if ($resultado){
        header("Location:agregarad2.php?bo2=1");
      }else{
        header("Location:agregarad2.php?bo2=2");
      }
      

}
