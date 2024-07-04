<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../assets/css/master.css">
    <script src="./../assets/js/jquery.js"></script>
    <script src="./../assets/js/master.js"></script>
    <script src="./../assets/js/sweetalert.js"></script>

</head>

<body class="cuerpesito">
    <div class="row formulari">
        <?php
        $tr = $_GET['conta'];
        if ($_GET['alerta'] == 1) {
            echo ' <script src="./../assets/js/alert/Dato_ne.js"></script>';
            $tr = $_GET['conta'];
        }
        if ($_GET['alerta'] == 2) {
            echo ' <script src="./../assets/js/alert/Cierre_se.js"></script>';
        }
        if ($_GET['alerta'] == 3) {
            echo ' <script src="./../assets/js/alert/No_in.js"></script>';
        }
        if ($_GET['alerta'] == 4) {
            echo ' <script src="./../assets/js/alert/No_en.js"></script>';
        }
        ?>
        <div class="col-12 col-lg-8 Imanene">
            <?php
            if ($tr == 1) {
                ?>
                <a href="./Login.php?alerta=4&conta=1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-exclamation-circle-fill pepa" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552
         0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                </a>
                <?php
            } else {
                ?>

                <?php

            }
            ?>
            <h2>Bonices</h2>
            <h2>Los Reyes la paz</h2>
        </div>

        <div class="col-12 col-lg-4 mt-5 mt-lg-0 Pregu">
            <h1><svg xmlns="http://www.w3.org/2000/svg" width="65" height="50" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
  <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>Login</h1>
            <form action="confirmar.php" method="post">
                <label class="us" for="">Usuario</label>
                <input type="text" class="cuadro" name="usu" placeholder="Usuario">
                <label class="us" for="contrasena">Contraseña</label>
                <input type="password" class="cuadro" name="con" placeholder="Contraseña">
                <input type="submit" class="entrar" value="Entrar">
            </form>
        </div>
    </div>
</body>

</html>