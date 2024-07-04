<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Usuario</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./../../includes/config.php";
        $sql = "SELECT * FROM usuarios where Puesto='Empleado'";
        $resultado = mysqli_query($conexion, $sql);
        while ($fila = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
             <form action="foractu.php" method="post">
                <th scope="row"><input type="text" name="id" value="<?php echo $fila['Id'] ?>" hidden></th>
                <td> <?php echo $fila['Nombres'] ?></td>
                <td> <?php echo $fila['Apellidop'] ?></td>
                <td> <?php echo $fila['Apellidom'] ?></td>
                <td> <?php echo $fila['Usuario'] ?></td>
                <td><input type="submit" class="btn btn-success" value="Actualizar"></td>
             </form>
             <td><a href="eli.php?elimi=<?php echo $fila['Id'] ?>"><button class="btn btn-danger">Eliminar</button></a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>