<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bonices</title>
    <?php
    if($_SESSION['ti']==1){
        ?>
    <link rel="stylesheet" href="./../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../assets/css/master.css">
    <script src="./../../assets/js/jquery.js"></script>
    <script src="./../../assets/js/master.js"></script>
    <script src="./../../assets/js/sweetalert.js"></script>
    <?php
    }elseif($_SESSION['ti']==2){
        ?>
        <link rel="stylesheet" href="./../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./../../assets/css/master.css">
        <script src="./../../assets/js/jquery.js"></script>
        <script src="./../../assets/js/master.js"></script>
        <script src="./../../assets/js/sweetalert.js"></script>
        <?php
    }
    ?> 
    
</head>
<body class="cuerpaso">
    <div>
    <header>
    <?php
    if($_SESSION['ti']==1){
       include "./../../templates/admin/navbar2.php";
    }elseif($_SESSION['ti']==2){
        include "./../../templates/empleado/navbar.php";
    }
    ?> 
    </header>
    <section>