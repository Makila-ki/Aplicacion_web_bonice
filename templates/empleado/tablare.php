<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Nombre del producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./../../includes/config.php";
        $fechi=date("Y-m-d");
        $sql = "SELECT * FROM ventas WHERE Fecha= '$fechi' and Nombre_em = '".$_SESSION['dt1']."' Order By Id DESC LIMIT 4";
        $resultado = mysqli_query($conexion, $sql);
        while ($fila = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td> <?php echo $fila['Nombre_pro'] ?></td>
                <td> <?php echo $fila['Cantidad'] ?></td>
                <td> <?php echo $fila['Precio'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>