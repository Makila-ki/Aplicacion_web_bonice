<?php
session_start();
if (isset($_SESSION['dt5'])) {
    include "./../../includes/header.php";
    ?>

    <div class="row ms-5 mt-3">
        <div class="col-12 col-lg-8 cent">
            <h2 class= "Titulos">Reportes de la semana</h2>
            <h3 class= "Subtitulo">Productos mas vendidos</h3>

            <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
            <div id="plotlyChart"></div>
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
                Plotly.newPlot('plotlyChart', data);
            </script>

            <h3 class= "Subtitulo">Los mejores vendedores</h3>
            <div id="plotlyChart1"></div>
            <script>
                <?php
                include "./../../includes/config.php";
                $query2 = mysqli_query($conexion, "SELECT * FROM ventas_emple ORDER By Cantidad DESC LIMIT 4");
                $result2 = mysqli_num_rows($query2);
                $labels1 = [];
                $stock1 = [];
                if ($result2 > 0) {
                    while ($data1 = mysqli_fetch_array($query2)) {
                        array_push($labels1, $data1['Nombre_emple']);
                        array_push($stock1, $data1['Cantidad']);
                    }
                }
                ?>
                var data1 = [
                    {
                        x: <?php echo json_encode($labels1); ?>,
                        y: <?php echo json_encode($stock1); ?>,
                        type: 'bar',
                        marker: {
                            color: ['rgb(69,177,223)', 'rgb(99,201,122)', 'rgb(203,82,82)', 'rgb(229,224,88)'],
                            line: {
                                width: 2.5
                            }
                        }
                    }
                ];
                Plotly.newPlot('plotlyChart1', data1);
            </script>


        </div>

    </div>

    <?php include "./../../includes/footer.php";
} else {
    header("Location:./../Login.php?alerta=3&conta=0");
}
?>