<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col" hidden></th>
            <th scope="col">Nombre del Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Nombre del que realizo la venta</th>
            <th scope="col">Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $fechi=date("Y-m-d");
        include "./../../includes/config.php";
        $sql = "SELECT * FROM ventas where Fecha='$fechi'";
        $resultado = mysqli_query($conexion, $sql);
        while ($fila = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <th scope="row" hidden><?php echo $fila['Id'] ?></th>
                <td> <?php echo $fila['Nombre_pro'] ?></td>
                <td> <?php echo $fila['Cantidad'] ?></td>
                <td> <?php
                $preci=$fila['Precio']; 
                $precire=number_format($preci,2);
                 echo $precire?></td>
                <td> <?php echo $fila['Nombre_em'] ?></td>
                <td> <?php echo $fila['Fecha'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>