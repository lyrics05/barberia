<?php
require "includes/funciones.php";
$servicios= consultarDatos();

echo json_encode($servicios);