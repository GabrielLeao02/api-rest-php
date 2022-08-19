<?php

header('Access-Control-Allow-Origin: *');

header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");



if (isset($_GET['path'])){
    $path = explode("/", $_GET['path']);
}else{
    echo "Caminho nao existe";
}


