<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Color</th>
            <th scope="col">Imagen</th>
            <th scope="col">Estado</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./../../includes/config.php";
        $sql = "SELECT * FROM producto";
        $resultado = mysqli_query($conexion, $sql);
        while ($fila = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
             <form action="actualizarad2.php" method="post">
                <th scope="row"><input type="text" name="id" value="<?php echo $fila['Id'] ?>" hidden></th>
                <td> <input type="text" name="nom" value="<?php echo $fila['Nombre'] ?>"></td>
                <td> <input type="text" name="can" class="numme" value="<?php echo $fila['Cantidad'] ?>"></td>
                <td> <input type="text" name="pre" class="numme" value="<?php
                $preci=$fila['Precio']; 
                $precire=number_format($preci,2);
                 echo $precire?>"></td>
                <td> <input type="color" name="col" class="form-control form-control-color" id="exampleColorInput" value="<?php echo $fila['Color'] ?>" title="Choose your color"></td>
                <td> <input type="text" name="img" value="<?php echo $fila['Img'] ?>"></td>
                <td> <input type="text" name="est" class="numme" value="<?php echo $fila['estado'] ?>"></td>
                <td><input type="submit" class="btn btn-success" value="Actualizar"></td>
             </form>
             <td><a href="eliminarad.php?eliminar=<?php echo $fila['Id'] ?>"><button class="btn btn-danger">Eliminar</button></a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>