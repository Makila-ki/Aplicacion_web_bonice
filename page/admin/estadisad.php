<?php  
session_start();
if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
?>

<div class="row">
    <h2 class= "Titulos">Estadisticas Por producto</h2>
    <div class="Tabla">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
            <div id="plotlyChart2"></div>
            <script>
                <?php
                include "./../../includes/config.php";
                $query1 = mysqli_query($conexion, "SELECT * FROM ventas_produ");
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
                Plotly.newPlot('plotlyChart2', data);
            </script>
    </div>
</div>

<?php
include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>