<?php 
session_start();
if(isset($_SESSION['dt5'])){
include "./../../includes/header.php";?>

<div class="row ms-5 mt-3">
    <div class="col-16 col-lg-8 cent">
        <h2 class= "Titulos">Resumen</h2>
        <h3 class= "Subtitulo">Ventas del dia</h3>
        <?php include "./../../templates/empleado/tablaem.php";?>
        <h3 class= "Subtitulo">Los Productos mas vendidos</h3>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
            <div id="plotlyChart3"></div>
            <script>
                <?php
                include "./../../includes/config.php";
                $query1 = mysqli_query($conexion, "SELECT * FROM ventas_produ ORDER By Cantidad_pro DESC LIMIT 4");
                $result1 = mysqli_num_rows($query1);
                $labels = [];
                $stock = [];
                $coloris = [];
                if ($result1 > 0) {
                    while ($data = mysqli_fetch_array($query1)) {
                        array_push($labels, $data['Nombre_pro']);
                        array_push($stock, $data['Cantidad_pro']);
                        array_push($coloris, $data['Color']);
                    }
                }
                ?>
                var data = [
                    {
                        x: <?php echo json_encode($labels); ?>,
                        y: <?php echo json_encode($stock); ?>,
                        type: 'bar',
                        marker: {
                            color: <?php echo json_encode($coloris); ?>,
                            line: {
                                width: 2.5
                            }
                        }
                    }
                ];
                Plotly.newPlot('plotlyChart3', data);
            </script>
    </div>

</div>

<?php include "./../../includes/footer.php";
}else{
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>