<?php
session_start();
$idpo = $_POST['id'];

if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
    ?>

    <div class="row">
        <h2 class="Titulos">Actualizar Empleado</h2>
        <div class="formtt">
            <?php
            include "./../../includes/config.php";
            $sql = "SELECT * FROM usuarios where Id='$idpo'";
            $resultado = mysqli_query($conexion, $sql);
            while ($fila = mysqli_fetch_array($resultado)) {
                ?>
                <form action="actuad2.php" method="post">
                <input type="text" name="id" value="<?php echo $fila['Id'] ?>" hidden>
                <label for="exampleInputEmail1" class="form-label">Nombre del usuario: </label>
                    <input type="text" name="nomm" placeholder="Nombre" value="<?php echo $fila['Nombres'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Apellido Paterno: </label>
                    <input type="text" name="apep" placeholder="Apellido Paterno" value="<?php echo $fila['Apellidop'] ?>" >
                    <label for="exampleInputEmail1" class="form-label">Apellido Materno: </label>
                    <input type="text" name="apem" placeholder="Apellido Materno" value="<?php echo $fila['Apellidom'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Usuario: </label>
                    <input type="text" name="usu" placeholder="Usuario" value="<?php echo $fila['Usuario'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Contraseña: </label>
                    <input type="text" name="cont" placeholder="Contraseña" value="<?php echo $fila['Contraseña'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Numero de telefono: </label>
                    <input type="text" name="tel" placeholder="Telefono" value="<?php echo $fila['Telefono'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Calle del usuario: </label>
                    <input type="text" name="call" placeholder="calle" value="<?php echo $fila['Calle'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Numero del domicilio: </label>
                    <input type="text" name="num" placeholder="Numero" value="<?php echo $fila['Numero'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la Colonia: </label>
                    <input type="text" name="colo" placeholder="Colonia" value="<?php echo $fila['Colonia'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Nombre del Municipio: </label>
                    <input type="text" name="muni" placeholder="Municipio" value="<?php echo $fila['Municipio'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Codigo Postal: </label>
                    <input type="text" name="cp" placeholder="CP" value="<?php echo $fila['CP'] ?>">
                    <label for="exampleInputEmail1" class="form-label"></label>
                    <input type="submit" class="Guardar" value="Guardar">
                </form>
                <a href="actuad.php?boe=0"><button class="btn btn-danger papani">Cancelar
                </button></a>
                <?php
            }
            ?>
        </div>
    </div>

    <?php
    include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>