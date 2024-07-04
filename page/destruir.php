<?php
session_start();
session_destroy();
header("Location:Login.php?alerta=2&conta=0");